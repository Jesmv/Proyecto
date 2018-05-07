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
<body id="top" class="scrollspy fondo">
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
<?php include "view/share/footer.php"; ?>

    <!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/script.js"></script>

    </body>
</html>
