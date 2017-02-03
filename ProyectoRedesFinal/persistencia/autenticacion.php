<?php

session_start();
require('conexion.php');

$conn = new conexion('localhost', 'root', '', 'awged');
$conn->connect();
$usuario = $_POST['txtUsuario'];
$password = $_POST['txtPassword'];
$sqlQuery = mysql_query("SELECT * FROM propietario WHERE email='$usuario' AND password='$password'");

if($resultado = mysql_fetch_array($sqlQuery)){
	$_SESSION["codigo"] = $resultado["codigo"];
	$_SESSION["email"] = $resultado["email"];
	header("Location:../vista/Internas/mainPropietario.php");
}else{
	echo "Error".mysql_error();
}

?>