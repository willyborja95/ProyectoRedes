<?php

class conexion{

	public $host;
	public $user;
	public $pass;
	public $database;

	public function __construct($host, $user, $pass, $database){
		$this->setHost($host);
		$this->setUser($user);
		$this->setPass($pass);
		$this->setDatabase($database);
	}

	public function setHost($host){
		$this->host = $host;
	}

	public function setUser($user){
		$this->user = $user;
	}

	public function setPass($pass){
		$this->pass = $pass;
	}

	public function setDatabase($database){
		$this->database = $database;
	}

	public function connect(){
		$con = mysql_connect($this->host, $this->user, $this->pass) or die("Error al conectarse con la base de datos");
		mysql_select_db($this->database, $con) or die ("Error de conexion a la base de datos");

		return $con;
	}
	//new
	function cerraConexion(){
		mysql_close($this->conexion);
	}
}

?>