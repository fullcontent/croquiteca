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
           
			
            <div class="col-md-3 lista-locais">
                
                

                @foreach($states as $s)                
                <div id="location">
                        <a href="{{$s->name}}" class="text-muted"><h3>{{$s->name}}</h3></a>
                    <ul class="list-unstyled lista-locais">

                        @foreach($s->locations as $l)
                        <a href="setor/{{$l->id}}" class="text-muted"><li>{{$l->nome}}<span class="number"></span></li></a>
                        @endforeach
                        

                    </ul>
                </div>
                @endforeach
                
                
               
            </div>
           
               @include('frontend.map')
           
</div>

<div class="row">
                
				
              
               
</div>


@endsection