<?php 
	class BaseEntity {

		private $table;
		private $db;
		private $connect;

		public function __construct($table) {
			$this->table = (string) $table;

			require_once 'connect.php';
			$this->connect = new Connect();
			$this->db = $this->connect->conexion();
		}

		public function getConnect() {
			return $this->connect;
		}

		public function db() {
			return $this->db;
		}

		public function getAll(){
			$query = $this->db ->query("SELECT * FROM $this->table ORDER BY id DESC");
			$result = [];
			while ( $row = $query->fetch_object() ) {
				$result[] = $row;
			}
			return $result;
		}

		public function getById($id){
        $query=$this->db->query("SELECT * FROM $this->table WHERE id=$id");
		$resultSet=[];
        if($row = $query->fetch_object()) {
           $resultSet=$row;
        }
         
        return $resultSet;
    }

    public function getBy($column,$value){
        $query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
		
		$resultSet=[];

        while($row = $query->fetch_object()) {
           $resultSet[]=$row;
        }
         
        return $resultSet;
    }

    public function deleteById($id){
        $query=$this->db->query("DELETE FROM $this->table WHERE id=$id"); 
        return $query;
    }

    public function deleteBy($column,$value){
        $query=$this->db->query("DELETE FROM $this->table WHERE $column='$value'"); 
        return $query;
    }

    //Más métodos para hacer operaciones con la bd.
	}
 ?>