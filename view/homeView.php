<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#EF0897">
    <title>Material UI One Page Theme</title>

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet">
	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body id="top" class="scrollspy">


<?php if(isset($_GET['errorlogin'])) {?>
    <script>alert('Datos de usuario incorrectos')</script>
<?php } ?>

<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="#" id="logo-container" class="brand-logo">Song2Song</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php?controller=User&action=LogInPage">Log In</a></li>
                    <li><a href="index.php?controller=User&action=newUser">New User</a></li>
                    <li><a href="#music">Music</a></li>    
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="index.php?controller=User&action=LogInPage">Log In</a></li>
                    <li><a href="index.php?controller=User&action=newUser">New User</a></li>
                    <li><a href="#music">Music</a></li>     
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Hero-->
<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <h1 class="text_h center header cd-headline letters type">
            <span>I Love Music</span> 
            <span class="cd-words-wrapper waiting">
                <b class="is-visible">Dancing</b>
                <b>Singing</b>
                <b>with Friends</b>
            </span>
        </h1>
    </div>
</div>

<!--Intro and service-->
<div id="intro" class="section scrollspy">
    <div class="container">
        <div class="row">
            <div  class="col s12">
                <h2 class="center header text_h2"> Si te gusta disfrutar de la música has venido al sitio correcto. <span class="span_h2"> Song2Song  </span>
                te ofrece una experiencia musical, para disfrutar con los amigos o contigo mismo. <span class="span_h2"> ¡Descubreme!</span> </h2>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="https://source.unsplash.com/featured/?musical-instrument"></div>
</div>

<!--Music-->
<div class="section scrollspy" id="music">
    <div class="container">
        <h2 class="header text_b">Music </h2>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="https://source.unsplash.com/featured/640x480/?concert">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Rock <i class="mdi-navigation-more-vert right"></i></span>                        
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Grupos <i class="mdi-navigation-close right"></i></span>
                        <ul>
                            <li>Metallica</li>
                            <li>AC/DC</li>
                            <li>Korn</li>
                            <li>System of a Down</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="https://source.unsplash.com/featured/640x480/?music-and-sound">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Pop <i class="mdi-navigation-more-vert right"></i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Artistas<i class="mdi-navigation-close right"></i></span>
                        <ul>
                            <li>Selena Gómez</li>
                            <li>Alejandro Sanz</li>
                            <li>Melendi</li>
                            <li>Bisbal</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="https://source.unsplash.com/featured/640x480/?indie">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Indie <i class="mdi-navigation-more-vert right"></i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Grupos <i class="mdi-navigation-close right"></i></span>
                        <ul>
                            <li>Vetusta Morla</li>
                            <li>Los Planetas</li>
                            <li>Artic Monkeys</li>
                            <li>Lori Meyers</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="https://source.unsplash.com/featured/640x480/?jazz">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Jazz<i class="mdi-navigation-more-vert right"></i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <ul>
                            <li>Louis Armstrong</li>
                            <li>Jose James</li>
                            <li>Emily King</li>
                            <li>Norah Jones</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="https://source.unsplash.com/featured/640x480/?classic-music">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Música clásica <i class="mdi-navigation-more-vert right"></i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <ul>
                            <li>Beethoven</li>
                            <li>Mozart</li>
                            <li>Bach</li>
                            <li>Claude Debussy</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="https://source.unsplash.com/featured/640x480/?films">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Bandas Sonoras<i class="mdi-navigation-more-vert right"></i></span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <ul>
                            <li>Amelie</li>
                            <li>Dirty Dancing</li>
                            <li>Rocky</li>
                            <li>La vida es Bella</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--Footer-->
<footer class="black">
  <?php include "view/share/footer.php"; ?>
  </footer>

    <!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/script.js"></script>

    </body>
</html>
