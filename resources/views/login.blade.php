<!-- Modal Structure -->
<div id="login" class="modal">
    <div class="modal-content">
        <div class="row">
            <form class="col s12" role="form" method="POST" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <center><h5 class="teal-text lighten-1">Login</h5></center>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="row">
                  <div class="input-field col s12">
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
                        <p>
                            <input type="checkbox" class="filled-in" id="remember" name="remember" checked="checked" required/>
                            <label for="remember">Continuar conectado</label>
                        </p><br>
                        <button type="submit" class="large btn btn-primary">
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
</div>