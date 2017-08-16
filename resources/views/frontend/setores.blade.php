@extends('frontend.index')

@section('title','Listagem Setores')


@section('content')

	<h1>Setores</h1>

            

         
            <div class="col-sm-6 col-lg-4">
               
                 @foreach($setores as $local)

                 <?php 

                      $url = route('setores');
                      $url .= "/".$local->sector_id."";

                      

                 ?>
                    
                  <a href="<?php echo $url;  ?>" class="list-group-item"><span class="badge">{{$local->counter}}</span>{{$local->nome}}</a>
                      
                  @endforeach
             
              </div>      
          

    <div class="col-sm-6 col-lg-8">
        
        
          <p class="lead text-muted">{{$setor->nome}}</p>
          <table class="table table-bordered" data-effect="fade">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                  <th>Graduação</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
               @foreach($vias as $via)
                <tr>
                  <td>{{$via->id}}</td>
                  <td>{{$via->nome}}</td>
                  <td>{{$via->graduacao}}</td>
                  <td>DETALHES</td>
                </tr>
               @endforeach
              </tbody>
            </table>
    </div>




               


@endsection