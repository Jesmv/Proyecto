<?php 
	class BaseEntity {

		private $table;
		private $db;
		private $connect;

		public function construct($table) {
			$this->table = (string) $table;

			require_once 'connect.php';
			$this->connect = new Connect();
			$this->db = $this->conectar->conexion();
		}

		public function getConnect() {
			return $this->connect;
		}

		public function db() {
			return $this->db;
		}
	}
 ?>