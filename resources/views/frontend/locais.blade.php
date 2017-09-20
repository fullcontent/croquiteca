@extends('frontend.index')

@section('title','Locais')


@section('content')

	<h2>Locais</h2>
  <hr>
	
            

    
            

          @foreach($locais as $local)
           
            <div class="col-md-4 col-sm-2">
                <div class="thumbnail">
                  <img src="<?=url('/')?>/{{$local->imagem}}" alt="" style="height: 250px;">
                  <div class="caption">
                    <h3>{{$local->nome}}</h3>
                    <p>{{ substr($local->descricao, 0, 200) }} ...</p>
                    <p><a href="">Saiba mais</a></p>
                  </div>
                </div>
              </div>      
          @endforeach          


@endsection