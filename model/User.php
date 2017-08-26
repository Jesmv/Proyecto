<?php
class User extends BaseEntity {

    private $id;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $nick;
    private $type;
    private $image; 
    
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
 
    public function setName($name) {
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
 
    public function setNick($nick) {
        $this->nick = $nick;
    }

    public function getType() {
        return $this->type;
    }
 
    public function setType($type) {
        $this->type = $type;
    }

    public function getImage() {
        return $this->image;
    }
 
    public function setImage($image) {
        $this->image = $image;
    }
    
    public function save(){
        $query="INSERT INTO user (name,surname,email,password,type,nick,image)
                VALUES('".$this->name."',
                       '".$this->surname."',
                       '".$this->email."',
                       '".$this->password."',
                       '".$this->type."',
                       '".$this->nick."',
                       '".$this->image."');";
        $save=$this->db()->query($query);
        return $save;
    }

    public function saveProfile($name, $surname, $email, $nick, $image){
        $this->setName($name);
        $this->setSurname($surname);
        $this->setEmail($email);
        $this->setNick($nick);
        $this->setImage($image);
        

        // antes de hacer la query tengo que guardar la imagen
        $imageFile = $this->saveImage();

        if($imageFile === false) {
            return false;
        }

        $this->setImage($imageFile);

        $query="UPDATE user set 
                name='".$this->name."',
                surname='".$this->surname."', 
                email='".$this->email."', 
                image='".$imageFile."'
                WHERE nick = '".$this->nick."'";

        $save=$this->db()->query($query);

        if ($save) {
            return $this;
        } else {
            return false;
        }
    }

    public function saveNewUser($email, $nick, $password){
        $this->setEmail($email);
        $this->setNick($nick);
        $this->setPassword($password);

        $query="INSERT INTO user (email, password, nick)
                VALUES('".$this->email."',
                       '".$this->password."',
                       '".$this->nick."');";
        $save=$this->db()->query($query);

        if ($save) {
            $list = $this->getBy("nick", $nick);

            $this->setName($list[0]->name);
            $this->setSurname($list[0]->surname);
            $this->setNick($list[0]->nick);
            $this->setEmail($list[0]->email);
            $this->setPassword($list[0]->password);
            $this->setImage($list[0]->image);
            $this->setType($list[0]->type);

            return $this;
        } else {
            return false;
        }
        
    }

    public function findUser($nick) {
        $list = $this->getBy("nick", $nick);

        If (empty($list)){
            return false;
        } else {
            return $list[0];
        }
    }

    public function newUser($nick, $email) {
        $list = $this->checkValues("nick", $nick, "email", $email);

        If ($list == null){
            return null;
        } else {
            return $list[0];
        }
        
    }

    /*Guarda la imagen en una carpeta. Primero comprueba que el campo no esté vacio. Lo hago comprobando si es el error 4, que indica que se encuentra vacio el input del file, si es así me devuelve true, ya que considero que se puede tener vacio porque no se quiera cambiar la imagen.. */
	private function saveImage() {
		if ($_FILES['image']['error']==4) {
			return $this->getImage();
		} else {
			/*En este if else se comprueba que la imagen se ha subido. Si es correcto creamos una variable */
			if (is_uploaded_file ($_FILES['image']['tmp_name'] )) {
				$fileName = $_FILES['image']['name'];
				$directoryName = "img/user/";
				$finalName = $directoryName.$fileName;

				/*Si la imagen es mayor de 500kb nos devolverá un error y no continuará*/
				if ($_FILES['image']['size'] > 500000) {
					echo "<script> alert('La imagen supera el tamaño. Máximo 500kb.') </script>";
					return false;
				} 
				
				/*En el caso de que no tuviesemos permisos no nos dejaria subir la foto y nos mostraría un error, en el caso de que todo fuese correcto, la imagen se guardaría en la carpeta de imágenes y se guarda en una sesión llamada nuevo Avatar para despues guardar la dirección en la base de datos.*/
				if (is_dir($directoryName)){ 
					$timeName = time();
					$fileName = $timeName."-".$fileName;
					$finalName = $directoryName.$fileName;
					move_uploaded_file ($_FILES['image']['tmp_name'],$finalName);
					return $finalName;
				} else {
					echo "<script> alert('Error al cargar la imagen2') </script>";
					return false;
				}
				
			} else {
				echo "<script> alert('Error al cargar la imagen 1.') </script>";
				return false;
			}
		}	

	}

 
}
?>