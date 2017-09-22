@extends('frontend.index')



@section('title', 'Croquiteca - Home')


@section('content')


<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mapa" id="map">
                 @include('frontend.map')
            </div>
        </div>
    </div>


@endsection