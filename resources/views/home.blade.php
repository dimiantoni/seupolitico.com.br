@extends('layouts.layout')

@section('content')

<div style="min-height: 550px;" id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
        <div class="container">
            <h2 class="header center">Acompanhe seus representantes no congresso</h2>
            <div class="row center">
                <h5 class="header col s12 light">Aqui você encontra a relação de Deputados Federais</h5>
            </div>
            <div class="row center">
                <a href="{{url('/politicos')}}" id="download-button" class="btn-large waves-effect waves-light grey teal-text lighten-5 z-depth-5">Ver Deputados</a>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="images/header-banner.jpg" alt="Unsplashed background img 1"></div>
</div>

<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center icons-home"><i class="material-icons">person_pin</i></h2>
                    <h5 class="center">Identifique os corruptos</h5>

                    <p class="light">Com o auxílio do aplicativo <a url='http://www.vigieaqui.com.br/'>Vigie Aqui</a>, você pode verificar se cada político é <b>FICHA SUJA</b>, se foi condenado na <b>LAVA JATO</b> ou se teve outros problemas de <b>CORRUPÇÃO</b></p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center icons-home"><i class="material-icons">settings</i></h2>
                    <h5 class="center">Instale o plugin Vigie Aqui</h5>

                    <p class="light">Para que esse serviço de informação funcione adequadamente, instale o plugin <a url='http://www.vigieaqui.com.br/'>Vigie Aqui</a>. Depois, é só passar o mouse sobre os nomes de Políticos destacados para ter acesso ao histórico judicial dos mesmos.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center icons-home"><i class="material-icons">announcement</i></h2>
                    <h5 class="center">Observação</h5>

                    <p class="light">Só funciona no Google Chrome. Alguns nomes podem não ser marcados, pois a ferramenta ainda está em desenvolvimento e não conseguiu identificar corretamente.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h3 class="header col s12 light">Saiba o que os parlamentares eleitos pelo seu<br> estado estão fazendo por você e pelo Brasil</h3>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="images/background2.jpg" alt="Unsplashed background img 2"></div>
</div>

<div class="container">
    <div id="lista" class="section scrollspy">
        <div class="row">
            <div class="col s12 center">
                <h1 class="center icons-home"><i class="large material-icons">group</i></h1>
                {{-- <h3><i class="mdi-content-send brown-text"></i></h3> --}}
                <h4>Aqui você encontra a relação de Deputados Federais.</h4>

            </div>
        </div>
    </div>
</div>

<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h4 class="header col s12 light">Fiscalize e cobre seus representantes, ajude-nos a transformar o Brasil em um país melhor</h4>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="images/background3.jpg" alt="Unsplashed background img 3"></div>
</div>

<div class="container">
    <div id="contato" class="section scrollspy">
        <div class="row">
            <div class="col s12 center">
                <h1 class="icons-home"><i class="large material-icons">contact_mail</i></h1>
                <h4>Entre em contato conosco e saiba como ajudar</h4>
            </div>
        </div>
        <div class="row">
            <div class="col s12 center">
                <div class="row">
                    <form class="col s12">
                      <div class="row">
                        <div class="input-field col s6">
                          <i class="material-icons prefix">account_circle</i>
                          <input id="icon_nome" type="text" class="validate">
                          <label for="icon_nome">Nome</label>
                        </div>
                        <div class="input-field col s6">
                          <i class="material-icons prefix">email</i>
                          <input id="icon_email" type="text" class="validate">
                          <label for="icon_email">Email</label>
                        </div>
                        <div class="input-field col s12">
                          <i class="material-icons prefix">chat_bubble</i>
                          <textarea id="textarea1" class="materialize-textarea"></textarea>
                          <label for="textarea1">Mensagem</label>
                        </div>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                            <i class="material-icons right">send</i>
                          </button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
