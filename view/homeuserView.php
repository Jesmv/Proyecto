<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#EF0897">
    <title>Material UI One Page Theme</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="css/style.css" type="text/css" rel="stylesheet">
		
</head>
<body id="top" class="scrollspy">

	<!-- Pre Loader -->
	<div id="loader-wrapper">
		<div id="loader"></div>
	
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	
	</div>

	<!--Navigation-->
	<div class="navbar-fixed">
		<nav id="nav_f" class="default_color" role="navigation">
			<div class="container">
				<div class="nav-wrapper">
				<a href="#" id="logo-container" class="brand-logo">Song2Song</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="index.php?controller=Profile&action=profile">Perfil</a></li>
						<?php if($user->getType() == "admin") { ?>
 						<li><a href="index.php?controller=Admin&action=viewAdmin">Administrador</a></li>
						<?php } ?>
						<li><a href="index.php?controller=User&action=exitFromSession">Salir</a></li>    
						        
					</ul>
					<ul id="nav-mobile" class="side-nav">
						<li><a href="#music">Música</a></li> 
						<li><a href="index.php?controller=Profile&action=profile">Perfil</a></li>
						<li><a href="index.php?controller=User&action=exit">Salir</a></li>       
					</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				</div>
			</div>
		</nav>
	</div>


	<div class="container">
		<div class="row">
			<div class="col s9">
				<h4>Hola @<?php echo $user->getNick() ?>. ¿Qué te apetece escuchar?</h4>

				<div class="input-field col s12">
					<input type="text" id="buscador" class="autocomplete">
					<label for="buscador">Buscar</label>
				</div>
			</div>
			<div class="col s3">
				<h4>Tus canciones favoritas</h4>
				<div>
					<ul>
						<?php foreach ($likes as $like) { ?>
							<li><?php echo $like['song']->author . ' - ' . $like['song']->title ?>. 
							<?php echo $like['count'] ?>  <i class="fa fa-heart" aria-hidden="true"></i>.</li>
						<?php } ?>
					</ul>
				</div>
			</div>		
		</div>
		<div class="row">
			<div class="col s9">
				<h5>Música seleccionada para tí</h5>
			</div>
		</div>
		
		<div class="row">
			<div id="result" class="row hide">
				<div class="col s6 m7">
					<div class="card">
						<div class="card-image">
							<img src="">
							<span class="card-title"></span>
						</div>
						<div class="card-content"></div>
							<div class="card-action">
								<a id="play" href="#">Reproducir</a>
								<a id="like" href="#">Like</a>
								<a id="addList" href="#">Añadir lista</a>			
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<!-- Modal Trigger -->
  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal bottom-sheet">
    <div class="modal-content">
		<h4>Lista reproducción</h4>
		
		<button type="button" id="playMusic">Play</button>
		<button type="button" id="pauseMusic">Pause</button>
		<button type="button" id="stopMusic">Stop</button>
		<button type="button" id="forwardMusic">Forward</button>
		<button type="button" id="backMusic">Back</button>

	  	<audio id="player">
			<source src="" type="audio/mpeg">
		</audio>

		<div>
			<ul id="listSongs">
				
			</ul>
		</div>		
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Esconder</a>
    </div>
  </div>

	<!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script src="js/typeahead.bundle.min.js"></script>
    <script src="js/buscador.js"></script>
	<script>
		$(document).ready(function(){
			// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
			$('.modal').modal();
		});
	</script>

</body>
</html>