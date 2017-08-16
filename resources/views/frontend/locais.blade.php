@extends('frontend.index')

@section('title','Locais')


@section('content')

	<h1>Locais</h1>
	
            

    
            

          @foreach($locais as $local)
           
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail">
                  <img src="{{$local->imagem}}" alt="">
                  <div class="caption">
                    <h3>{{$local->nome}}</h3>
            
                  </div>
                </div>
              </div>      
          @endforeach          


@endsection