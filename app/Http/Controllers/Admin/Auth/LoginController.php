<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foudation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    protected $redirectTo = '/painel';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(Request $request){
        $tries = $request->session()->get('login_tries', 0);

        // Internacionalização no controller
        $frase = __('messages.test');
        // echo "FRASE: ".$frase;

        return view('admin.login', [
            'tries' => $tries
        ]);
    }

    public function authenticate(Request $request){
        $creds = $request->only(['email','password']);
        $tries = intval($request->session()->get('login_tries', 0));

        // get, put, forget
        $request->session()->forget('login-tries');

        $validator = $this->validator($creds);

        $remember = $request->input('remember', false);

        if($validator->fails()) {
            return redirect()->route('login')
            ->withErrors($validator)
            ->withInput();
        }

        if(Auth::attempt($creds, $remember)) {
            $request->session()->put('login_tries', 0);
            return redirect()->route('admin');
        } else {
            $tries = intval($request->session()->get('login_tries', 0));
            // $tries += 1; // ou
            $request->session()->put('login_tries', ++$tries);

            $validator->errors()->add('password', 'E-mail e/ou senha inválidos');

            return redirect()->route('login')
                ->withErrors($validator)
                ->withInput();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    protected function validator(array $data) {
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'max:100'],
            'password' => ['required', 'string', 'min:4']
        ]);
    }
}
