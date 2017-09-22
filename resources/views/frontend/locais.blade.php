
@extends('frontend.index')



@section('title', 'Croquiteca - Home')


@section('content')

 <section class="banner">
        <div class="banner">
            <div class="overlay"></div><img src="<?php if($locations->imagem){echo url($locations->imagem);}else { echo url('assets/img/63UT_135241_533423967.jpg'); }?>" class="banner-img"></div>
        <div class="info">
            <div class="container">
                <h1 class="info">{{$locations->name}}</h1></div>
        </div>
    </section>
   
    <div class="container">
       
        <div class="row">
            
@foreach($locations->locations as $l)
        <div class="col-md-4 col-xs-8" style="margin-top: 30px;">
            <a href="<?=url('')?>/local/{{$l->id}}">
            <img src="<?=url('')?>/{{$l->imagem}}" alt="" class="img-responsive img-rounded" style="height: 300px;"></a>
            <h3>{{$l->nome}}</h3>
            <p>{{substr($l->descricao, 0, 200)}} ...</p>
            
        </div>


        @endforeach

        </div>

       

    </div>

    @endsection