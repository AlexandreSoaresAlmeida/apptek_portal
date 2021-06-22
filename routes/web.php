<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\HomeController as HomeAdminController;
use App\Http\Controllers\Site\HomeController  as HomeSiteController;
use App\Http\Controllers\Admin\Auth\LoginController;
// use App\Http\Controllers\Admin\Auth as AuthController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\PageController as PageAdminController;
use App\Http\Controllers\Site\PageController as PageSiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeSiteController::class, 'index']);

Route::prefix('painel')->group(function(){
    Route::get('/'          , [HomeAdminController::class, 'index'       ])->name('admin');

    Route::get('login'      , [LoginController::class    , 'index'       ])->name('login');
    Route::post('login'     , [LoginController::class    , 'authenticate']);

    Route::get('register'   , [RegisterController::class , 'index'       ])->name('register');
    Route::post('register'  , [RegisterController::class , 'register'    ]);

    Route::post('logout'    , [LoginController::class    , 'logout'      ])->name('logout');

    Route::resource('users' , UserController::class);
    Route::resource('pages' , PageAdminController::class);

    Route::get('profile'    , [ProfileController::class , 'index'        ])->name('profile');
    Route::put('profilesave', [ProfileController::class , 'save'         ])->name('profile.save');

    Route::get('settings'    , [SettingController::class , 'index'        ])->name('settings');
    Route::put('settingssave', [SettingController::class , 'save'         ])->name('settings.save');

});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::fallback([PageSiteController::class,'index']);
