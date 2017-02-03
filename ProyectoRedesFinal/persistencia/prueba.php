<?php

require_once 'conexion.php';

$conn = new conexion('localhost', 'root', '', 'awged');
$conn->connect();
$result = mysql_query('SELECT * FROM propietario');

while ($row = mysql_fetch_array($result)) {
	echo printf('%s\n', $row['apellidos']);
}

?>