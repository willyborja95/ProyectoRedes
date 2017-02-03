<!doctype html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Aplicación Web para la Gestión de Reservas de Escenarios Deportivos</title>
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	
	<!--<script src="../js/bootstrap.min.js"></script>-->
   	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoFbDSXhlypb2RpEQRe_F7hSm7gizCG3A&callback=initMap">
    </script>

     	<link rel="stylesheet" type="text/css" href="../css/estilo.css">
</head>
<body>
	<header>
		<h2 id="titulo1">Aplicación Web para la Gestión de</h2>
		<h2 id="titulo2">Reservas de Escenarios Deportivos</h2>
	</header>
	<nav>
		<a href="../../index.html">Inicio</a>
		<a href="reservas.php">Consultas y Reservas</a>
		<a href="administrar.html">Administrar</a>
	</nav>

	<script>

	class Localizacion{
		constructor(callback){
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition((position)=>{
					this.latitude = position.coords.latitude;
					this.longitude = position.coords.longitude;

					callback();
				});
			}else{
					alert("Tu navegador no soporta geolocalización!!!")
			}
		}
	}
	function initMap(){
		const ubicacion= new Localizacion(()=>{

			const options={
				center:{
					lat: ubicacion.latitude,
					lng: ubicacion.longitude
				},
				zoom: 13
			}
			
			var map= new google.maps.Map(document.getElementById('map'),options);
			var aux=1;

			var myLatlng = new google.maps.LatLng('-3.9873210066570772','-79.20554637908936');
			var marker = new google.maps.Marker({
			    position: myLatlng,
			    title:"EL arroyito"
			    
			});

			// To add the marker to the map, call setMap();
			marker.setMap(map);

			var myLatlng = new google.maps.LatLng(-3.9990512645664453,-79.20709133148193);
			var marker1 = new google.maps.Marker({
			    position: myLatlng,
			    title:"El señor balón"
			});

			// To add the marker to the map, call setMap();
			marker1.setMap(map);

			var myLatlng = new google.maps.LatLng(-4.002476125742796,-79.21370029449463);
			var marker2 = new google.maps.Marker({
			    position: myLatlng,
			    title:"Centro de alto rendimiento"
			});

			// To add the marker to the map, call setMap();
			marker2.setMap(map);

			var myLatlng = new google.maps.LatLng(-3.9701448693805435,-79.2020058631897);
			var marker3 = new google.maps.Marker({
			    position: myLatlng,
			    title:"Centro deportivo Jipiro"
			});

			// To add the marker to the map, call setMap();
			marker3.setMap(map);			
			google.maps.event.addListener(marker, 'click', function(){
	            var popup = new google.maps.InfoWindow();
	            var note = marker.title;
	            popup.setContent(note);
	            popup.open(map, this);
	           
	            document.getElementById('nom').innerHTML='<b>Nombre:</b>'+note;
	            document.getElementById('abre').innerHTML='<b>Hora Apertura:</b> 10:00';
	            document.getElementById('cierre').innerHTML='<b>Hora Cierre:</b> 22:00';
	            document.getElementById('tel').innerHTML='<b>Telefono:</b> 2934586';
	            document.getElementById('canchas').innerHTML='<b>Canchas:</b>1';
	            aux=2;
		    });

			google.maps.event.addListener(marker1, 'click', function(){
	            var popup = new google.maps.InfoWindow();
	            var note = marker1.title;
	            popup.setContent(note);
	            popup.open(map, this);
	            
	            document.getElementById('nom').innerHTML='<b>Nombre:</b>'+note;
	            document.getElementById('abre').innerHTML='<b>Hora Apertura:</b> 06:00';
	            document.getElementById('cierre').innerHTML='<b>Hora Cierre:</b> 18:00';
	            document.getElementById('tel').innerHTML='<b>Telefono:</b> 2748596';
	            document.getElementById('canchas').innerHTML='<b>Canchas:</b>3';
	            aux=1;
		    });

		    google.maps.event.addListener(marker2, 'click', function(){
	            var popup = new google.maps.InfoWindow();
	            var note = marker2.title;
	            popup.setContent(note);
	            popup.open(map, this);
	           
	            document.getElementById('nom').innerHTML='<b>Nombre:</b>'+note;
	            document.getElementById('abre').innerHTML='<b>Hora Apertura:</b> 06:00';
	            document.getElementById('cierre').innerHTML='<b>Hora Cierre:</b> 20:00';
	            document.getElementById('tel').innerHTML='<b>Telefono:</b> 2739485';
	            document.getElementById('canchas').innerHTML='<b>Canchas:</b>4';
	            aux=3;
		    });

		    google.maps.event.addListener(marker3, 'click', function(){
	            var popup = new google.maps.InfoWindow();
	            var note = marker3.title;
	            popup.setContent(note);
	            popup.open(map, this);
	            
	            document.getElementById('nom').innerHTML='<b>Nombre:</b>'+note;
	            document.getElementById('abre').innerHTML='<b>Hora Apertura:</b> 10:00';
	            document.getElementById('cierre').innerHTML='<b>Hora Cierre:</b> 14:00';
	            document.getElementById('tel').innerHTML='<b>Telefono:</b> 2637463';
	            document.getElementById('canchas').innerHTML='<b>Canchas:</b> 5';
	            aux=4;
		    });
		});

		
	}
	</script>

	<section id="contenedor3">

  		<section id="info" class="col-xs-6">
  		<h3><b>Complejos Deportivos Disponibles</b></h3>
  		<br><br>
  		<p id="nom" ><b>Nombre:</b></p>
  		<p id="abre"><b>Hora Apertura:</b></p>
  		<p id="cierre"><b>Hora Cierre:</b></p>
  		<p id="tel"><b>Telefono:</b></p>
  		<p id="canchas"><b>Canchas:</b></p>
  		<br><br>
  		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" style="background: #ef5350; border: 0">
  		Verificar Disponibilidad
  		</button>
  		</section>
		<section  class="col-xs-6" >
			<section id="map" ></section>
		</section>
	
	</section>

	<main>
	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Reserva</h4>
			</div>
			<div class="modal-body">
			<table class="table table-hover">
				<thead>
					<tr>
					  <td></td>
					  <th>No. Can</th>
					  <th>Ancho</th>
					  <th>Largo</th>
					  <th>Material</th>
					  <th>Categoria</th>
					  <th>Tribuna</th>
					  <th>Aforo</th>
					  <th>Precio</th>
					  <th>Tiempo</th>
					</tr>
				</thead>
				<tbody>	

				<?php
					require_once '../../persistencia/Complejos.php';
					$resComplejos = new Complejos();

					$resultado = $resComplejos->canchas(rand(1,4));
					$cont=0;

					while ($line = mysql_fetch_array($resultado)) {
						$cont=$cont+1;
				?>
			
				
					<tr>
				  	  <td id="add" data-target="#modal2" type="button"  data-toggle="modal" data-dismiss="modal" class="close">
				  	  	<img src="../Image/plus.png">
				  	  </td>
					  <td><?php echo $cont?></td>
					  <td><?php echo $line['ancho'];?></td>
					  <td><?php echo $line['largo'];?></td>
					  <td><?php echo utf8_decode($line['material']);?></td>
					  <td><?php echo utf8_decode($line['categoria']);?></td>
					  <td><?php echo $line['tieneTribuna'];?></td>
					  <td><?php echo $line['aforoTribuna'];?></td>
					  <td><?php echo $line['largo'];?></td>
					</tr>
					
				<?php
					}
				?>
				
					 
				  </tbody>
				</table>		

			</div>


			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal" >Close</button>
			</div>

		  </div>
		</div>
	  </div>

	</div>
	</main>

	<main>
	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="modal2" role="dialog">
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h3 class="modal-title">Para registrar la reserva, por favor ingrese:</h3>
			</div>
			<div class="modal-body">
				<br>
				<form class="form-horizontal">
				    
				    <div class="form-group">
				        <label class="control-label col-xs-2">Nombre:</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" placeholder="Willian Alexander
