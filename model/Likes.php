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
        $query=$this->db()->query("SELECT idsong, count(*) as count FROM likes WHERE iduser='$idUser' GROUP BY idsong ORDER BY count(*) DESC ");
        
        // ahora hay que crear un array que por cada posicion contenga la cancion y el numero de veces que tiene like
        $songModel = new Song();
        $songslikes = [];
        while ( $row = $query->fetch_object() ) {
            array_push($songslikes, [ 'song' => $songModel->getById($row->idsong), 'count' => $row->count] );
        }
        return $songslikes;
    }

}