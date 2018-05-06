<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="css/style.css" type="text/css" rel="stylesheet">
	<title>Log In</title>
</head>
<body>
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
</body>
</html>