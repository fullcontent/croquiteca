@extends('frontend.index')

@section('title','Listagem de Vias')


@section('content')

	
<div class="col-md-12">
            <ol class="breadcrumb">
                <li><a><span>Paraná </span></a></li>
                <li><a><span>Morro do Canal</span></a></li>
                <li><a href="setor.html"><span>Setor </span></a></li>
                <li><a><span>Via </span></a></li>
            </ol>
        </div>
        
        <div class="col-md-3 col-sm-3 sidebar">
            <div class="lista-setores">
                <h3>SETOR </h3>
                <ul class="list-unstyled">
                    <li>VIA 1 </li>
                    <li>VIA 1 </li>
                    <li>VIA 1 </li>
                    <li>VIA 1 </li>
                    <li>VIA 1 </li>
                </ul>
            </div>
        </div>
       
        <div class="col-md-9 col-sm-9 dados">
            <div class="info">

            	
                <h2>{{$dados->nome}}</h2>
                <p><strong>Tipo:</strong> <span>{{$dados->tipo}}, </span><span>{{$dados->enfiadas}} enfiada(s),</span><span> {{$dados->altura}}m </span></p>
                <p><strong>Graduação:</strong> <span> {{$dados->graduacao}}{{$dados->crux}}</span><span> {{$dados->exposicao}} </span><span>{{$dados->duracao}} </span></p>
                <p><strong>Proteção:</strong> <span>{{$dados->protecao}} </span></p>
                <p><strong>Material:</strong> <span>{{$dados->material}} </span></p>
                <p><strong>Conquistador(es):</strong> <span>{{$dados->conquistadores}} </span>, <span>{{$dados->anoConquista}} </span></p>
                <p><strong>Fonte:</strong> <span>{{$dados->fonteDados}}</span></p>
                <a href="<?=url('/')?>/{{$dados->croqui}}" target="_blank"><button class="btn btn-default" type="button">VER CROQUI</button></a>
                <h3>Dicas </h3>
                <p>{{$dados->dicas}}</p>

                
            </div>
            <h3>Imagens </h3>
            <div class="images">
                <div class="image"><img src="<?=url('assets/img/avatar.jpg')?>"></div>
                
            </div>
        </div>        


@endsection