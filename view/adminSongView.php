<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#EF0897">
    <title>Song to Song</title>

    <!-- CSS  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<script>
		$(document).ready(function(){
			$('.collapsible').collapsible();
		});

		$('.datepicker').pickadate({
			selectMonths: true, // Creates a dropdown to control month
			selectYears: 15, // Creates a dropdown of 15 years to control year,
			today: 'Today',
			clear: 'Clear',
			close: 'Ok',
			closeOnSelect: false // Close upon selecting a date,
		});
	</script>
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
						<li><a href="index.php?controller=Admin&action=viewAdmin">Admin</a></li>
						<li><a href="index.php?controller=Admin&action=viewAdminUsers">Usuarios</a></li>      
						<li><a href="index.php?controller=Admin&action=viewAdminMessage">Message</a></li>      
					</ul>
					<ul id="nav-mobile" class="side-nav">
						<li><a href="index.php?controller=Admin&action=viewAdmin">Admin</a></li>
						<li><a href="index.php?controller=Admin&action=viewAdminUsers">Usuarios</a></li>      
						<li><a href="index.php?controller=Admin&action=viewAdminMessage">Message</a></li> 
					</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				</div>
			</div>
		</nav>
	</div>

	<div class="container">    
        <div class="row">
            <div class="col s12">
                <h4 class="header">Administrar canciones</h4>
            </div>
		</div>
		<div class="row">
			<ul class="collapsible popout" data-collapsible="accordion">
				<li>
					<div class="collapsible-header">Añadir canción</div>
					<div class="collapsible-body">
						<form>
							<div class="row">
								<div class="input-field col s6">
									<input name="titulo" id="titulo" type="text" value="" require/> 
									<label for="titulo">Título</label>                  
								</div>
								<div class="input-field col s6">
									<input id="autor" name="autor" type="text" value="" />
									<label for="autor">Autor</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input id="grupo" name="grupo" type="text" value="" />
									<label for="grupo">Grupo/Solista</label>
								</div>
								<div class="input-field col s6">
									<input id="album" name="album" type="text" value="" />
									<label for="album">Album</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s6">
									<input type="year" value="2017" min="1900" max="2018">
									<label for="year">Year</label>
								</div>
								<div class="file-field input-field col s6">
									<div class="btn">
										<span>File</span>
										<input type="file" name="imagen"/>
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" id="file" type="text"/>
									</div>
								</div>
							</div>
						</form>
					</div>
				</li>

				<?php foreach ($canciones as $key => $value) { ?>
				<li>
					<div class="collapsible-header">
						<img src="<?php echo $value->image ?>" alt="" class="circle">
						<span class="title"><?php echo $value->title ?></span>
					</div>
					<div class="collapsible-body">
						<p><?php echo $value->author ?></p>
						<p><?php echo $value->album." ".$value->year ?></p>
						<p></p>
					</div>
				</li>
				<?php } ?>
			</ul>
        </div>
    </div>  

	<!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script src="js/typeahead.bundle.min.js"></script>

</body>
</html>