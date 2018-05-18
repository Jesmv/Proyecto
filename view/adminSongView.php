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
						<li><a href="index.php?controller=Admin&action=viewAdminUsers">Usuarios</a></li>      
						<li><a href="index.php?controller=Admin&action=viewAdminMessage">Message</a></li> 
						<li><a href="index.php?controller=User&action=exitFromSession">Salir</a></li>
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
					<div class="collapsible-header"><h5>Añadir canción</h5></div>
					<div class="collapsible-body">
						<form  method="post" action="<?php echo $helper->url('Admin', 'addAdminSong') ?>" enctype="multipart/form-data">
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
									<input id="year" name="year" type="text" value="2017" min="1900" max="2018">
									<label for="year">Year</label>
								</div>
								<div class="input-field col s6">
									<input id="tags" type="text" name="tags">
									<label for="tags">Etiquetas (separadas por comas)</label>
								</div>
							</div>
							<div class="row">
								<div class="file-field input-field col s6" >
									<div class="btn">
										<span>Imagen</span>
										<input type="file" name="image"/>
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" id="image" type="text"/>
									</div>
								</div>

								<div class="file-field input-field col s6">
									<div class="btn">
										<span>Canción</span>
										<input type="file" name="song"/>
									</div>
									<div class="file-path-wrapper">
										<input class="file-path validate" id="song" type="text"/>
									</div>
								</div>
							</div>

							<div class="row">
								<button class="btn waves-effect waves-light" type="submit" name="action">
									Guardar
								</button>
							</div>
						</form>
					</div>
				</li>
			</ul>
		</div>
		<div class="container">    
			<div class="row">
				<div class="col s12">
					<h4 class="header">Lista de canciones</h4>
				</div>

				<ul class="collection">
					<?php foreach ($canciones as $key => $value) { ?>
					
					<li class="collection-item avatar">
                    <img src="<?php echo $value->image ?>" alt="" class="circle">
                    <span class="title"><?php echo $value->title ?></span>
                    <p>
						<?php echo $value->author ?> <br>
						<?php echo $value->group ?> <br>
						
                    </p>
					
					<a href="#modal<?php echo $value->id ?>" class="secondary-content modal-trigger">
						<i class="material-icons" style="color:red">delete</i>
					</a>
					

					<!-- Modal Structure -->
					<div id="modal<?php echo $value->id ?>" class="modal">
						<div class="modal-content">
						<h4>¿Borrar esta cancion?</h4>
						</div>
						<div class="modal-footer">
						<a href="index.php?controller=Admin&action=deleteAdminSong&id=<?php echo $value->id ?>" class="modal-action waves-effect waves-green btn-flat">Si</a>
						<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">NO</a>
						</div>
					</div>
					
					
					<a href="#" class="secondary-content playAdmin" style="margin-right: 46px"><i class="material-icons">play_circle_filled</i>
						<audio id="<?php echo $value->id ?>">
							<source src="<?php echo $value->file ?>" type="audio/mpeg">
						</audio>
					</a>
					</li>
					<?php } ?>
				</ul>
			</div>
		<div>
	</div>  
	



	<!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script src="js/typeahead.bundle.min.js"></script>
	<script src="js/adminSong.js"></script>
	<script>
		$(document).ready(function(){
			// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
			$('.modal').modal();
		});
	</script>

</body>
</html>