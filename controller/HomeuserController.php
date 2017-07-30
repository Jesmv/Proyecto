<?php


/*
Controlador para la pagina principal de usuario
cuando ya ha hecho login
*/
class HomeuserController extends ControladorBase {

    public function viewHome() {

        $usermodel = new User();

        $datos = [
            'title' => 'User list',
            'user' => $usermodel->getById(1),
            'date' => date("l")
        ];

        $this->view('homeuser', $datos);

    }

    public function ajaxSongs() {
        $songModel = new Song();
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($songModel->getAll());
    }


}

?>