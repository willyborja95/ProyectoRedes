<!doctype html>


<?php
echo $_SESSION['email'];
/*
session_start();
if(!$_SESSION['usuario']){
	header("Location:administrar.html");
}
*/
?>

<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Aplicación Web para la Gestión de Reservas de Escenarios Deportivos</title>
		<meta name="description" content="">
		<link rel="stylesheet" type="text/css" href="../css/estilo.css">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		
	</head>
	<body>
	
		<header>
			<h2 id="titulo1">Aplicación Web para la Gestión de</h2>
			<h2 id="titulo2">Reservas de Escenarios Deportivos</h2>
		</header>
		<nav>
			<a href="Ad">Administrar</a>
			<a href="reservas.html">Reservas</a>
			<a href="contactos.html">Cuenta</a>
		</nav>
		
		<section class="contenedor2">

			<section class="contenedor1">
			<table class="table table-hover">
				<thead>
					<tr>
					  <th>Código</th>
					  <th>Nombre</th>
					  <th>Descripción</th>
					</tr>
				</thead>
				<tbody>	
				<?php
					require_once '../../persistencia/Complejos.php';
					$resComplejos = new Complejos();
					$resultado = $resComplejos->obtener();
					while ($line = mysql_fetch_array($resultado)) {
				?>
			
				
					<tr>
				  
					  <td><?php echo $line['codigo'];?></td>
					  <td><?php echo $line['nombres'];?></td>
					  <td><?php echo $line['descripcion'];?></td>
					</tr>
					
				<?php
					}
				?>
				
					 
				  </tbody>
				</table>
				
				<form class="formulario" action="http://localhost/willianborja/ProyectoRedes/web/persistencia/UpdateComplejos.php" method=post name="formulario">
					<section class="linea">
						<section class="etiqueta">Código:</section>
						<section class="etiqueta"><input name="txtCodigo" type="text" required></section>
						<section class="etiqueta">Nombres:</section>
						<section class="etiqueta"><input name="txtNombres" type="text" required></section>
					</section>
					<section class="linea">
						<section class="etiqueta">Descripción:</section>
						<section class="etiqueta"><input name="txtDescripcion" type="text" required></section>
					</section>
					<section class="linea">
						<section class="etiqueta">Latitud:</section>
						<section class="etiqueta"><input name="txtLatitud" type="text" required></section>
						<section class="etiqueta">Longitud:</section>
						<section class="etiqueta"><input name="txtLongitud" type="text" required></section>
					</section>
					<section class="linea">
						<section class="etiqueta">Hora inicio:</section>
						<section class="etiqueta"><input name="txtHoraInicio" type="time" required></section>
						<section class="etiqueta">Hora fin:</section>
						<section class="etiqueta"><input name="txtHoraFin" type="time" required></section>
					</section>
					<section class="linea">
						<section class="etiqueta">Teléfono:</section>
						<section class="etiqueta"><input name="txtTelefono" type="text" required></section>
						<section class="etiqueta">Celular:</section>
						<section class="etiqueta"><input name="txtCelular" type="datetime" required></section>
					</section>
					<button class="boton" type="submit">Guardar cambios</button>
				</form>	
				
			</section>
			<section class="contenedor1">
			
			</section>
		</section>	
		
		<main>
			
		</main>
		
		<footer>Derechos reservados , by <a href="">@willy</a></footer>
		
	</body>
</html>