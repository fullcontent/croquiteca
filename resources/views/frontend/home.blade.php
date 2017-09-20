@extends('frontend.index')



@section('title', 'Croquiteca - Home')


@section('content')


<div class="row box1">
            <div class="col-md-8">
                <h3>Últimas vias adicionadas:</h3>
                <ol class="ultimas-vias">

                	@foreach($routes as $r)
                    
                    <li><a class="text-muted" href="via/{{$r->id}}">{{$r->nome}} ({{$r->graduacao}})</a></li>
                    
                    @endforeach
                </ol>
            </div>
            <div class="col-md-4">
                <form class="bootstrap-form-with-validation" action="<?=url('pesquisar');?>">
                    <div class="form-group">
                        <label class="control-label" for="search-input">Pesquisar qualquer coisa</label>
                        <div class="input-group">
                            <div class="input-group-addon"><span> <i class="glyphicon glyphicon-search"></i></span></div>
                            <input class="form-control" type="search" name="texto" placeholder="Vias, Locais, Setores" id="search-input">
                        </div>
                    </div>
                    <div class="form-group"></div>
                    <div class="form-group"></div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Pesquisar </button>
                    </div>
                </form>
            </div>
</div>

 <div class="col-md-12">
 <hr>
 </div>
<div class="row">
           
			
            <div class="col-md-2 lista-locais">
                
                

                @for($i = 0; $i < 4; $i++)
                <div id="location">
                    <h3>Estado</h3>
                    <ul class="list-unstyled lista-locais">
                        <li>Setor Nome<span class="number"> (100) </span></li>
                        <li>Setor Nome<span class="number"> (100) </span></li>
                    </ul>
                </div>
                @endfor
                
               
            </div>
           
               @include('frontend.map')
           
</div>

<div class="row">
                
				@for($i = 0; $i < 15; $i++)
            		    		
                <div id="location" class="col-md-2">
                    <h3>Estado</h3>
                    <ul class="list-unstyled lista-locais">
                        <li>Setor Nome<span class="number"> (100) </span></li>
                        <li>Setor Nome<span class="number"> (100) </span></li>
                        <li>Setor Nome<span class="number"> (100) </span></li>
                        <li>Setor Nome<span class="number"> (100) </span></li>
                    </ul>
                </div>
                
                @endfor
              
               
</div>


@endsection