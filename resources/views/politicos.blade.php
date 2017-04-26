@extends('layouts.app')
@section('content')

<div class="container col s12 ">
    <div class="row col s10 center">
        <h3><i class="large material-icons">group</i></h3>        
        <h5>Aqui você encontra a relação de Deputados Federais</h5>
        <div class="row col s6">
            <select multiple>
                <option value="" disabled selected>Filtrar por estado</option>
                <option value="AC">Acre - AC</option>
                <option value="AL">Alagoas - AL</option>
                <option value="AP">Amapá - AP</option>
                <option value="AM">Amazonas - AM</option>
                <option value="BA">Bahia - BA</option>  
                <option value="CE">Ceará - CE</option>  
                <option value="DF">Distrito Federal - DF</option>  
                <option value="ES">Espírito Santo - ES</option>  
                <option value="GO">Goiás - GO</option>  
                <option value="MA">Maranhão - MA</option>  
                <option value="MT">Mato Grosso - MT</option>  
                <option value="MS">Mato Grosso do Sul - MS</option>  
                <option value="MG">Minas Gerais - MG</option>  
                <option value="PA">Pará - PA</option>  
                <option value="PB">Paraíba - PB</option>  
                <option value="PR">Paraná - PR</option>  
                <option value="PE">Pernambuco - PE</option>  
                <option value="PI">Piauí - PI</option>  
                <option value="RJ">Rio de Janeiro - RJ</option>  
                <option value="RN">Rio Grande do Norte - RN</option>  
                <option value="RS">Rio Grande do Sul - RS</option>  
                <option value="RO">Rondônia - RO</option>  
                <option value="RR">Roraima - RR</option>  
                <option value="SC">Santa Catarina - SC</option>  
                <option value="SP">São Paulo - SP</option>  
                <option value="SE">Sergipe - SE</option>  
                <option value="TO">Tocantins - TO</option>
            </select>
            <label>Filtrar por estado</label>
        </div>
        <div class="row col s5">
            <select multiple>
              <option value="" disabled selected>Filtrar por partido</option>
              <option value="1">Option 1</option>
              <option value="2">Option 2</option>
              <option value="3">Option 3</option>
            </select>
            <label>Filtrar por estado</label>
        </div>

        <div class="row col s1">
            <a class="waves-effect waves-light btn"> filtrar</a>
        </div>

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
                @foreach ($deputados as $fdp)
                    <tr>
                        <td><img style="border-radius: 5%;" src="{{ $fdp->url_foto }}"></td>
                        <td>{{ ucwords(strtolower($fdp->nome_parlamentar)) }}</td>
                        <td>{{ ucwords(strtolower($fdp->nome)) }}</td>
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
        <p>Mostrando: {{ $deputados->count() }} de parlamentares de um total de {{ $deputados->total() }}</p>
        <?php $total = $deputados->total(); ?>
        <?php $viewPerPage = $deputados->count(); ?>
        <?php $totalPages = $total / $viewPerPage;?>
        <?php $totalPages = ceil($totalPages);?>
        <?php $page = 1;?>
        {{-- {!! $deputados->links() !!} --}}
        <ul class="pagination">
            <li class="disabled"><a href="{{ url('/politicos?page=') }}{{ $deputados->previousPageUrl() }}"><i class="material-icons">chevron_left</i></a></li>
            @while($page <= $totalPages)
                @if($page == $deputados->currentPage())
                <li  class="active"><a href="{{ url('/politicos?page=') }}{{$deputados->currentPage()}}">{{ $page }}</a></li>
                @else
                <li><a href="{{ url('/politicos?page=') }}{{ $page }}">{{ $page }}</a></li>
                @endif
                <?php $page++; ?>
            @endwhile
            <li class="waves-effect"><a href="{{ url('/politicos?page=') }}{{ $deputados->nextPageUrl() }}"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
</div>
@endsection