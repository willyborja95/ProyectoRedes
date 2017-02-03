<?php


class Complejos{
	function obtener(){
		require('conexion.php');
		$conn = new conexion('localhost', 'root', '', 'awged');
		$conn->connect();

		$query = 'SELECT * FROM complejos';
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

		return $result;
	}

	function canchas($code){
		require('conexion.php');
		$conn = new conexion('localhost', 'root', '', 'awged');
		$conn->connect();

		$query = "SELECT * FROM awged.cancha where codigoComplejo=$code;";
		$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

		return $result;
	}
	
}

?>