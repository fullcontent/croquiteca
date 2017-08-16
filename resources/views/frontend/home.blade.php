@extends('frontend.index')



@section('title', 'Croquiteca - Home')


@section('content')
@include('frontend.map')


<div class="col-sm-4 col-md-12">
          
            <p class="lead text-muted">Todas as vias</p>
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
                </tr>
              </thead>
              <tbody>

              @foreach($vias as $via)
                <tr>
                  <td>{{$via->id}}</td>
                  <td>{{$via->nome}}</td>
                  <td>{{$via->tipo}}</td>
                  <td>{{$via->graduacao}}</td>
                  <td>{{$via->setor}}</td>
                  <td>{{$via->local}}</td>
                  <td>{{$via->cidade}}</td>
                  <td>{{$via->estado}}</td>
                </tr>
               @endforeach
              </tbody>
            </table>  
            {!! $vias->links() !!}        
         
</div>








@endsection