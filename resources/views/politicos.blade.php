@extends('layouts.layout')
@section('content')

<div class="container">
    <div id="lista" class="section scrollspy">
        <div class="row">
            <div class="col s12 center">
                <h3><i class="large material-icons">group</i></h3>
                <h4>Aqui você encontra a relação de Deputados Federais</h4>
                <?php
                    // CAPTURA DE DADOS POR GET
                    //$deputados = simplexml_load_file("http://www.camara.gov.br/SitCamaraWS/Deputados.asmx/ObterDeputados");
                    //echo "<pre>";print_r($deputados);exit();
                ?>
                <table class="display striped highlight centered" width="100%">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nome Parlamentar</th>
                            <th>Nome</th>
                            <th>Estado</th>
                            <th>Partido</th>
                            <th>Contatos</th>
                        </tr>
                    </thead>

                    <tfoot>
                        <tr>
                      <th>Foto</th>
                            <th>Nome Parlamentar</th>
                            <th>Nome</th>
                            <th>Estado</th>
                            <th>Partido</th>
                            <th>Contatos</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($deputados->deputado as $fdp)
                            <tr>
                                <td><img style="border-radius: 5%;" src="{{$fdp->urlFoto}}"></td>
                                <td>{{ $fdp->nomeParlamentar }}</td>
                                <td>{{ $fdp->nome }}</td>
                                <td>
                                    <i class="material-icons">location_on</i><a href="#"> {{ $fdp->uf }}</a>
                                </td>
                                <td>
                                    <i class="material-icons">flag</i><a href="#"> {{ $fdp->partido }}</a>
                                </td>
                                <td>
                                    <a class="btn btm-link" href="#"><i class="material-icons">send</i></a>
                                </td>
                            </tr>
                        @endforeach;

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection