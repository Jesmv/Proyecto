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
                    <li><a href="index.php?controller=Home&action=viewHome">Home</a></li>
                    <li><a href="index.php?controller=User&action=newUser">New User</a></li>
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="index.php?controller=Home&action=viewHome">Home</a></li>
                    <li><a href="index.php?controller=User&action=newUser">New User</a></li>  
                </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            </div>
        </div>
    </nav>
</div>
	<div class="container logIn">
    <div class="row" id="unete">
      
      <form class="col s12 m4 offset-m4" action="<?php echo $helper->url('User', 'login') ?>" method="post">
      <fieldset>
      <h4 class="col s12 offset-m2">Log In</h4>
         <div class="row">
          <div class="input-field col s6 offset-m2 " >
            <input name="user_Name" id="user_Name" type="text" required/>
            <label for="user_Name" class="#ad1457">Usuario</label>
          </div>
          </div>
          <div class="row">
          <div class="input-field col s6 offset-m2">
            <input name="user_Password" id="user_Password" type="password" required/>
            <label for="user_Password" class="#ad1457">Contraseña</label>
          </div>
          </div>
          <div class="row">
          <div class="modal-footer col s6 offset-m2" id="sendUser">
            <button class="btn waves-effect waves-light" type="submit" name="send" id="send">Enviar</button>
          </div>
          </fieldset>  

          <?php if ($errorlogin) {

          	echo 'Error al iniciar sesion';
          } ?>
        </div>
      </form>
      </div>
  </div>
  <!--Footer-->
  <footer class="black piePag">
  <?php include "view/share/footer.php"; ?>
  </footer>

<!--  Scripts-->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script src="js/script.js"></script>

</body>
</html>