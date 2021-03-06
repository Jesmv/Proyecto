
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
<body id="top" class="scrollspy fondo">
<!--Navigation-->
 <div class="navbar-fixed">
    <nav id="nav_f" class="default_color" role="navigation">
        <div class="container">
            <div class="nav-wrapper">
            <a href="index.php?controller=Home&action=viewHome" id="logo-container" class="brand-logo">Song2Song</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php?controller=Home&action=viewHome">Home</a></li>
                    <li><a href="index.php?controller=User&action=LogInPage">Log In</a></li>    
                </ul>
                <ul id="nav-mobile" class="side-nav">
                    <li><a href="index.php?controller=Home&action=viewHome">Home</a></li>
                    <li><a href="index.php?controller=User&action=LogInPage">Log In</a></li>  
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
      <fieldset id="newUser">
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
                <label for="condiciones">Acepto los <a class="modal-trigger" href="#modal1">Términos y Condiciones</a> de uso.</label>     
            </div>
        </div>
        <div class="row">
            <div class="col s12 offset-m4">
                <button class="btn waves-effect waves-light send" type="submit" name="action">
                    Enviar
                </button>
            </div> 
        </div>  
        </fieldset>
        </form>

</div>
</div>


<!--Footer-->
<footer class="black newFooter">
  <?php include "view/share/footer.php"; ?>
  </footer>

