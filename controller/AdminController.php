<?php
/*
Controlador para la pagina administrador
cuando ya ha hecho login
*/
class AdminController extends ControladorBase {

    public function viewAdmin() {
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'admin') {
            $datos = [];
            $this->view('admin', $datos);
        } else {
            echo 'No autorizado';
        }

    }


    public function viewAdminSongs() {

        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'admin') {
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

        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'admin') {
            
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
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'admin') {

            $modelo = new User();
            $user = $modelo->deleteById($_GET['id']);

            header ("Location: index.php?controller=Admin&action=viewAdminUsers");
        } else {
            echo 'No autorizado';
        }

    }

    public function changeAdminUser() {
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'admin') {

            $modelo = new User();
            $user = $modelo->updateValues($_GET['id'], '');

            header ("Location: index.php?controller=Admin&action=viewAdminUsers");
        } else {
            echo 'No autorizado';
        }

    }

    public function addAdminSong() {
        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->getType() == 'admin') {
            $model = new Song();
            $songExist = $model->findSong($_POST['autor'], $_POST['titulo']);
            if (!$songExist) {
                $model->saveNewSong($_POST['autor'], $_POST['titulo'], $_POST['grupo'], $_POST['album'], $_POST['year'], $_POST['tags'], $_POST['imageurl']);
            } else {
                echo "<script> alert('Ya existe esta canción') </script>";
            }
            $this->viewAdminSongs();
        } else {
            echo 'No autorizado';
        }
    }

}

?>