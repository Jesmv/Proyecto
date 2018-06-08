<?php
/*
Controlador para la pagina administrador
cuando ya ha hecho login
*/
class AdminController extends ControladorBase {

    public function viewAdmin() {
        if ($_SESSION['sesionIniciada'] == true && ($_SESSION['user']->getType() == 'admin' || $_SESSION['user']->getType() == 'root')) {
            $datos = [];
            $this->view('admin', $datos);
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }

    }

    //Acción por defecto
    public function viewHome() {
        $this->viewAdminSongs();
    }

    public function viewAdminSongs() {

        if ($_SESSION['sesionIniciada'] == true && ($_SESSION['user']->getType() == 'admin' || $_SESSION['user']->getType() == 'root')) {
            $modelo = new Song();
            $songs = $modelo->getAll();
            $datos = [
                'canciones'=>$songs
            ];
            $this->view('adminSong', $datos);
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }

    }

    public function viewAdminUsers() {

        if ($_SESSION['sesionIniciada'] == true && ($_SESSION['user']->getType() == 'admin' || $_SESSION['user']->getType() == 'root')) {
            
            $modelo = new User();
            $users = $modelo->getAll();
            $datos = [
                'usuarios' => $users
            ];
            $this->view('adminUsers', $datos);
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }

    }

    public function deleteAdminUser() {

        $modelo = new User();
        $user = $modelo->getById($_GET['id']);

        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'root') {

            $user = $modelo->deleteById($_GET['id']);

            header ("Location: index.php?controller=Admin&action=viewAdminUsers");
        } elseif($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'admin' && $user->type == 'user') {
            
            $user = $modelo->deleteById($_GET['id']);

            header ("Location: index.php?controller=Admin&action=viewAdminUsers");
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }

    }

    public function changeAdminUser() {
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'root') {

            $modelo = new User();
            $user = $modelo->updateValues($_GET['id'], '');

            header ("Location: index.php?controller=Admin&action=viewAdminUsers");
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }

    }

    public function addAdminSong() {
        if ($_SESSION['sesionIniciada'] == true && ($_SESSION['user']->getType() == 'admin' || $_SESSION['user']->getType() == 'root')) {
            $model = new Song();
            $songExist = $model->findSong($_POST['autor'], $_POST['titulo']);
            if (!$songExist) {
                $model->saveNewSong($_POST['autor'], $_POST['titulo'], $_POST['grupo'], $_POST['album'], $_POST['year'], $_POST['tags']);
            } else {
                echo "<script> alert('Ya existe esta canción') </script>";
            }
            $this->viewAdminSongs();
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }
    }

    public function changeAdmin() {
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'root') {

            $modelo = new User();
            $user = $modelo->updateValues('type', 'admin', 'id', $_GET['id']);

            header ("Location: index.php?controller=Admin&action=viewAdminUsers");
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }
    }

    public function deleteAdminSong() {
       if ($_SESSION['sesionIniciada'] == true && ($_SESSION['user']->getType() == 'admin' || $_SESSION['user']->getType() == 'root')) {

            $modelo = new Song();
            $song = $modelo->deleteById($_GET['id']);

            header ("Location: index.php?controller=Admin&action=viewAdminSong");
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }
 
    }

    public function viewAdminMessage() {

        if ($_SESSION['sesionIniciada'] == true && ($_SESSION['user']->getType() == 'admin' || $_SESSION['user']->getType() == 'root')) {
            $datos = [];
            $this->view('adminMessage', $datos);
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }

    }

    public function addImageSong() {

        if ($_SESSION['sesionIniciada'] == true && ($_SESSION['user']->getType() == 'admin' || $_SESSION['user']->getType() == 'root')) {
            $model = new Song();
            $imageUrl = $model->updateImage($_POST['id']);

        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }
    }

    public function updateAdminSong() {
        if ($_SESSION['sesionIniciada'] == true && ($_SESSION['user']->getType() == 'admin' || $_SESSION['user']->getType() == 'root')) {
            $model = new Song();

            $song = $model->updateSong($_POST['id'], $_POST['titulo'], $_POST['autor'], $_POST['grupo'], $_POST['album'], $_POST['year'], $_POST['tags']);

            header ("Location: index.php?controller=Admin&action=viewAdminSong");
         
        } else {
            header ("Location: index.php?controller=Home&action=viewHome");
        }
    }

}

?>