@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
	<h1>Novo Usuário</h1>
@endsection

@section('content')
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i> Atenção!</h4>
            <h5>&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;:&nbsp;&nbsp;Ocorreu(ram) erro(s):</h5>
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header" style="font-size: 22px; font-weight: 400000;">
          &nbsp;:&nbsp;:&nbsp;Cadastrar
        </div>
        <div class="card-body">
            <form action={{ route('users.store') }} class="form-horizontal" method="POST">
                @csrf

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nome Completo</label>

                  <div class="col-sm-10">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Informe o seu nome" value="{{old('name')}}" >
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">E-mail</label>

                  <div class="col-sm-10">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Informe o seu e-mail" value="{{old('email')}}" >
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nova Senha</label>

                  <div class="col-sm-10">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Informe a sua senha" >
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Confirmação da Senha</label>

                  <div class="col-sm-10">
                      <input type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirme a sua senha" >
                  </div>
                </div>

                <div class="form-group row">
                  <span class="col-sm-2 col-form-label"></span>

                  <span class="col-sm-10">
                    <button type="submit" class="btn btn-flat margin btn-success btn-normal" >Cadastrar</button>
                    <a href="{{ route('users.index') }}" class="btn btn-flat margin btn-default btn-normal style="width: 250px;">Fechar</button>
                  </div>
                </div>
              </form>
        </div>
    </div>
@endsection
