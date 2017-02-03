<?php

require_once 'conexion.php';
$conn = new conexion('localhost', 'root', '', 'awged');
$conn->connect();
$nombres = $_POST['txtNombres'];
$apellidos = $_POST['txtApellidos'];
$email = $_POST['txtEmail'];
$password = $_POST['txtPassword'];
$confirmacionPassword = $_POST['txtConfirmacionPassword'];
echo $nombres;

if(mysql_query("INSERT INTO propietario (nombres, apellidos, email, password) VALUES ( '$nombres', '$apellidos', '$email', '$password')")){
	echo "nuevo registro agregado";
}else{
	echo "Error".mysql_error();
}


/*
while ($row = mysql_fetch_array($result)) {
	echo printf('%s\n', $row['apellidos']);
}
*/

?>