<?php

class UserController extends ControladorBase {

    public function LogInPage() {

        if (isset($_SESSION['errorRegistro']) && $_SESSION['errorRegistro']) {
            $error = true;
            // hay que borrar el error de registro
            // ya que solo aplica una vez.
            $_SESSION['errorRegistro'] = False;
        } else {
            $error = false;
        }

        if(isset($_GET['errorlogin']) && $_GET['errorlogin']) {
            $errorlogin = true;
        } else {
            $errorlogin = false;
        }

        $this->view('logIn', [ 
            'errorRegister' =>  $error,
            'errorlogin' => $errorlogin
        ]);
    }

    public function login() {

        $model = new User();
        
        $user = $model->findUser($_POST['user_Name']);

        if ($user && $user->getPassword() === md5($_POST['user_Password'])) {
            // usuario logueado
            $_SESSION['sesionIniciada'] =true;
            $_SESSION['user'] = $user;
            header ("Location: index.php?controller=Homeuser&action=viewHome");
        } else {
            header ("Location: index.php?controller=User&action=LogInPage&errorlogin=1");
        }

    }

    public function newUser() {
        if (isset($_SESSION['errorRegistro']) && $_SESSION['errorRegistro']) {
            $error = true;
            // hay que borrar el error de registro
            // ya que solo aplica una vez.
            $_SESSION['errorRegistro'] = False;
        } else {
            $error = false;
        }

        $this->view('newuser', [ 
            'errorRegister' =>  $error ]);

    }

    public function register() {

        $model = new User();
        
        $userExist = $model->newUser($_POST['user'], $_POST['email']);

        if ($userExist === null) {
            $_SESSION['sesionIniciada'] =true;

            $user = $model->saveNewUser($_POST['email'], $_POST['user'], md5($_POST['password']));

            if ($user){
                $_SESSION['user'] = $user;
                header ("Location: index.php?controller=homeuser&action=viewHome");
            } else {
                $_SESSION['errorRegistro'] = true;           
                header ("Location: index.php?controller=User&action=newuser");
            }
            
            
        } else {
            $_SESSION['errorRegistro'] = true;           
            header ("Location: index.php?controller=User&action=newuser");
        }
        

    }

    public function exitFromSession() {
        unset($_SESSION['user']);
        unset($_SESSION['sesionIniciada']);
        header ("Location: index.php?controller=Home&action=viewHome");
    }

    //Acción por defecto
    public function viewHome() {
        $this->RecoveryPass();
    }

    public function RecoveryPass() {

        if (isset($_SESSION['errorRegistro']) && $_SESSION['errorRegistro']) {
            $error = true;
            // hay que borrar el error de registro
            // ya que solo aplica una vez.
            $_SESSION['errorRegistro'] = False;
        } else {
            $error = false;
        }

        $this->view('recoveryPassw', []);
    }

    public function sendEmail() {
        $model = new User();

        $user = $model->getBy('email', $_POST['email']);

        if(empty($user)){
            echo "Email erroneo";
        } else {
            $password = $model->changePassword($user);
            $to = $user[0]->email;
            $subject = "Song2Song User";
            $message = '
                Song2Song
                Credenciales
                Usuario: '.$user[0]->nick.'
                Contraseña: '.$password.'
                http://song2song.xyz/index.php?controller=User&action=LogInPage'
            ;
            mail($to, $subject, $message);
            
        }

        header ("Location: index.php?controller=Home&action=viewHome");
    }

}

?>