@extends('layouts.layout')

<!-- Main Content -->
@section('content')
<div class="container col s12">
    <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
            {{ csrf_field() }}
            <h4 class="teal-text lighten-1">Recuperar Senha</h4>
            <div class="row">
                <div class="input-field col s12 {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required autofocus>
                    <label for="email">Email</label>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                            Enviar link de recuperação de senha
                    </button>
                </div>
            </div>
        </form>
        @if (session('status'))
            <div class="card-panel teal lighten-2">
                <span class="white-text text-darken-2">{{ session('status') }}</span>
            </div>
        @endif
    </div>
</div>
@endsection
