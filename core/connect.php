<?php 

// en esta variable se guarda la conexion a base de datos
$conexionGlobal = null;

class Connect {
	
	private $driver;
	private $host;
	private $user;
	private $pass;
	private $database;
	private $charset;

	public function __construct(){
		$db_conf = require_once 'config/database.php';
		$this->driver = $db_conf["driver"];
		$this->host = $db_conf["host"];
		$this->user = $db_conf["user"];
		$this->pass = $db_conf["pass"];
		$this->database = $db_conf["database"];
		$this->charset = $db_conf["charset"];
	}

	public function conexion() {
		global $conexionGlobal;
		// Si ya habia una conexion abierta, se utiliza esa
		if($conexionGlobal) {
			return $conexionGlobal;
		}

		$conexionGlobal=new mysqli($this->host, $this->user, $this->pass, $this->database);
		$conexionGlobal->query("SET NAMES '".$this->charset."'");
		return $conexionGlobal;
	}
}
 ?>