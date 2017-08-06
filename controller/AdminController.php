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
            $datos = [];
            $this->view('adminSong', $datos);
        } else {
            echo 'No autorizado';
        }

    }

    public function viewAdminUsers() {

        if ($_SESSION['sesionIniciada'] == true && $_SESSION['user']->type == 'admin') {
            $datos = [];
            $this->view('adminusers', $datos);
        } else {
            echo 'No autorizado';
        }

    }

}

?>