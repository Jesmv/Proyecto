<?php


/*
Controlador para la pagina principal de usuario
cuando ya ha hecho login
*/
class HomeuserController extends ControladorBase {

    public function viewHome() {

        $usermodel = new User();
        $likesModel = new Likes();
        $logModel = new Log();
        $tagModel = new Tag();

        // para recomendar, buscamos los tags escuchados y luego buscamos canciones al azar que tengan esos tags
        $songlogs = $logModel->findUserLog($_SESSION['user']->getId());

        
        $todoslostags = [];
        foreach($songlogs as $song) {
            $songtags = $tagModel->findTagSong($song->id);
            $todoslostags = array_merge($todoslostags, $songtags);
        }

        if (!empty($todoslostags)) {
            // ahora cogemos 3 tags al azar y buscamos canciones con esos tags
            shuffle($todoslostags);
            $tag1 = $todoslostags[0]->getTag();
            shuffle($todoslostags);
            $tag2 = $todoslostags[0]->getTag();
            shuffle($todoslostags);
            $tag3 = $todoslostags[0]->getTag();
            $songModel = new Song();
        // y de todos las canciones para un tag, cogemos una al azar
            $songs = $songModel->findTagSongs($tag1);
            shuffle($songs);
            $recomen1 = $songs[0];
            $songs = $songModel->findTagSongs($tag2);
            shuffle($songs);
            $recomen2 = $songs[0];
            $songs = $songModel->findTagSongs($tag3);
            shuffle($songs);
            $recomen3 = $songs[0];
        } else {
            // cuando no hay tags que el usuario haya escuchada,
            // simplemente seleccionar 3 al azar
            $songModel = new Song();
            $songs = $songModel->findAllSongs();
            shuffle($songs);
            $recomen1 = $songs[0];
            shuffle($songs);
            $recomen2 = $songs[0];
            shuffle($songs);
            $recomen3 = $songs[0];

            $tag1= '';
            $tag2= '';
            $tag3 = '';
        }
        
        $noDuplicate = [];

        //Comprueba que no se repita una canción en logs
        foreach($songlogs as $log) {
            If(!in_array($log, $noDuplicate)){
                $noDuplicate[] = $log;
            }
        }

        $datos = [
            'title' => 'User list',
            'user' => $_SESSION['user'],
            'likes' => $likesModel->findUserLikes($_SESSION['user']->getId()),
            'logs' => $noDuplicate,
            'date' => date("l"),
            'recomen1' => $recomen1,
            'recomen2' => $recomen2,
            'recomen3' => $recomen3,
            'tag1' => $tag1,
            'tag2' => $tag2,
            'tag3' => $tag3,
        
        ];

        $this->view('homeuser', $datos);

    }

    public function ajaxSongs() {
        $songModel = new Song();
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($songModel->getAll());
    }

    public function ajaxSongById()   {
        $songModel = new Song();
        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode($songModel->getById($_GET['id']));
    }

    public function ajaxLikeSong() {
        $likesModel = new Likes();
        $userid = $_SESSION['user']->getId();
        $songid = $_GET['id'];

        $likesModel->saveNewLike($userid, $songid);

        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode([]);
    }

    public function ajaxLogSong() { // guardar que se escuha una canción
        $logModel = new Log();
        $userid = $_SESSION['user']->getId();
        $songid = $_GET['id'];

        $logModel->saveNewLog($userid, $songid);

        header('Content-Type: application/json; charset=UTF-8');
        echo json_encode([]);
    }


}

?>