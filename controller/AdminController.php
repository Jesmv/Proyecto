<?php
/*
Controlador para la pagina administrador
cuando ya ha hecho login
*/
class AdminController extends ControladorBase {

    public function viewAdmin() {

        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->type == 'admin') {
            $datos = [];
            $this->view('admin', $datos);
        } else {
            echo 'No autorizado';
        }

    }


    public function viewAdminSongs() {

        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->type == 'admin') {

            $modelo = new Song();
            $songs = $modelo->getAll();
            $datos = [
                'canciones'=>$songs
            ];
            $this->view('adminSong', $datos);
        } else {
            echo 'No autorizado';
        }

    }

    public function viewAdminUsers() {

        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->type == 'admin') {
            
            $modelo = new User();
            $users = $modelo->getAll();
            $datos = [
                'usuarios' => $users
            ];
            $this->view('adminusers', $datos);
        } else {
            echo 'No autorizado';
        }

    }

    public function deleteAdminUser() {
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->type == 'admin') {

            $modelo = new User();
            $user = $modelo->deleteById($_GET['id']);

            header ("Location: index.php?controller=Admin&action=viewAdminUsers");
        } else {
            echo 'No autorizado';
        }

    }

    public function changeAdminUser() {
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->type == 'admin') {

            $modelo = new User();
            $user = $modelo->updateValues($_GET['id'], '');

            header ("Location: index.php?controller=Admin&action=viewAdminUsers");
        } else {
            echo 'No autorizado';
        }

    }

    public function addAdminSong() {
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->type == 'admin') {

            $modelo = new Song();
            $songExist = $model->newSong($_POST['user'], $_POST['email']);

            if ($songExist === null) {
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
        } else {
            echo 'No autorizado';
        }
    }

}

?>