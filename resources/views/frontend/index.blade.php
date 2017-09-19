<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
  
  <title>@yield('title')</title>
  
  <link href="https://fonts.googleapis.com/css?family=Lato:400,300,400italic,700,900" rel="stylesheet" type="text/css">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Techie Bootstrap 3 skin">
  <meta name="keywords" content="bootstrap 3, skin, flat">
  <meta name="author" content="bootstraptaste">
  
  <!-- Bootstrap css -->


  <link href="<?=url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?=url('assets/css/bootstrap.techie.css')?>" rel="stylesheet">

<!-- =======================================================
    Theme Name: Techie
    Theme URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

  <!-- Docs Custom styles -->
 
  <style>
body,html{overflow-x:hidden}footer{border-top:1px solid #ddd;padding:30px;margin-top:50px}.row>[class*=col-]{margin-bottom:40px}.navbar-container{position:relative;min-height:100px} .btn-group{margin-bottom:10px}.form-inline input[type=password],.form-inline input[type=text],.form-inline select{width:180px}.input-group{margin-bottom:10px}.pagination{margin-top:0}

  
  #map{
    height: 450px;
    width: 100%;
  }


  </style>
</head>
<body>


<nav class="navbar navbar-inverse" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex2-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="<?=url('')?>">CROQUITECA</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex2-collapse">
                  <ul class="nav navbar-nav">
                    <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="<?=url('/')?>">Home</a></li>
                    <li class="{{ Request::url() == '/locais/' ? 'active' : '' }}"><a href="<?=url('/locais')?>">Locais</a></li>
                    <li class="{{ Request::url() == '/setores/' ? 'active' : '' }}"><a href="<?=url('/setores')?>">Setores</a></li>
                    
                  </ul>
                  <form class="navbar-form navbar-right" role="search" action="{{url('pesquisar')}}" method="post">
                  {!! csrf_field() !!}
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search" name="texto">

                    {{crvf_token  }}
                    </div>
                  </form>
                </div><!-- /.navbar-collapse -->
              </nav>




  
		
<div class="container">@yield('content')</div>





<footer class="text-center">
<p>Bruno Carvalho</p>
<div class="credits">Croquiteca - em desenvolvimento</div>
</footer>

<script src="<?=url('assets/js/jquery.js')?>"></script>
<script src="<?=url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?=url('assets/js/typeahead.min.js')?>"></script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmqNd5YuN1V4rvSkoZ8GO1P9Q8g1tnjHM&callback=initMap">
    </script>
</body>
</html>