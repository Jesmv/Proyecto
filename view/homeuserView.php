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
						<li><a href="#music">Música</a></li> 
						<li><a href="index.php?controller=Profile&action=profile">Perfil</a></li>
						<li><a href="index.php?controller=User&action=exit">Salir</a></li>    
						        
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

		<h1>Buscar musica</h1>

		<div class="input-field col s12">
			<input type="text" id="buscador" class="autocomplete">
			<label for="buscador">Autocomplete</label>
		</div>

		<br>
		<br>


		<div id="result" class="row hide">
			<div class="col s6 m7">
				<div class="card">
					<div class="card-image">
						<img src="">
						<span class="card-title"></span>
					</div>
					<div class="card-content"></div>
						<div class="card-action">
							<button id="play" >Reproducir</button>
							<a id="like" href="#">Like</a>
							<audio id="player" controls>
								<source src="" type="audio/mpeg">
							</audio>
					</div>
				</div>
			</div>
      	</div>

		Ultimos likes
		<div class="col s6 m7">
			<ul>
				<?php foreach ($likes as $song) { ?>
					<li><?php echo $song->author . ' - ' . $song->title ?></li>
				<?php } ?>
			</ul>

		</div>

	</div>

	<!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script src="js/typeahead.bundle.min.js"></script>
    <script src="js/buscador.js"></script>

</body>
</html>