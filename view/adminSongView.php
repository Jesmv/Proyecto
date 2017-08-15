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

    
        
		
	</div>

	<!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
	<script src="js/typeahead.bundle.min.js"></script>

</body>
</html>