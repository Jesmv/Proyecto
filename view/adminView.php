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
<body id="top" class="scrollspy fondo">

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
						<li><a href="index.php?controller=Admin&action=viewAdminUsers">Users</a></li>
						<li><a href="index.php?controller=Admin&action=viewAdminSongs">Music</a></li>      
                        <li><a href="index.php?controller=Admin&action=viewAdminMessage">Message</a></li> 
                        <li><a href="index.php?controller=User&action=exitFromSession">Salir</a></li>     
					</ul>
					<ul id="nav-mobile" class="side-nav">
						<li><a href="index.php?controller=Admin&action=viewAdminUsers">Users</a></li>
						<li><a href="index.php?controller=Admin&action=viewAdminSongs">Music</a></li>      
						<li><a href="index.php?controller=Admin&action=viewAdminMessage">Message</a></li> 
					</ul>
				<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				</div>
			</div>
		</nav>
	</div>

	<div class="container" id="fondo">
        <h1>Administrador</h1>
        <div class="row">
            <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img src="https://source.unsplash.com/1600x900/?radio">
                <span class="card-title">Canciones</span>
                </div>
                <div class="card-content">
                <p>Podrás guardar, eliminar o modificar canciones.</p>
                </div>
                <div class="card-action">
                <a href="index.php?controller=Admin&action=viewAdminSongs">Gestionar canciones</a>
                </div>
            </div>
            </div>

            <div class="col s12 m4">
            <div class="card">
                <div class="card-image">
                <img src="https://source.unsplash.com/1600x900/?people">
                <span class="card-title">Usuarios</span>
                </div>
                <div class="card-content">
                <p>Aquí gestionarás los usuarios de la web</p>
                </div>
                <div class="card-action">
                <a href="index.php?controller=Admin&action=viewAdminUsers">Administrar usuarios</a>
                </div>
            </div>
            </div>

            <div class="col s3 m4">
            <div class="card">
                <div class="card-image">
                <img src="https://source.unsplash.com/1600x900/?computer">
                <span class="card-title">Mensajes</span>
                </div>
                <div class="card-content">
                <p>Gestiona los mensajes que de los usuarios.</p>
                </div>
                <div class="card-action">
                <a href="index.php?controller=Admin&action=viewAdminMessage">Mensajes</a>
                </div>
            </div>
            </div>
        </div>
        
		
	</div>

	<!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script src="js/typeahead.bundle.min.js"></script>

</body>
</html>