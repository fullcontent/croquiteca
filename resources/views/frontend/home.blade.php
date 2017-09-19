@extends('frontend.index')



@section('title', 'Croquiteca - Home')


@section('content')
@include('frontend.map')


<div class="col-sm-4 col-md-12">
    
    @foreach($locations as $l)
    <div class="col-md-4">
      <h4><strong>{{$l->nome}}</strong></h4>

      @foreach($l->sectors as $s)

                <p style="margin-left: 10px;">{{$s->nome}} (<span>{{$l->routes_count}}</span>)</p>
      
      @endforeach

    </div> 
    @endforeach   
         
</div>







@endsection