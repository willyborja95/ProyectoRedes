<?php

	class Persona{

		private $nombre;
		private $apellido;

		public function guardar($nombre, $apellido){
			$this->nombre=$nombre;
			$this->apellido = $apellido;
		}

		public function getNombre(){
			return $this->nombre;
		}
	}

	$persona = new Persona();
	$persona->guardar("Carlos", "Mosquera");
	$persona->guardar("Willian", "Borja");
	echo $persona->getNombre();
?>