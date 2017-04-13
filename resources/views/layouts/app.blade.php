<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{ asset('/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="{{ url('/') }}" class="brand-logo">Seu Político</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="{{ url('/politicos') }}">Políticos</a></li>
                    <li><a href="{{ url('/#contato') }}">Fale Conosco</a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="/login">Entrar</a></li>
                    <li><a href="{{ url('/register') }}">Cadastre-se</a></li>
                    @else
                        <ul id="dropdown1" class="dropdown-content">
                            <li class="divider"></li>
                            <li><a href="#!">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="#!">Configurações</a></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        <!-- Dropdown Trigger -->
                        <li>
                            <a class="dropdown-button" href="#!" data-activates="dropdown1">{{ Auth::user()->name }} <span class="caret"><i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                    @endif
                </ul>

                <ul id="nav-mobile" class="side-nav">
                    <li><a href="{{ url('/politicos') }}">Políticos</a></li>
                    <li><a href="#">Fale Conosco</a></li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Entrar</a></li>
                    <li><a href="{{ url('/register') }}">Cadastre-se</a></li>
                    @else
                        <ul id="dropdown2" class="dropdown-content">
                            <li class="divider"></li>
                            <li><a href="#!">Perfil</a></li>
                            <li class="divider"></li>
                            <li><a href="#!">Configurações</a></li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Sair
                                </a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                        <!-- Dropdown Trigger -->
                        <li>
                            <a class="dropdown-button" href="#!" data-activates="dropdown2">{{ Auth::user()->name }} <span class="caret"><i class="material-icons right">arrow_drop_down</i></a>
                        </li>
                    @endif
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
            </div>
        </nav>
        @yield('content')
    </div>

    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">GEATI / IFC - Camboriú </h5>
                    <p class="grey-text text-lighten-4">O GEATI é o Grupo de Estudos Avançados em Tecnologia da Informação do Instituto Federal Catarinense Campus Camboriú.</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Conecte-se</h5>
                    <ul>
                        <li><a class="white-text" href="http://www.camboriu.ifc.edu.br/">IFC - Camboriú</a></li>
                        <li><a class="white-text" href="http://www.geati.ifc-camboriu.edu.br/">GEATI - Camboriú</a></li>
                        <li><a class="white-text" href="https://github.com/GEATI-IFC">Github GEATI</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Links Úteis</h5>
                    <ul>
                        <li><a class="white-text" href="http://www2.camara.leg.br/">Câmara</a></li>
                        <li><a class="white-text" href="http://www.senado.leg.br/">Senado</a></li>
                        <li><a class="white-text" href="http://dados.gov.br/">Dados Abertos</a></li>
                        <li><a class="white-text" href="http://vigieaqui.com.br/">Vigie Aqui</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Desenvolvido por <a class="brown-text text-lighten-3" href="http://www.geati.ifc-camboriu.edu.br/"> GEATI / IFC - Camboriú</a>
            </div>
        </div>
    </footer>

    <!--  Scripts-->
    <script src="{{ asset('/js/materialize.js') }}"></script>
    <script src="{{ asset('/js/init.js') }}"></script>
</body>
</html>