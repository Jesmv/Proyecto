<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#EF0897">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<title>Log In</title>
</head>
<body>
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
	<div id="logIn">
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
            <button class="btn waves-effect waves-light" type="submit" name="send" id="send">Enviar</button>
          </div>

          <?php if ($errorlogin) {

          	echo 'Error al iniciar sesion';
          } ?>
        </div>
      </form>
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