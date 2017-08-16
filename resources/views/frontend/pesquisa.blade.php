@extends('frontend.index')

@section('title','Listagem de Vias')


@section('content')

	<h1>Resultado da Pesquisa:</h1>
	
    <div class="col-sm-4 col-md-12">
          
            
            <table class="table table-striped" data-effect="fade">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Tipo</th>
                  <th>Graduação</th>
                  <th>Local</th>
                  <th>Setor</th>
                  <th>Cidade</th>
                  <th>Estado</th>
                  <th>actions</th>
                </tr>
              </thead>
              <tbody>

              @foreach($pesquisa as $via)
                <tr>
                  <td>{{$via->id}}</td>
                  <td>{{$via->nome}}</td>
                  <td>{{$via->tipo}}</td>
                  <td>{{$via->graduacao}}</td>
                  <td>{{$via->setor}}</td>
                  <td>{{$via->local}}</td>
                  <td>{{$via->cidade}}</td>
                  <td>{{$via->estado}}</td>
                  <td>botao</td>
                </tr>
               @endforeach
              </tbody>
            </table>          
         
</div>          


@endsection