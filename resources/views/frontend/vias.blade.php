@extends('frontend.index')

@section('title','Listagem de Vias')


@section('content')

	<h1>{{$local}}</h1>
	<div class="col-sm-6 col-lg-12">
            <p class="lead text-muted">{{$local}}</p>
            <table class="table table-striped" data-effect="fade">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Graduacao</th>
                  <th>Local</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($vias as $via)
                <tr>
                  <td>{{$via->nome}}</td>
                  <td>{{$via->graduacao}}</td>
                  <td>{{$via->sector_id}}</td>
                  <td>actions</td>
                </tr>
               @endforeach
              </tbody>
            </table>          
    </div>


@endsection