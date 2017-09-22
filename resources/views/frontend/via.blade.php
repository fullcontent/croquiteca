
@extends('frontend.index')



@section('title', 'Croquiteca - Home')


@section('content')

<section class="banner">
		<div class="banner">
            <div class="overlay"></div><img src="<?php if($location->imagem){echo url($location->imagem);}else { echo url('assets/img/63UT_135241_533423967.jpg'); }?>" class="banner-img"></div>
		<div class="info">
			<div class="container"><a href="<?=url('')?>/local/{{$route->location_id}}" class="voltar">&lt; VOLTAR PARA LOCAL</a>
				<h1 class="info">{{$route->nome}}</h1>
				<h2 class="info">{{$route->tipo}} - {{$route->graduacao}} - <i>{{$location->nome}}</i> - {{$location->city->name}}/{{$location->city->state->abbr}}</h2></div>
		</div>
	</section>

<div class="container">
		<div class="col-md-5">
			<h3><strong>{{$route->nome}}</strong></h3>
			<p><strong>Graduação:</strong> {{$route->graduacao}}</p>
			<p><strong>Crux:</strong> {{$route->crux}}</p>
			<p><strong>Enfiadas:</strong> {{$route->enfiadas}}</p>
			<p><strong>Exposição:</strong> {{$route->exposicao}}</p>
			<p><strong>Material:</strong> {{$route->material}}</p>
			<p><strong>Altura:</strong> {{$route->altura}}m</p>
			<p><strong>Proteção:</strong> {{$route->protecao}}</p>
			<p><strong>Descrição:</strong> {{$route->descricao}}</p>
			<p><strong>Dicas:</strong> {{$route->dicas}}</p>
			<p><strong>Fonte dos Dados: </strong> {{$route->fonteDados}}</p>
		</div>
		<div class="col-md-6 col-md-offset-1">
			
			@if($route->croqui)
				<div class="via-imgs">
				<a href="<?=url('')?>/{{$route->croqui}}"><button class="btn btn-warning btn-lg btn-block" type="button">Baixar Croqui</button></a>
				</div>
			@else
			
			<div class="via-imgs">
				<button class="btn btn-default btn-lg btn-block">Croqui não disponível</button>
				</div>

			@endif
		
		</div>
		<div class="col-md-6 col-md-offset-1">
			<div class="via-imgs">
				<h4>Fotos: </h4>
				<div class="col-md-4 thumbnail"><img src="<?php if($location->imagem){echo url($location->imagem);}else { echo url('assets/img/63UT_135241_533423967.jpg'); }?>"></div>
			</div>
		</div>
		<div class="col-md-6 col-md-offset-1">
			<div class="via-imgs">
				<h4>Vias próximas:</h4>
				<div class="table-responsive">

				
					<table class="table">
						<tbody>
						@foreach($nextRoutes as $n)
							<tr>
								<td><a href="<?=url('')?>/via/{{$n->id}}">{{$n->nome}}</a></td>
								<td>{{$n->graduacao}}</td>
								<td>{{$n->sector->nome}}</td>
							</tr>
						@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>

	@endsection