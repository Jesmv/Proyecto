<?php
class Log extends BaseEntity {

    private $id;

    public function __construct() {
        $table="log";
        parent::__construct($table);
    }

    public function saveNewLog($idUser, $idSong) {
        $query="INSERT INTO log (iduser, idsong) VALUES('".$idUser."', '".$idSong."');";      
        $save=$this->db()->query($query);
    }

    public function findUserLog($idUser) {
        // ordenamos por id descendiente para coger las mas recientes primero
        $query=$this->db()->query("SELECT idsong FROM log WHERE iduser='$idUser' ORDER BY id desc");
        $songModel = new Song();
        $songs = [];
        while ( $row = $query->fetch_object() ) {
            array_push($songs, $songModel->getById($row->idsong));
        }
        return $songs;
    }

}