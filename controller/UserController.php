<?php

class UserController extends ControladorBase {

    public function login() {

        $model = new User();
        
        $user = $model->findUser($_POST['user_Name']);

        if ($user->password === $_POST['user_Password']) {
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
        } else {
            $error = false;
        }

        $this->view('newuser', [ 'errorRegister' =>  $error ]);

    }

    public function register() {

        $model = new User();
        
        $userExist = $model->newUser($_POST['user'], $_POST['email']);

        if ($userExist === null) {
            $_SESSION['sesionIniciada'] =true;
            
            header ("Location: index.php?controller=homeuser&action=viewPage");
            //$_SESSION['user'] = $user;
        } else {
            $_SESSION['errorRegistro'] = true;           
            header ("Location: index.php?controller=User&action=newuser");
        }
        

    }




}

?>