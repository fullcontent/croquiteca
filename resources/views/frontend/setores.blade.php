
@extends('frontend.index')



@section('title', 'Croquiteca - Home')


@section('content')

 <section class="banner">
        <div class="banner">
            <div class="overlay"></div><img src="<?php if($location->imagem){echo url($location->imagem);}else { echo url('assets/img/63UT_135241_533423967.jpg'); }?>" class="banner-img"></div>
        <div class="info">
            <div class="container">
                <h1 class="info">{{$location->nome}}</h1></div>
        </div>
    </section>
    <div class="submenu">
        <div class="container">
            <ul class="nav nav-pills submenu">
                <li><a href="<?=url('')?>/local/{{$location->id}}">Vias</a></li>
                <li class="active"><a href="<?=url('')?>/local/{{$location->id}}/setores">Setores</a></li>
                <li><a href="#">Fotos </a></li>
                <li><a href="#">Tempo </a></li>
                <li><a href="#">Acesso </a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="main">
            <section class="lista">
                <div class="container">




                 @if($sectors->isEmpty())
                                    
                                    Não existem setores cadastrados

                        @else
					@foreach($sectors as $s)
                    <div class="col-md-4">
                        <div class="thumbnail"><img>
                            <div class="caption">
                                <h3>{{$s->nome}}</h3>
                                <p><strong>Numero de vias:</strong>{{$s->routes_count}}</p>
                                
                            </div>
                        </div>
                    </div>
					@endforeach
				@endif
                </div>
            </section>
        </div>
    </div>

    @endsection