<?php
class Persona{
    private $nombre;
    private $apellido;
    private $edad;
    private $sexo;
    private $direccion;

public function Persona() {}

public function getnombre() {return $this->nombre;}
public function getapellido() {return $this->apellido;}
public function getEdad() {return $this->edad;}
public function getsexo() {return $this->sexo;}
public function getdireccion() {return $this->direccion;}

public function setnombre($nomb){return $this-> nombre=$nomb; }
public function setapellido($apell){return $this-> apellido=$apell;}
public function setedad($ed){return $this-> edad=$ed; }
public function setsexo($sex){return $this-> sexo=$sex; }
public function setdireccion($dir){return $this-> direccion=$dir; }


}
?>