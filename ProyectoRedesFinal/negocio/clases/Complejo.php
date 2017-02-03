<?php

	class Complejo{

		private $codigo;
		private $nombre;
		private $descripcion;
		private $latitud;
		private $longitud;
		private $horaInicio;
		private $horaFin;
		private $numeroTelefono;

		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}

		public function getCodigo(){
			return $this->codigo;
		}

		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

		public function getDescripcion(){
			return $this->descripcion;
		}

		public function setLatitud($latitud){
			$this->latitud = $latitud;
		}

		public function getLatitud(){
			return $this->latitud;
		}

		public function setLongitud($longitud){
			$this->longitud = $longitud;
		}

		public function getLongitud(){
			return $this->longitud;
		}

		public function setHoraInicio($horaInicio){
			$this->horaInicio = $horaInicio;
		}

		public function getHoraInicio(){
			return $this->horaInicio;
		}

		public function setHoraFin($horaFin){
			$this->horaFin = $horaFin;
		}

		public function getHoraFin(){
			return $this->horaFin;
		}

		public function setNumeroTelefono($numeroTelefono){
			$this->numeroTelefono = $numeroTelefono;
		}

		public function getNumeroTelefono(){
			return $this->numeroTelefono;
		}


	}

	$complejo = new Complejo();
	$complejo->setCodigo(100);
	$complejo->setNombre("La Merced");
	$complejo->setDescripcion("Estamos en Nono");
	$complejo->setLatitud("-9.8565858855");
	$complejo->setLongitud("5.5488488748");
	$complejo->setHoraInicio("08:30");
	$complejo->setHoraFin("20:30");
	$complejo->setNumeroTelefono("2786277");
	echo $complejo->getCodigo()." ".$complejo->getNombre()." ".$complejo->getDescripcion()." ".$complejo->getLatitud()." ".$complejo->getLongitud()." ".$complejo->getHoraInicio()." ".$complejo->getHoraFin()." ".$complejo->getNumeroTelefono()."<br>";


?>