">
				        </div>
				    </div>
				    <div class="form-group">
				        <label class="control-label col-xs-2">Apellido:</label>
				        <div class="col-xs-5">
				            <input type="text" class="form-control" placeholder="Borja Zárate
">
				        </div>
				    </div>
				    <div class="form-group">
				        <label class="control-label col-xs-2">Email:</label>
				        <div class="col-xs-5">
				            <input type="email" class="form-control" id="inputEmail" placeholder="waborja@utpl.edu.ec
">
				        </div>
    				</div>
				    <div class="form-group">
				        <label class="control-label col-xs-2" >Fecha Inicio:</label>
				        <div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="19/">
				        </div>
				        	<div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="11/">
				        </div>
				        	<div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="2017">
				        </div>
				        	<div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="18:">
				        </div>
				        		<div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="00">
				        </div>
				    </div>
					    <div class="form-group">
				        <label class="control-label col-xs-2" >Fecha Fin:</label>
				        <div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="19/">
				        </div>
				        	<div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="11/">
				        </div>
				        	<div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="2017">
				        </div>
				        	<div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="20:">
				        </div>
				        	<div class="col-xs-2">
				            <input type="tel" class="form-control" placeholder="30">
				        </div>
				    </div>
				</form>
				

			</div>


			<div class="modal-footer">

			  <button type="button" class="btn btn-default" data-target="#modal3" type="button"  data-toggle="modal" data-dismiss="modal" class="close" style="color: #fff; background: #ef5350; border: 0" data-dismiss="modal">Guardar</button>
			</div>

		  </div>
		</div>
	  </div>

	</div>
	</main>

		<main>
	<div class="container">
	  <!-- Modal -->
	  <div class="modal fade" id="modal3" role="dialog">
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h2>Su reserva se ha guardado satisfactoriamente</h2>
			</div>
			<div class="modal-body">
				<br>
				<img src="../Image/checked.png" >	
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default"  data-dismiss="modal" >Ok</button>
			</div>

		  </div>
		</div>
	  </div>

	</div>
	</main>
	<footer>Derechos reservados UTPL, by <a href="">@willy</a></footer>
	
</body>
</html>