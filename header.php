<!DOCTYPE html> 
<html lang="es">  
  <head> 
    <meta charset="utf-8"> 
    <META HTTP-EQUIV="Content-Type" content="text/html; charset=utf-8"/>
    <title>Cchome.net</title>  
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements --> 
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]--> 
	<link rel="stylesheet" href="nuevo/_/css/bootstrap.css">
	<link rel="stylesheet" href="nuevo/_/css/style.css">
    <link rel="shortcut icon" href="images/favicon.ico"> 
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> 
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png"> 
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> 
	<script type='text/javascript' src='http://code.jquery.com/jquery-1.7.js'></script>
    <script type="text/javascript" src="nuevo/_/js/scripts.js"></script>
	<script type="text/javascript" src="nuevo/_/js/bootstrap.js"></script>
	<script type="text/javascript" src="nuevo/_/js/bootstrap-modal.js"></script>
	<script type="text/javascript">
	$(function() {
	    $('#event-modal').modal({
	        keyboard: false;
	    });
	});
	</script> 
  </head> 
 
  <body id="bgNuevo"> 
	<div id="contenedorPrincipal"> 
		<div class="container" > 
			<div class="row"> 
				<div class="span4" id="logo">
					<img src="http://dummyimage.com/250x90&text=Acá va el logo" alt="" />
				</div> 
				<div class="span8" id="headerDer"> 
					<img src="nuevo/_/img/ads/ads670x90cc.png"> 
				</div> 
			</div> 
		</div> 
		<div class="container">
			<div class="row" id="menuUser">
				<div class="span6">			
					<ul class="nav nav-pills pull-left">
			  			<li class="active">
			    			<a href="<?php echo $url; ?>?action=registrarse" id="linkMenuUser"> <i class="icon-ok icon-white"></i> Registrate</a>
			  			</li>
					</ul>			
				</div> 
				<div class="span6">
					<ul class="nav nav-pills pull-right">
			  			<li class="active">
			    			<a href="#" id="linkMenuUser"> <i class="icon-user icon-white"></i> Cuenta</a>
			  			</li>
			  			<li>
			  				<a href="#" id="linkMenuUser"> <i class="icon-heart icon-white"></i> Favorito</a>
			  			</li>
			  			<li>
			  				<a href="#" id="linkMenuUser"> <i class="icon-envelope icon-white"></i> Inbox</a>
			  			</li>
			  			<li>
			  				<a href="#" id="linkMenuUser"> <i class="icon-th icon-white"></i> Galería</a>
			  			</li>
					</ul>
				</div>    
			</div>
		</div>
		<div class="topbar" data-dropdown="dropdown" >
  			<div class="navbar">
  				<?php include 'nuevo/_/inc/login.php';?>
	  			<div class="navbar-inner" id="menuNav">
	    			<div class="container">
           				<a class="brand" href="<?php echo $scripturl?>index.php">Colombia Caliente</a>
						<ul class="nav">
	            			<li>
	            				<a href="<?php echo $url; ?>?action=search">Buscador</a>
	            			</li>
	            			<li>
	            				<a href="#">Contactos</a>
	            			</li>
	            			<li>
	            				<a href="<?php echo $url; ?>?action=rz;m=ColombiaCaliente.net">Chat</a>
	            			</li>
			    			<li>
			    				<a data-toggle="modal" href="#event-modal">Ingresar</a>
			    			</li>
			    			<li>
			    				<a href="<?php echo $url; ?>?action=registrarse">Registrarme</a>
			    			</li>
						</ul>
						<li class="pull-left">
							<ul class="nav">
                 				 <li id="fat-menu" class="dropdown">
                    				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias<b class="caret"></b></a>
                    					<ul class="dropdown-menu">
                      <li><a href="http://colombiacaliente.net/index.php?id=117"><i class="icon-heart"></i> Caserita de la semana</a></li><li><a href="http://colombiacaliente.net/index.php?id=119">Paparazzi Colombiano</a></li>
                      <li><a href="http://colombiacaliente.net/index.php?id=111">Guía Erótica </a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=118">Violencia (Qhubo- El espacio)</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=14">Amateur</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=108">Articulos y noticias calientes</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=4">Caseras</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=48">Colombianas Calientes</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=110">Escotes y Tetas</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=23">Hombres</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=46">Humor</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=109">Imágenes</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=96">Lesbianas y Gay</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=94">Mujeres maduras</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=45">Peticiones / Soporte</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=42">Swingers</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=95">Videos On-line</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=76">Relatos</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=114">CONTACTOS ERÓTICOS</a></li>
						<li><a href="http://colombiacaliente.net/index.php?id=66">Amarillismo</a></li>
                      <li class="divider"></li>
                      <li><a href="#">Ver todas</a></li>
                    </ul>
                  </li>
            </ul>
			</li>
			<form class="navbar-search pull-right" method="get">
            <input type="text" class="search-query span2" placeholder="Buscar" name="action&#61;search2&amp;search">
            </form>
            </ul>
				</div>
				</div>
  		</div>
		</div> 
		
		<div class="row" id="contenedorHome">
<?php //require('SSI.php'); ssi_categorias(); ?>