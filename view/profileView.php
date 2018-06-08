<!DOCTYPE html>
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
                    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="index.php?controller=Homeuser&action=viewHome">Home</a></li>
                            <?php if($user->getType() == "admin" || $user->getType() == "root") { ?>
                            <li><a href="index.php?controller=Admin&action=viewAdmin">Administrador</a></li>
                            <?php } ?>
                            <li><a href="index.php?controller=User&action=exitFromSession">Salir</a></li>    
                        </ul>
                        <ul id="nav-mobile" class="side-nav">
                            <li><a href="index.php?controller=Homeuser&action=viewHome">Home</a></li>
                            <li><a href="index.php?controller=User&action=exit">Salir</a></li>      
                            <li><a href="#contact">Contact</a></li>  
                        </ul>
                    
                </div>
            </div>
        </nav>
    </div>

    <!--FORM-->
    <div class="row">
        <div class="row col s8" id="unete">    
            <form class="col s12 m8 offset-m2" method="post" action="<?php echo $helper->url('Profile', 'saveProfile') ?>" enctype="multipart/form-data">
                <h4 class="text-center">Editar Perfil</h4>
                <div class="row">
                    <div class="input-field col s12">
                        <input name="nick" id="user" type="text" value="<?php echo $user->getNick() ?>" readonly/>                   
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="nameUser" name="name" type="text" value="<?php echo $user->getName() ?>" />
                        <label for="name">Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="surnameUser" name="surname" type="text" value="<?php echo $user->getSurname() ?>" />
                        <label for="surname">Apellidos</label>
                    </div>
                </div>
                <div class="row">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>File</span>
                            <input type="file" name="image"/>
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" id="file" type="text"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" value="<?php echo $user->getEmail() ?>" required/>
                        <label for="email">Email</label>
                    </div>
                </div>
                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
        <div class="row col push-s2 s3">
            <img src="<?php echo $user->getImage() ?>" alt="Avatar" class=" circle responsive-img" with="200px" height="200px">
        </div>  
        <div class="row col s8" id="unete">
        <form class="col s12 m8 offset-m2" method="post" action="<?php echo $helper->url('Profile', 'savePassword') ?>">
            <h4 class="text-center">Cambiar Contraseña</h4>
            <div class="row">
                <div class="input-field col s12">
                    <input name="oldPass" id="oldPass" name="oldPass" type="password">
                    <label for="oldPass">Antigua contraseña</label>
                    <span id="passOriginal"><?php echo $error; ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="newPass" id="newPass" name="NewPass" type="password">
                    <label for="newPass">Nueva contraseña</label>
                    <span id="newPassspan"><?php echo $errorNew; ?></span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="newpass2" id="newpass2" type="password" >
                    <label for="newpass2">Repita nueva contraseña</label>
                    <span id="newpass2span"><?php echo $errorCompare; ?></span>
                </div>
            </div>
            <div class="row">
                <button class="btn waves-effect waves-light" type="submit" name="modificar" id="modificar">
                    Modificar
                </button>
            </div>
        </form>
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
