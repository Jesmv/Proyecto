<?php
class Song extends BaseEntity {

    private $id;
    private $title;
    private $author;
    private $file;

     
    public function __construct() {
        $table="song";
        parent::__construct($table);
    }
     
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
     
    public function getTitle() {
        return $this->title;
    }
 
    public function setTitle($title) {
        $this->title = $title;
    }
 
    public function getAuthor() {
        return $this->author;
    }
 
    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getFile() {
        return $this->file;
    }
 
    public function setFile($file) {
        $this->file = $file;
    }
 
    /*public function save(){
        $query="INSERT INTO usuarios (name,surname,email,password,type,nick)
                VALUES('".$this->name."',
                       '".$this->surname."',
                       '".$this->email."',
                       '".$this->password."',
                       '".$this->type."',
                       '".$this->nick."');";
        $save=$this->db()->query($query);
        return $save;
    }*/
 
}
?>