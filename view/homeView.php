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
                    <li><a href="#intro">Service</a></li>
                    <li><a href="#logIn">Log In</a></li>
                    <li><a href="index.php?controller=User&action=newUser">New User</a></li>
                    <li><a href="#music">Music</a></li>      
                    <li><a href="#contact">Contact</a></li>     
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="#intro">Service</a></li>
                    <li><a href="#logIn">Log In</a></li>
                    <li><a href="#index.php?controller=User&action=newUser">New User</a></li>
                    <li><a href="#music">Music</a></li>      
                    <li><a href="#contact">Contact</a></li> 
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

<!--Music-->
<div class="section scrollspy" id="music">
    <div class="container">
        <h2 class="header text_b">Music </h2>
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project1.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Rock <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project2.jpeg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project4.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project5.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/project6.jpeg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Project Title <i class="mdi-navigation-more-vert right"></i></span>
                        <p><a href="#">Project link</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Project Title <i class="mdi-navigation-close right"></i></span>
                        <p>Here is some more information about this project that is only revealed once clicked on.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--Parallax-->
<div class="parallax-container">
    <div class="parallax"><img src="img/notas.png"></div>
</div>

<!--Team-->
<div class="section scrollspy" id="team">
    <div class="container">
        <h2 class="header text_b"> Our Team </h2>
        <div class="row">
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar1.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Flash <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CEO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar2.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Cat Woman<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Designer</a></em></small>
                        </span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar3.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">
                            Capt. America <br/>
                            <small><em><a class="red-text text-darken-1" href="#">CMO</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col s12 m3">
                <div class="card card-avatar">
                    <div class="waves-effect waves-block waves-light">
                        <img class="activator" src="img/avatar4.png">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Robin<br/>
                            <small><em><a class="red-text text-darken-1" href="#">Developer</a></em></small></span>
                        <p>
                            <a class="blue-text text-lighten-2" href="https://www.facebook.com/joash.c.pereira">
                                <i class="fa fa-facebook-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://twitter.com/im_joash">
                                <i class="fa fa-twitter-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://plus.google.com/u/0/+JoashPereira">
                                <i class="fa fa-google-plus-square"></i>
                            </a>
                            <a class="blue-text text-lighten-2" href="https://www.linkedin.com/in/joashp">
                                <i class="fa fa-linkedin-square"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
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
                <h5 class="white-text">joashpereira.com</h5>
                <ul>
                    <li><a class="white-text" href="http://www.joashpereira.com/">Home</a></li>
                    <li><a class="white-text" href="http://www.joashpereira.com/blog">Blog</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Social</h5>
                <ul>
                    <li>
                        <a class="white-text" href="https://www.behance.net/joashp">
                            <i class="small fa fa-behance-square white-text"></i> Behance
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.facebook.com/joash.c.pereira">
                            <i class="small fa fa-facebook-square white-text"></i> Facebook
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://github.com/joashp">
                            <i class="small fa fa-github-square white-text"></i> Github
                        </a>
                    </li>
                    <li>
                        <a class="white-text" href="https://www.linkedin.com/in/joashp">
                            <i class="small fa fa-linkedin-square white-text"></i> Linkedin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright default_color">
        <div class="container">
            Made by <a class="white-text" href="http://joashpereira.com">Joash Pereira</a>. Thanks to <a class="white-text" href="http://materializecss.com/">materializecss</a>
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
