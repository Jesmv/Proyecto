<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#EF0897">
    <title>Song2Song</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
		
</head>
<body id="musicB" class="scrollspy homeuser">

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
						<?php if($user->getType() == "admin" || $user->getType() == "root") { ?>
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

	<div id="section-busca" class="section green lighten-5">
		<div class="container">
			<div class="row">
				<div class="col s8">
					<h1>Hola @<?php echo $user->getNick() ?>.
					<h4 class="light red-text text-lighten-4 center-on-small-only">¿Qué te apetece escuchar? <i class="fa fa-music" aria-hidden="true"></i></h4>

					<div class="input-field col s12">
						<input type="text" id="buscador" class="autocomplete">
						<label for="buscador">Buscar</label>
					</div>
				</div>
				<div id="result" class="col s4 hide">
					<div class="">
						<div class="card">
							<div class="card-image">
								<img src="">
								<span class="card-title"></span>
								<a id="play" class="btn-floating halfway-fab waves-effect waves-light red">
									<i class="material-icons pink darken-2">play_arrow</i>
								</a>
							</div>
							<div class="card-content"></div>
								<div class="card-action">
									<a id="like" href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
									<a id="addList" href="#">
										<i class="material-icons">playlist_add</i>
									</a>			
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="container section">
		<div class="row">
			<div class="col s12">
				<h4>Música seleccionada para tí</h4>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<p>Te recomendamos algunas canciones que creemos que te pueden gustar basados en los tipos de música que has escuchado.</p>
				<p>Por ejemplo: <b>
					<?php echo $tag1 ?> <?php echo $tag2 ?> <?php echo $tag3 ?> </b>.</p>
				
			</div>
		</div>
		<div class="row">
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="<?php echo $recomen1->getImage() ?>">
						<span class="card-title"><?php echo $recomen1->getAuthor() ?></span>
						<a class="btn-floating halfway-fab waves-effect waves-light play-song" data-id="<?php echo $recomen1->getId() ?>">
							<i class="material-icons pink darken-2">play_arrow</i>
						</a>
					</div>
					<div class="card-content"></div>
						<?php echo $recomen1->getTitle() ?>
						
				</div>
			</div>
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="<?php echo $recomen2->getImage() ?>">
						<span class="card-title"><?php echo $recomen2->getAuthor() ?></span>
						<a class="btn-floating halfway-fab waves-effect waves-light play-song" data-id="<?php echo $recomen2->getId() ?>">
							<i class="material-icons pink darken-2">play_arrow</i>
						</a>
					</div>
					<div class="card-content"></div>
						<?php echo $recomen2->getTitle() ?>
						
				</div>
			</div>
			<div class="col s4">
				<div class="card">
					<div class="card-image">
						<img src="<?php echo $recomen3->getImage() ?>">
						<span class="card-title"><?php echo $recomen3->getAuthor() ?></span>
						<a class="btn-floating halfway-fab waves-effect waves-light play-song" data-id="<?php echo $recomen3->getId() ?>">
							<i class="material-icons pink darken-2">play_arrow</i>
						</a>
					</div>
					<div class="card-content"></div>
						<?php echo $recomen3->getTitle() ?>
				</div>
			</div>
		</div>
				

		<div class="row favoriteSong">
			<div class="col s6">
				<h4>Tus favoritos</h4>
				<ul class="collection">
					<?php foreach ($likes as $like) { ?>
						<li class="collection-item"><div><?php echo $like['song']->author . ' - ' . $like['song']->title ?>.
						(<?php echo $like['count'] ?>  <i class="fa fa-heart" aria-hidden="true"></i>).  
						<a href="#!" class="secondary-content play-song" data-id="<?php echo $like['song']->id ?>"><i class="material-icons pink-text text-darken-2">play_arrow</i></a></div></li>
					<?php } ?>
				</ul>
			</div>	
			<div class="col s6">
				<h4>Escuchadas recientemente</h4>
				<ul class="collection">
					<?php foreach ($logs as $song) { ?>
						<li class="collection-item"><div><?php echo $song->author . ' - ' . $song->title ?>.
						<a href="#!" class="secondary-content play-song" data-id="<?php echo $song->id ?>"><i class="material-icons pink-text text-darken-2">play_arrow</i></a></div></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</div>

	<footer>
		<div id="reproductor" class="section">
			<div class="container">
				<div class="row">
					<div class="col s8">
						
						
						<button type="button" id="playMusic" class="btn-floating btn-large waves-effect waves-light pink darken-2"><i class="material-icons">play_arrow</i></button>
						<button type="button" id="pauseMusic" class="btn-floating btn-large waves-effect waves-light pink darken-2"><i class="material-icons">pause</i></button>
						<button type="button" id="stopMusic" class="waves-effect waves-light btn pink darken-4"><i class="material-icons">stop</i></button>
						<button type="button" id="backMusic" class="waves-effect waves-light btn pink darken-4"><i class="material-icons">skip_previous</i></button>
						<button type="button" id="forwardMusic" class="waves-effect waves-light btn pink darken-4"><i class="material-icons">skip_next</i></button>
						<a class="waves-effect waves-light btn modal-trigger pink darken-4" href="#modal1"><i class="material-icons">list</i></a>

						<audio id="player">
							<source src="" type="audio/mpeg">
						</audio>
			
					</div>
					<div class="col s4">
						<h5><i id="songPlaying"></i></h5>
					</div>
				</div>
			</div>
		</footer>
	</div>
	
	 <!-- Modal Trigger -->
	

	<!-- Modal Structure -->
	<div id="modal1" class="modal bottom-sheet blue-grey darken-2">
		<div class="modal-content">
		<h5>Lista de reproducción</h5>
			<ul id="listSongs">
				</ul>
		</div>
		<div class="modal-footer blue-grey darken-2">
		<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
		</div>
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