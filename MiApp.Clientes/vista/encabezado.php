<!DOCTYPE html>
<html>
 <head>
 <title>Clientes</title>
 <meta name="viewport" content="width=device-width, initialscale=1.0">
 <!-- Bootstrap -->
 <link href="<?php echo BASEURL;?>/publico/assets/bootstrap/cssbootstrap.min.css" rel="stylesheet">
 <link href="<?php echo BASEURL;?>/publico/css/design-bootstrap.css" rel="stylesheet">     
 <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
 <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 <!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
 <![endif]-->
 </head>
 <body>
     
<nav class="navbar navbar-default" role="navigation">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
 <span class="sr-only">Toggle navigation</span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="<?php echo BASEURL;?>/">Clientes</a>
 </div>
 <div class="collapse navbar-collapse" id="example-navbar-collapse">
 <ul class="nav navbar-nav">
 <li class="active"><a href="<?php echo BASEURL;?>/categoria/index">Categoria</a></li>
 <li><a href="http://www.w3schools.com/">Ayuda</a></li>
 <li class="dropdown">
 <a href="#" class="dropdown-toggle" data-toggle="dropdown">
 opciones <b class="caret"></b>
 </a>
 <ul class="dropdown-menu">
 <li><a href="<?php echo BASEURL;?>/cliente/Nuevo" method="POST" role="form">Nuevo Cliente</a></li>
 <li><a href="<?php echo BASEURL;?>/categoria/Nuevo" method="POST" role="form">Nueva Categoria</a></li>
 </ul>
 </li>
 </ul>
 </div>
</nav>
     <div class="container">

