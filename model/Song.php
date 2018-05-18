<?php
class Song extends BaseEntity {

    private $id;
    private $title;
    private $author;
    private $file;
    private $image;

     
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

    public function getGroup() {
        return $this->group;
    }
 
    public function setGroup($group) {
        $this->group = $group;
    }

    public function getYear() {
        return $this->year;
    }
 
    public function setYear($year) {
        $this->year = $year;
    }

    public function getFile() {
        return $this->file;
    }
 
    public function setFile($file) {
        $this->file = $file;
    }

    public function getImage() {
        return $this->image;
    }
 
    public function setImage($image) {
        $this->image = $image;
    }

    public function saveNewSong($author, $title, $group, $album, $year, $tags) {
        // guardar el archivo de la cancion
        $filename = $this->saveFile();

        // guardar la imagen de la cancion
        $imageurl = $this->saveImage();

       

        // si no se ha podido subir el fichero de la cancion no se hace nada mas
        if(!$filename) {
            echo "<script> alert('No se ha podido subir el fichero de la canción') </script>";
            return false;
        }

        if($imageurl == '') {
            $query="INSERT INTO song (`author`, `title`, `group`, `album`, `year`, `file`)
                VALUES('".$author."',
                       '".$title."',
                       '".$group."',
                       '".$album."',
                       '".$year."',
                       '".$filename."');";
        } else {
            $query="INSERT INTO song (`author`, `title`, `group`, `album`, `year`, `file`, `image`)
                VALUES('".$author."',
                       '".$title."',
                       '".$group."',
                       '".$album."',
                       '".$year."',
                       '".$filename."',
                       '".$imageurl."');";
        }
                       
        $save=$this->db()->query($query);

        if ($save) {
            $song = $this->findSong($author, $title);

            // ahora sacamos los tags
            $tagArray = explode(',', $tags);
            $tagModel = new Tag();
            foreach ($tagArray as $tag) {

                // buscar o guardar cada tag en bd
                $tagBD = $tagModel->findTag($tag);
                if(!$tagBD){
                    $tagBD = $tagModel->saveNewTag($tag);
                }

                // por cada tag guardamos la relacion con la song
                $query="INSERT INTO songtags (idsong, idtag)
                        VALUES('".$song->getId()."',
                            '".$tagBD->getId()."');";
                $this->db()->query($query);
            }
            return $song;
        } else {
            echo "<script> alert('No se ha podido guardar la cancion') </script>";
            return false;
        }
        
    }

    public function findSong($author, $title) {
        $query=$this->db()->query("SELECT * FROM song WHERE title='$title' and author='$author'");
        $row = $query->fetch_object();
        If (empty($row)){
            return false;
        } else {
            return $this->createSong($row);
        }
    }

    public function findTagSongs($tag){
// aqui se buscan todas las canciones que tienen un tag
        $query=$this->db()->query("SELECT song.* FROM song, tags, songtags WHERE tag like '%$tag%' and song.id = songtags.idsong and songtags.idtag = tags.id");
    
        $songs = [];
        while ( $row = $query->fetch_object() ) {
            array_push($songs, $this->createSong($row));
        }

        return $songs;
    }

    public function findAllSongs()
    {
        $query=$this->db()->query("SELECT * FROM song");
         $songs = [];
        while ( $row = $query->fetch_object() ) {
            array_push($songs, $this->createSong($row));
        }
        return $songs;
    }

    public function createSong($row) {
        // crea un objeto Song con los datos sacados de la base de datos
        $song = new Song();
        $song->setId($row->id);
        $song->setTitle($row->title);
        $song->setAuthor($row->author);
        $song->setGroup($row->group);
        $song->setYear($row->year);
        $song->setFile($row->file);
        $song->setImage($row->image);
        return $song;
    }

    /*Guarda la cancion en una carpeta. Primero comprueba que el campo no esté vacio. Lo hago comprobando si es el error 4, que indica que se encuentra vacio el input del file, si es así me devuelve true, ya que considero que se puede tener vacio porque no se quiera cambiar la imagen.. */
	private function saveFile() {
		if ($_FILES['song']['error']==4) {
			return $this->getFile();
		} else {
			/*En este if else se comprueba que la cancion se ha subido. Si es correcto creamos una variable */
			if (is_uploaded_file ($_FILES['song']['tmp_name'] )) {
				$fileName = $_FILES['song']['name'];
				$directoryName = "songs/";
				$finalName = $directoryName.$fileName;
				
				/*En el caso de que no tuviesemos permisos no nos dejaria subir la cancion y nos mostraría un error, en el caso de que todo fuese correcto, la imagen se guardaría en la carpeta de imágenes y se guarda en una sesión llamada nuevo Avatar para despues guardar la dirección en la base de datos.*/
				if (is_dir($directoryName)){ 
					$timeName = time();
					$fileName = $timeName."-".$fileName;
					$finalName = $directoryName.$fileName;
					move_uploaded_file ($_FILES['song']['tmp_name'],$finalName);
					return $finalName;
				} else {
					echo "<script> alert('Error al cargar la cancion. No existe directorio') </script>";
					return false;
				}
				
			} else {
				echo "<script> alert('Error al cargar la cancion. Archivo no subido') </script>";
				return false;
			}
		}	

    }
    

    private function saveImage() {
		if ($_FILES['image']['error']==4) {
			return $this->getImage();
		} else {
			/*En este if else se comprueba que la imagen se ha subido. Si es correcto creamos una variable */
			if (is_uploaded_file ($_FILES['image']['tmp_name'] )) {
				$fileName = $_FILES['image']['name'];
				$directoryName = "img/song/";
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
					echo "<script> alert('Error al cargar la imagen. No existe directory') </script>";
					return false;
				}
				
			} else {
				echo "<script> alert('Error al cargar la imagen 1. Imagen no subida') </script>";
				return false;
			}
		}	

	}
 
}
?>