<?php
class Libro{
    private $isbn;
    private $titulo;
    private $anioEdicion;
    private $editorial;
    private $objEscritor;
    private $cantidadPaginas;
    private $sinopsis;
    public function __construct($isbn,$tituloLibro,$anioEdicionLibro,$editorial,$objPersona,$cantPag,$sinopsis)
    {
        $this->isbn=$isbn;
        $this->titulo=$tituloLibro;
        $this->anioEdicion=$anioEdicionLibro;
        $this->editorial=$editorial;
        $this->objEscritor=$objPersona;
        $this->cantidadPaginas=$cantPag;
        $this->sinopsis=$sinopsis;
        
    }
    public function getIsbn(){
        return $this->isbn;
    }
    public function getAnioEdicion(){
        return $this->anioEdicion;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function getEditorial(){
        return $this->editorial;
    }
    public function getObjEscritor(){
        return $this->objEscritor;
    }
    public function getCantidadPaginas(){
        return $this->cantidadPaginas;
    }
    public function getSinopsis(){
        return $this->sinopsis;
    }
   
    
    public function setIsbn($nuevoIsbn){
        $this->isbn=$nuevoIsbn;
    }
    public function setAnioEdicion($nuevoAnioEdicion){
        $this->anioEdicion=$nuevoAnioEdicion;
    }
    public function setTitulo($nuevoTitulo){
        $this->titulo=$nuevoTitulo;
    }
    public function setEditorial($nuevaEditorial){
        $this->editorial=$nuevaEditorial;
    }
    public function setObjEscritor($nuevoobjPersona){
        $this->objEscritor=$nuevoobjPersona;
    }
    public function setCantidadPaginas($nuevaCantPaginas){
        $this->cantidadPaginas=$nuevaCantPaginas;
    }
    public function setSinopsis($nuevaSinopsis){
        $this->sinopsis=$nuevaSinopsis;
    }

    
    public function __toString()
    {
        return $this->getIsbn(). ", ". $this->getAnioEdicion(). ", ". 
                $this->getEditorial(). ", " . $this->getTitulo(). ", ". 
                $this->getCantidadPaginas(). ", ". $this->getSinopsis(). ", ".
                $this->getObjEscritor()->__toString(). "\n";   
    }
    public function perteneceEditorial($pEdtorial){
        $pertenece=false;
        if($this->getEditorial()==$pEdtorial){
            $pertenece=true;
        }
        return $pertenece;
    }
    public function aniosdeEdicion(){
        $anioActual=intval(date("Y"));
        $aniosdesdeEdicion=$anioActual-$this->getAnioEdicion();
        return $aniosdesdeEdicion;
    }

    
} 


?>