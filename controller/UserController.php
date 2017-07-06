<?php

class UserController extends ControladorBase {

    public function login() {

        $model = new User();
        
        $user = $model->findUser($_POST['user_Name']);

        if ($user->password === md5($_POST['user_Password'])) {
            // usuario logueado
            $_SESSION['sesionIniciada'] =true;
            $_SESSION['user'] = $user;
            header ("Location: index.php?controller=Homeuser&action=viewHome");
        } else {
            echo 'Password incorrecto';
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
                header ("Location: index.php?controller=homeuser&action=viewPage");
            } else {
                $_SESSION['errorRegistro'] = true;           
                header ("Location: index.php?controller=User&action=newuser");
            }
            
            
        } else {
            $_SESSION['errorRegistro'] = true;           
            header ("Location: index.php?controller=User&action=newuser");
        }
        

    }




}

?>