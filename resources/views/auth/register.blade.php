@extends('main')

@section('conteudo')


<div class="col-md-8 col-md-offset-2" style="margin-top: 100px;">
        <div class="panel panel-default">
                <div class="panel-heading"> <h3> Já é associado e possui um número de registro? </h3>
        <h4> Insira o número abaixo e verifique seus dados </h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/verificar') }}">
                        {{ csrf_field() }}

                        
                            <label for="registro" class="col-md-4 control-label">Registro Nº: </label>

                            <div class="col-md-6">
                                <input id="registro" type="text" class="form-control" name="registro">

                            </div>
                       <br><br>
                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-search"></i> Verificar
                                </button>
                            </div>
                        </div>

                </form>
            </div>
        </div>
    </div>
             <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">   
                <center>OU</center>
                </div>
                </div>

        <div class="col-md-8 col-md-offset-2" style="margin-bottom: 100px;">
            <div class="panel panel-default">
                <div class="panel-heading">Registre-se</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome: </label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Endereço de e-mail: </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Senha: </label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirme a senha: </label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
       


@endsection
