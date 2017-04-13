@extends('layouts.app')

@section('content')
<div class="container">
    <h4 class="teal-text lighten-1">Cadastre-se</h4>
    <div class="row">
        <form class="col s12" role="form" method="POST" action="{{ url('/register') }}">
            {{ csrf_field() }}

            <div class="row">
                <div class="input-field col s12 {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="validate" name="name" value="{{ old('name') }}" required autofocus>
                    <label for="name">Nome</label>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

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

            <div class="row">
                <div class="input-field col s12">
                    <input id="password-confirm" name="password_confirmation" type="password" class="validate" required>
                    <label for="password-confirm" class="col-md-4 control-label">Confirme a Senha</label>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
