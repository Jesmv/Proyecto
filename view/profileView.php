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
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#music">Salir</a></li>      
                    <li><a href="#contact">Contact</a></li>     
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#intro">Home</a></li>
                    <li><a href="#music">Salir</a></li>      
                    <li><a href="#contact">Contact</a></li>  
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Form-->

<h1 class="text-center">Editar Perfil</h1>
    <h2 class="text-center">Datos de la Cuenta</h2>
        <div class="row">
          <form class="col s5 offset-m2" method="post" action="" ENCTYPE="multipart/form-data">
            <div class="row">
            <div class="input-field col s12">
              <input id="user" name="user" type="text" value="<?php echo $user->getNick(); ?>" readonly>
              <label for="user">User</label>
            </div>
            </div>
            <div class="row">
            <div class="input-field col s12">
              <input id="nameUser" name="name" type="text" value="<?php echo $user->getName(); ?>" />
              <label for="name">Name</label>
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field">
              <div class="btn">
                <span>File</span>
                <input type="file" name="imagen">
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" id="file" type="text" >
              </div>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" name="email" value="<?php echo $user->getEmail(); ?>" required/>
              <label for="email">Email</label>
            </div>
          </div>
          <div class="row">
              <input class="btn waves-effect waves-light" type="submit" name="modificar" id="modificar">
          </div>
        </form>
        <div class="col s3">
          <img src="<?php echo $user->getImage(); ?>" alt="Avatar" class=" circle responsive-img" with="200px" height="200px">
        </div>
        <form class="col s5 offset-m2" method="post" action="" ENCTYPE="multipart/form-data">
          <h3 class="text-center">Cambiar Contraseña</h3>
          <div class="row">
            <div class="input-field col s12">
              <input name="oldPass" id="oldPass" name="oldPass" type="password">
              <label for="oldPass">Antigua contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="newPass" id="newPass" name="NewPass" type="password">
              <label for="newPass">Nueva contraseña</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="repeatNewPass" id="repeatNewPass" name="repeatNewPass" type="password" >
              <label for="repeatNewPass">Repita nueva contraseña</label>
            </div>
          </div>
          <div class="row">
              <input class="btn waves-effect waves-light" type="submit" name="modificar" id="modificar">
          </div>
        </form>
        
      </div>
  

<!--Footer-->
<footer id="contact" class="page-footer default_color scrollspy">
    <div class="container">  
        <div class="row">
            <div class="col l6 s12">
                <form class="col s12" action="contact.php" method="post">
                    <div class="row">
                        <div class="input-field col s6">
                            <i class="mdi-action-account-circle prefix white-text"></i>
                            <input id="icon_prefix" name="name" type="text" class="validate white-text">
                            <label for="icon_prefix" class="white-text">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <i class="mdi-communication-email prefix white-text"></i>
                            <input id="icon_email" name="email" type="email" class="validate white-text">
                            <label for="icon_email" class="white-text">Email-id</label>
                        </div>
                        <div class="input-field col s12">
                            <i class="mdi-editor-mode-edit prefix white-text"></i>
                            <textarea id="icon_prefix2" name="message" class="materialize-textarea white-text"></textarea>
                            <label for="icon_prefix2" class="white-text">Message</label>
                        </div>
                        <div class="col offset-s7 s5">
                            <button class="btn waves-effect waves-light red darken-1" type="submit">Submit
                                <i class="mdi-content-send right white-text"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">jessicamansovillanueva.tk</h5>
                <ul>
                    <li><a class="white-text" href="http://www.joashpereira.com/">Home</a></li>
                    <li><a class="white-text" href="http://www.joashpereira.com/blog">Blog</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/jessica.manso">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/jesmv">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/Jessicamansovillanueva">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Made by <a class="white-text" href="http://joashpereira.com">Jessica Manso</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
        </div>
    </div>
</footer>

    <!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/script.js"></script>

    </body>
</html>