<!-- Modal Structure -->
<div id="modal1" class="modal">
    <div class="modal-content">
        <h4>Términos y Condiciones</h4>
        <h5>1. DATOS IDENTIFICATIVOS</h5>
        <p>En cumplimiento con el deber de información recogido en artículo 10 de la Ley 34/2002, de 11 de julio, de Servicios 
            de la Sociedad de la Información y del Comercio Electrónico, a continuación se reflejan los siguientes datos: la 
            empresa titular de dominio web es RRRRR (en adelante NNNNN), con domicilio a estos efectos en DDDDD número de 
            C.I.F.: CCCCC inscrita en el MMMMM. Correo electrónico de contacto: EEEEE del sitio web. <p>
        <h5>2. USUARIOS</h5>
        <p>El acceso y/o uso de este portal de NNNNN atribuye la condición de USUARIO, que acepta, desde dicho acceso 
            y/o uso, las Condiciones Generales de Uso aquí reflejadas. Las citadas Condiciones serán de aplicación 
            independientemente de las Condiciones Generales de Contratación que en su caso resulten de obligado 
            cumplimiento. <p>

        <h5>3. USO DEL PORTAL</h5>
        <p>WWWWW proporciona el acceso a multitud de informaciones, servicios, programas o datos (en adelante, “los 
            contenidos”) en Internet pertenecientes a NNNNN o a sus licenciantes a los que el USUARIO pueda tener acceso. 
            El USUARIO asume la responsabilidad del uso del portal. Dicha responsabilidad se extiende al registro que fuese
            necesario para acceder a determinados servicios o contenidos. <br>
            En dicho registro el USUARIO será responsable de aportar información veraz y lícita. Como consecuencia de 
            este registro, al USUARIO se le puede proporcionar una contraseña de la que será responsable, comprometiéndose
             a hacer un uso diligente y confidencial de la misma. El USUARIO se compromete a hacer un uso adecuado de los 
             contenidos y servicios (como por ejemplo servicios de chat, foros de discusión o grupos de noticias) que 
             Nombre de la empresa creadora del sitio web ofrece a través de su portal y con carácter enunciativo pero no 
             imitativo, a no emplearlos para (i) incurrir en actividades ilícitas, ilegales o contrarias a la buena fe y 
             al orden público; (ii) difundir contenidos o propaganda de carácter racista, xenófobo, pornográfico-ilegal, 
             de apología del terrorismo o atentatorio contra los derechos humanos; (iii) provocar daños en los sistemas 
             físicos y lógicos de Nombre de la empresa creadora del sitio web , de sus proveedores o de terceras personas, 
             introducir o difundir en la red virus informáticos o cualesquiera otros sistemas físicos o lógicos que sean 
             susceptibles de provocar los daños anteriormente mencionados; (iv) intentar acceder y, en su caso, utilizar 
             las cuentas de correo electrónico de otros usuarios y modificaro manipular sus mensajes. Nombre de la empresa 
             creadora del sitio web se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren 
             el respeto a la dignidad de la persona, que sean discriminatorios, xenófobos, racistas, pornográficos, que 
             atenten contra la juventud o la infancia, el orden o la seguridad pública o que, a su juicio, no resultaran 
             adecuados para su publicación. En cualquier caso, NNNNN no será responsable de las opiniones vertidas por los 
             usuarios a través de los foros, chats, u otras herramientas de participación.</p> 
        <h5>4. PROTECCIÓN DE DATOS</h5>
        <p>NNNNN cumple con las directrices de la Ley Orgánica 15/1999 de 13 de diciembre de Protección de Datos de 
            Carácter Personal, el Real Decreto 1720/2007 de 21 de diciembre por el que se aprueba el Reglamento de 
            desarrollo de la Ley Orgánica y demás normativa vigente en cada momento, y vela por garantizar un correcto 
            uso y tratamiento de los datos personales del usuario. Para ello, junto a cada formulario de recabo de 
            datos de carácter personal, en los servicios que el usuario pueda solicitar a KKKKK, hará saber al usuario 
            de la existencia y aceptación de las condiciones particulares del tratamiento de sus datos en cada caso, 
            informándole de la responsabilidad del fichero creado, la dirección del responsable, la posibilidad de 
            ejercer sus derechos de acceso, rectificación, cancelación u oposición, la finalidad del tratamiento y las 
            comunicaciones de datos a terceros en su caso. <br>
            Asimismo, NNNNN informa que da cumplimiento a la Ley 34/2002 de 11 de julio, de Servicios de la Sociedad 
            de la Información y el Comercio Electrónico y le solicitará su consentimiento al tratamiento de su correo 
            electrónico con fines comerciales en cada momento.</p> 
        <h5>5. PROPIEDAD INTELECTUAL E INDUSTRIAL</h5>
        <p>NNNNN por sí o como cesionaria, es titular de todos los derechos de propiedad intelectual e industrial desu 
            página web, así como de los elementos contenidos en la misma (a título enunciativo, imágenes, sonido, 
            audio, vídeo, software o textos; marcas o logotipos, combinaciones de colores, estructura y diseño, 
            selección de materiales usados, programas de ordenador necesarios para su funcionamiento, acceso y uso, 
            etc.), titularidad de NNNNN o bien de sus licenciantes.<br>
            Todos los derechos reservados. En virtud de lo dispuesto en los artículos 8 y 32.1, párrafo segundo, de 
            la Ley de Propiedad Intelectual, quedan expresamente prohibidas la reproducción, la distribución y la 
            comunicación pública, incluida su modalidad de puesta a disposición, de la totalidad o parte de los 
            contenidos de esta página web, con fines comerciales, en cualquier soporte y por cualquier medio técnico, 
            sin la autorización de NNNNN. El USUARIO se compromete a respetar los derechos de Propiedad Intelectual e 
            Industrial titularidad de NNNNN. Podrá visualizar los elementos del portal e incluso imprimirlos, copiarlos 
            y almacenarlos en el disco duro de su ordenador o en cualquier otro soporte físico siempre y cuando sea, 
            única y exclusivamente, para su uso personal y privado. El USUARIO deberá abstenerse de suprimir, alterar, 
            eludir o manipular cualquier dispositivo de protección o sistema de seguridad que estuviera instalado en 
            el las páginas de NNNNN.</p> 
        <h5>6. EXCLUSIÓN DE GARANTÍAS Y RESPONSABILIDAD</h5>
        <p>NNNNN no se hace responsable, en ningún caso, de los daños y perjuicios de cualquier naturaleza que pudieran 
            ocasionar, a título enunciativo: errores u omisiones en los contenidos, falta de disponibilidad del portal o 
            la transmisión de virus o programas maliciosos o lesivos en los contenidos, a pesar de haber adoptado todas 
            las medidas tecnológicas necesarias para evitarlo.</p> 
        <h5>7. MODIFICACIONES</h5>
        <p>NNNNN se reserva el derecho de efectuar sin previo aviso las modificaciones que considere oportunas en su 
            portal, pudiendocambiar, suprimir o añadir tanto los contenidos y servicios que se presten a través de la 
            misma como la forma en la que éstos aparezcan presentados o localizados en su portal.</p> 
        <h5>8. ENLACES</h5>
        <p>En el caso de que en WWWWW se dispusiesen enlaces o hipervínculos hacía otros sitios de Internet, NNNNN no 
            ejercerá ningún tipo de control sobre dichos sitios y contenidos. En ningún caso NNNNN asumirá 
            responsabilidad alguna por los contenidos de algún enlace perteneciente a un sitio web ajeno, ni 
            garantizará la disponibilidad técnica, calidad, fiabilidad, exactitud, amplitud, veracidad, validez y 
            constitucionalidad de cualquier material o información contenida en ninguno de dichos hipervínculos u otros 
            sitios de Internet. <br>
            Igualmente la inclusión de estas conexiones externas no implicará ningún tipo de asociación, fusión o 
            participación con las entidades conectadas.</p> 
        <h5>9. DERECHO DE EXCLUSIÓN</h5>
        <p>NNNNN se reserva el derecho a denegar o retirar el acceso a portal y/o los servicios ofrecidos sin necesidad 
            de preaviso, a instancia propia o de un tercero, a aquellos usuarios que incumplan las presentes 
            Condiciones Generales de Uso.</p> 
        <h5>10.GENERALIDADES</h5>
        <p>NNNNN perseguirá el incumplimiento de las presentes condiciones así como cualquier utilización indebida de 
            su portal ejerciendo todas las acciones civiles y penales que le puedan corresponder en derecho.</p> 
        <h5>11.MODIFICACIÓN DE LAS PRESENTES CONDICIONES Y DURACIÓN</h5>
        <p>NNNNN podrá modificar en cualquier momento las condiciones aquí determinadas, siendo debidamente publicadas 
            como aquí aparecen. <br>
            La vigencia de las citadas condiciones irá en función de su exposición y estarán vigentes hasta debidamente 
            publicadas. que sean modificadas por otras.</p> 
        <h5>12. LEGISLACIÓN APLICABLE Y JURISDICCIÓN</h5>
        <p>La relación entre NNNNN y el USUARIO se regirá por la normativa española vigente y cualquier controversia 
            se someterá a los Juzgados y tribunales de la ciudad de QQQQQ.</p> 
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat" id="acepto">Acepto</a>
      <a href="#!" class="modal-close waves-effect waves-red btn-flat" id="noAcepto">No Acepto</a>
    </div>
  </div>

    <!--  Scripts-->
    <script src="js/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src="js/script.js"></script>

<script>
    $(document).ready(function(){
        $('.modal').modal();

        $("#acepto").click(function() {
            $("#condiciones").attr("checked", true);
            return false;
        });

        $("#noAcepto").click(function() {
            $("#condiciones").attr("checked", false);
            return false;
        });
    });
</script>
    </body>
</html>
