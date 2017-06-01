<?php
class User extends BaseEntity {

    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $nick;
    private $type;
     
    public function __construct() {
        $table="user";
        parent::__construct($table);
    }
     
    public function getId() {
        return $this->id;
    }
 
    public function setId($id) {
        $this->id = $id;
    }
     
    public function getName() {
        return $this->name;
    }
 
    public function setNombre($name) {
        $this->name = $name;
    }
 
    public function getSurname() {
        return $this->surname;
    }
 
    public function setSurname($surname) {
        $this->surname = $surname;
    }
 
    public function getEmail() {
        return $this->email;
    }
 
    public function setEmail($email) {
        $this->email = $email;
    }
 
    public function getPassword() {
        return $this->password;
    }
 
    public function setPassword($password) {
        $this->password = $password;
    }

    public function getNick() {
        return $this->nick;
    }
 
    public function setNick($password) {
        $this->nick = $nick;
    }

    public function getType() {
        return $this->type;
    }
 
    public function setType($type) {
        $this->type = $type;
    }
 
    public function save(){
        $query="INSERT INTO usuarios (name,surname,email,password,type,nick)
                VALUES('".$this->name."',
                       '".$this->surname."',
                       '".$this->email."',
                       '".$this->password."',
                       '".$this->type."',
                       '".$this->nick."');";
        $save=$this->db()->query($query);
        return $save;
    }

    public function findUser($nick) {
        $list = $this->getBy("nick", $nick);

        return $list[0];
    }
 
}
?>