<?php

    class Propietario{
    
        private $codigo;
        private $nombres;
        private $apellidos;
        private $email;
        private $password;
		
		function __construct($codigo, $nombres, $apellidos, $email, $password){
			$this->setCodigo($codigo);
			$this->setNombres($nombres);
			$this->setApellidos($apellidos);
			$this->setEmail($email);
			$this->setPassword($password);
			
		}
        
        public function setCodigo($codigo){
            $this->codigo = $codigo;setCodigo()
        }
        
        public function getCodigo(){
            return $this->codigo;
            
        }

        public function setNombres($nombres){
            $this->nombres = $nombres;
        }
        
        public function getNombres(){
            return $this->nombres;
            
        }

        public function setApellidos($apellidos){
            $this->apellidos = $apellidos;
        }
        
        public function getApellidos(){
            return $this->apellidos;
            
        }

        public function setEmail($email){
            $this->email = $email;
        }
        
        public function getEmail(){
            return $this->email;
            
        }

        public function setPassword($password){
            $this->password = $password;
        }
        
        public function getPassword(){
            return $this->password;
        }
    }

    $prop = new Propietario();
    $prop->setCodigo(901);
    $prop->setNombres("Willian");
    $prop->setApellidos("Borja");
    $prop->setEmail("waborja@utpl.edu.ec");
    $prop->setPassword("12345");




    echo $prop->getCodigo()." ".$prop->getNombres()." ".$prop->getApellidos()." ".$prop->getEmail()." ".$prop->getPassword();
    
?>