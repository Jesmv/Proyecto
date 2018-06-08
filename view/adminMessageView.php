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
				<a href="index.php?controller=Homeuser&action=viewHome" id="logo-container" class="brand-logo">Song2Song</a>
					<ul class="right hide-on-med-and-down">
						<li><a href="index.php?controller=Profile&action=profile">Perfil</a></li>
						<li><a href="index.php?controller=Admin&action=viewAdmin">Admin</a></li>
						<li><a href="index.php?controller=Admin&action=viewAdminSongs">Canciones</a></li>      
						<li><a href="index.php?controller=Admin&action=viewAdminMessage">Message</a></li>
						<li><a href="index.php?controller=User&action=exitFromSession">Salir</a></li>      
					</ul>
				</div>
			</div>
		</nav>
	</div>

	<div class="container">
		<div class="nav-wrapper center">
			<h2 class="center-align">EN CONSTRUCCIÓN</h2>
			<h4>EN CONSTRUCCIÓN Disculpen las molestias.</h4>
			<a href="<?php echo $helper->url('admin', 'viewAdmin') ?>">Volver</a>
		</div>
	</div>
    

	<!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script src="js/typeahead.bundle.min.js"></script>

</body>
</html>