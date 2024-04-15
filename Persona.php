<?php
class Persona{
    private $nombre;
    private $apellido;
    private $tipoDocumento;
    private $numeroDni;
    public function __construct($nom,$apellido,$tipDoc,$numDni)
    {
        $this->nombre=$nom;
        $this->apellido=$apellido;
        $this->tipoDocumento=$tipDoc;
        $this->numeroDni=$numDni;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getTipoDocumento(){
        return $this->tipoDocumento;
    }
    public function getNumeroDni(){
        return $this->numeroDni;
    }
    public function setNombre($nomNuevo){
        $this->nombre=$nomNuevo;
    }
    public function setApellido($apeNuevo){
        $this->apellido=$apeNuevo;
    }
    public function setTipoDocumento($tipDocNuevo){
        $this->tipoDocumento=$tipDocNuevo;
    }
    public function setNumeroDni($dniNuevo){
        $this->numeroDni=$dniNuevo;
    }
    public function __toString()
    {
        return "nombre: ". $this->getNombre(). ", Apellido: ". $this->getApellido().
                ", Tipo de documento: ". $this->getTipoDocumento(). ", Numero de documento: ".
                 $this->getNumeroDni(). "\n";
    }
}

?>