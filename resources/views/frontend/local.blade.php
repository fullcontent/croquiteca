@extends('frontend.index')



@section('title', 'Croquiteca - Home')


@section('content')


<section class="banner">
        <div class="banner">
            <div class="overlay"></div><img src="<?php if($location->imagem){echo url($location->imagem);}else { echo url('assets/img/63UT_135241_533423967.jpg'); }?>" class="banner-img"></div>
        <div class="info">
            
            
            <div class="container"><a href="javascript: history.go(-1)" class="voltar">&lt; VOLTAR PARA LOCAIS</a>
                <h1 class="info">{{$location->nome}}</h1></div>
        </div>
    </section>
    <div class="submenu">
        <div class="container">
            <ul class="nav nav-pills submenu">
                <li class="active"><a href="<?=url('')?>/local/{{$location->id}}">Vias</a></li>
                <li><a href="<?=url('')?>/local/{{$location->id}}/setores">Setores</a></li>
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
                    <div class="table-responsive">

                        @if($routes->isEmpty())
                                    
                                    Não existem vias cadastradas

                        @else
                               
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Nome </th>
                                    <th>Graduação </th>
                                    <th>Tipo </th>
                                    <th>Setor </th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                
                               

								@foreach($routes as $r)
								
                                <tr>
                                    
                                    <td><a href="<?=url('')?>/via/{{$r->id}}">{{$r->nome}}</a></td>
                                    <td>{{$r->graduacao}}</td>
                                    <td>{{$r->tipo}}</td>
                                    <td>{{$r->sector->nome}}</td>
                                    
                                </tr>
                                @endforeach
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>


@endsection