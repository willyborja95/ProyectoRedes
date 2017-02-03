<?php

require_once 'conexion.php';
$conn = new conexion('localhost', 'root', '', 'awged');
$conn->connect();
$codigo = $_POST['txtCodigo'];
$nombres = $_POST['txtNombres'];
$descripcion = $_POST['txtDescripcion'];
$latitud = $_POST['txtLatitud'];
$longitud = $_POST['txtLongitud'];
$horaInicio = $_POST['txtHoraInicio'];
$horaFin = $_POST['txtHoraFin'];
$telefono = $_POST['txtTelefono'];
$celular = $_POST['txtCelular'];

echo $nombres;

if(mysql_query("UPDATE complejo SET nombres='$nombres', descripcion='$descripcion', horaInicio='$horaInicio', horaFin='$horaFin', latitud='$latitud', longitud='$longitud', numeroCelular='$celular', numeroTelefono='$telefono' WHERE codigo=1")){
	echo "Los cambios se han almacenado exitosamente";
}else{
	echo "No se ha guardado los cambios. Por favor, intentelo nuevamente<br>".mysql_error();
}