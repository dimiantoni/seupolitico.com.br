@extends('layouts.app')
@section('content')

<div class="container col s12 ">
    <div class="row col s10 center">
        <h3><i class="large material-icons">group</i></h3>
        <h4>Aqui você encontra a relação de Deputados Federais</h4>
        <table class="display striped highlight centered" width="100%">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nome Parlamentar</th>
                    <th>Nome Completo</th>
                    <th>Estado</th>
                    <th>Partido</th>
                    <th>Enviar Email</th>
                </tr>
            </thead>

            <tfoot>
                <tr>
              <th>Foto</th>
                    <th>Nome Parlamentar</th>
                    <th>Nome Completo</th>
                    <th>Estado</th>
                    <th>Partido</th>
                    <th width="10%">Enviar Email</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($deputados->deputado as $fdp)
                    <tr>
                        <td><img style="border-radius: 5%;" src="{{ $fdp->urlFoto }}"></td>
                        <td>{{ $fdp->nomeParlamentar }}</td>
                        <td>{{ $fdp->nome }}</td>
                        <td>
                            <i class="material-icons">location_on</i><a href="#"> {{ $fdp->uf }}</a>
                        </td>
                        <td>
                            <i class="material-icons">flag</i><a href="#"> {{ $fdp->partido }}</a>
                        </td>
                        <td>
                            <a class="btn btn-link" href="#"><i class="material-icons">send</i></span></a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection