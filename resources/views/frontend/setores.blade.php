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
        
        
          
          <table class="table table-bordered" data-effect="fade">
              <thead>
                <tr>
                  <th width="1%" nowrap="nowrap">#</th>
                  <th >Nome</th>
                  <th width="1%" nowrap="nowrap">Graduação</th>
                  <th width="1%" nowrap="nowrap"></th>
                </tr>
              </thead>
              <tbody>
               @foreach($vias as $via)
                <tr>
                  <td>{{$via->id}}</td>
                  <td>{{$via->nome}}</td>
                  <td>{{$via->graduacao}}</td>
                  <td><a href="<?=url('/')?>/via/{{ $via->id }}">visualizar</a></td>
                </tr>
               @endforeach
              </tbody>
            </table>
            {!! $vias->render() !!}
    </div>







               


@endsection