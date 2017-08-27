<?php


/*
Controlador para la pagina principal de usuario
cuando ya ha hecho login
*/
class HomeuserController extends ControladorBase {

    public function viewHome() {

        $usermodel = new User();
        $likesModel = new Likes();

        $datos = [
            'title' => 'User list',
            'user' => $_SESSION['user'],
            'likes' => $likesModel->findUserLikes($_SESSION['user']->getId()),
            'date' => date("l")
        ];

        $this->view('homeuser', $datos);

    }

    public function ajaxSongs() {
        $songModel = new Song();
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($songModel->getAll());
    }

    public function ajaxLikeSong() {
        $likesModel = new Likes();
        $userid = $_SESSION['user']->getId();
        $songid = $_GET['id'];

        $likesModel->saveNewLike($userid, $songid);

        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode([]);
    }


}

?>