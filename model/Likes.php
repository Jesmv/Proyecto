<?php
class Likes extends BaseEntity {

    private $id;

    public function __construct() {
        $table="likes";
        parent::__construct($table);
    }

    public function saveNewLike($idUser, $idSong) {
        $query="INSERT INTO likes (iduser, idsong) VALUES('".$idUser."', '".$idSong."');";      
        $save=$this->db()->query($query);
    }

    public function findUserLikes($idUser) {
        $likes = $this->getBy('iduser', $idUser);
        $songModel = new Song();
        $songs = [];
        foreach ($likes as $like) {
            array_push($songs, $songModel->getById($like->idsong));
        }
        return $songs;
    }

}