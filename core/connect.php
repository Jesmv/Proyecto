<?php 
	class Connect {
		
		private $driver;
		private $host;
		private $user;
		private $pass;
		private $database;
		private $charset;

		public function construct(){
			$db_conf = require_once 'config/database.php';
			$this->driver = $db_conf["driver"];
			$this->host = $db_conf["host"];
			$this->user = $db_conf["user"];
			$this->pass = $db_conf["pass"];
			$this->database = $db_conf["database"];
			$this->charset = $db_conf["charset"];
		}

		public function conexion() {

            $con=new mysqli($this->host, $this->user, $this->pass, $this->database);
            $con->query("SET NAMES '".$this->charset."'");
         
       		return $con;
		}
	}
 ?>