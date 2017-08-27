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
            <a href="index.php?controller=Home&action=viewHome" id="logo-container" class="brand-logo">Song2Song</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php?controller=Home&action=viewHome">Home</a></li>
                    <li><a href="#logIn">Log In</a></li>
                    <li><a href="index.php?controller=Home&action=viewHome">Music</a></li>     
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="index.php?controller=User&action=viewHome">Home</a></li>
                    <li><a href="#logIn">Log In</a></li>
                    <li><a href="#music">Music</a></li>      
                    <li><a href="#contact">Contact</a></li> 
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>

<!--Form-->
<div class="row">
<div class="col s12 " id="unete">

    <?php if ($errorRegister) { ?>
        <script>
            alert('Registro incorrecto');
        </script>
    <?php  } ?>
      
      <form class="col s12 m6 offset-m3" method="post" action="<?php echo $helper->url('User', 'register') ?>">
      <fieldset>
        <h4 class="col s12 offset-m2">Unete a Song2Song</h4>
        <div class="row">
            <div class="input-field col s6 offset-m2">
                <input name="user" id="user" type="text" required/>
                <label for="user">Usuario</label>
                <span id="userSpan">Mínimo 3 caracteres</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 offset-m2">
                <input id="email" type="email" name="email" required/>
                <label for="email">Email</label>
                <span id="emailSpan">Introduzca email válido</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6 offset-m2">
                <input name="password" id="password" type="password" required/>
                <label for="password">Contraseña</label>
                <span id="pasSpan">
                    <ul>
                        <li>Máximo 15</li>
                        <li>Al menos una letra mayúscula</li>
                        <li>Al menos una letra minúscula</li>
                        <li>Al menos un dígito</li>
                        <li>Al menos 1 carácter especial</li>
                    </ul>
                </span>
            </div>
            
        </div>
        <div class="row">
            <div class="input-field col s6 offset-m2">
                <input name="password2" id="password2" type="password" required/>
                <label for="password2">Repita contraseña</label>
                <span id="pas2Span">No coincide con contraseña anterior</span>
            </div>
        </div>
        
        <div class="row">
            <div class="col s12 offset-m2">
                <input type="checkbox" id="condiciones" required/>   
                <label for="condiciones">Acepto los términos y condiciones de uso.</label>     
            </div>
        </div>
        <div class="row">
            <div class="col s12 offset-m4">
                <button class="btn waves-effect waves-light" type="submit" name="action">
                    Enviar
                </button>
            </div> 
        </div>  
        </fieldset>
        </form>
</div>
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

<!-- Modal Structure -->
  <div id="logIn" class="modal">
    <div class="modal-content">
      <h4>Iniciar Sesion</h4>
      <form action="<?php echo $helper->url('User', 'login') ?>" method="post">
         <div class="row">
          <div class="input-field col s6 " >
            <input name="user_Name" id="user_Name" type="text" required/>
            <label for="user_Name" class="#ad1457">Usuario</label>
          </div>
          <div class="input-field col s6">
            <input name="user_Password" id="user_Password" type="password" required/>
            <label for="user_Password" class="#ad1457">Contraseña</label>
          </div>
          <div class="modal-footer" id="sendUser">
            <input class="btn waves-effect waves-light" type="submit" name="send" id="send">
          </div>
        </div>
      </form>
    </div>
  </div>

  



    <!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/script.js"></script>

    </body>
</html>
