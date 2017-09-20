<!DOCTYPE html>
<html lang="en">
<head>
  
 <title>@yield('title')</title>
  
  
  <link rel="stylesheet" href="<?=url('assets/bootstrap/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed">
    <link rel="stylesheet" href="<?=url('assets/css/styles.css')?>">
    <link rel="stylesheet" href="<?=url('assets/css/Pretty-Footer.css')?>">

<!-- =======================================================
    Theme Name: Techie
    Theme URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
======================================================= -->

  <!-- Docs Custom styles -->
 
  
</head>
<body>
<header>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand navbar-link" href="<?=url('/');?>"> <img src="<?=url('assets/img/logo.png')?>" height="80px"></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::path() == '/' ? 'active' : '' }}" role="presentation"><a href="<?=url('/')?>">Guia </a></li>
                        <li class="{{ Request::path() == 'locais' ? 'active' : '' }}" role="presentation"><a href="<?=url('/locais')?>">Locais </a></li>
                        <li role="presentation"><a href="#">Parcerias </a></li>
                        <li role="presentation"><a href="#">Contato </a></li>
                    </ul>
                    <form class="navbar-form navbar-right" action="<?=url('pesquisar');?>">
                        <input class="form-control" type="text" placeholder="Pesquisar qualquer coisa" name="texto">
                        <button class="btn btn-success" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

  
		
<div class="container">@yield('content')</div>





 <div class="clearfix"></div>
    <footer></footer>
<script src="<?=url('assets/js/jquery.js')?>"></script>
<script src="<?=url('assets/js/bootstrap.min.js')?>"></script>


<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmqNd5YuN1V4rvSkoZ8GO1P9Q8g1tnjHM&callback=initMap">
    </script>
</body>
</html>