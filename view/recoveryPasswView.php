<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="theme-color" content="#EF0897">
    <title>Song2Song</title>

    <!-- CSS  -->
    <link href="css/materialize.css" type="text/css" rel="stylesheet">
	<link href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
</head>
<body>

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
    
    <div class="logIn">
        
            <form class="col s12" action="<?php echo $helper->url('User', 'sendEmail') ?>" method="post">
                <fieldset>
                    <h4>Recupera tu cuenta</h4>
                    <p>Introduce tu email para recibir un correo y restablecer tu contraseña</p>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="modal-footer col s6 offset-m2" id="sendMail">
                            <button class="btn send" type="submit" name="send" id="send">Comprobar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        
    </div>
  <!--Footer-->
    <footer class="black newFooter">
        <?php include "view/share/footer.php"; ?>
    </footer>

<!--  Scripts-->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
<script src="js/init.js"></script>
<script src="js/script.js"></script>

</body>
</html>