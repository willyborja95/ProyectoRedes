<?php

include ("conexion.php");

	//if(isset($_POST['usuario']) && !empty($_POST['usuario'])) &&
	$conexion = mysql_connect($host, $user, $pw) or die("problema");
	mysql_select_db($db, $conexion) or die("problema");



?>