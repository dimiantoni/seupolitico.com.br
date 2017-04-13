@extends('layouts.layout')

@section('content')
<div class="container">
    <h4 class="teal-text lighten-1">Login</h4>
    <div class="row">
        <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="row">
              <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                <label for="email">Email</label>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
            </div>

            <div class="row">
                <div class="input-field col s12 {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" name="password" type="password" class="validate" required>
                    <label for="password">Senha</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <p>
                <input type="checkbox" class="filled-in" id="remember" name="remember" checked="checked" required/>
                <label for="remember">Continuar conectado</label>
            </p>
            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Entrar
                    </button>
                    <a class="btn btn-link" href="{{ url('/password/reset') }}">
                        Esqueceu sua senha?
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
