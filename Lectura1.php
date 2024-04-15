<?php
class Lectura1{
    private $coleccionLibros;
    public function __construct($arrayLibros)
    {
        $this->coleccionLibros=$arrayLibros;
    }
    public function  getColecconLibros(){
        return $this->coleccionLibros;
    }
    public function setColeccionLibros($nuevaColLibros){
        $this->coleccionLibros=$nuevaColLibros;
    }
        
    public function libroLeido($titulo){
        $contador=0;
        $libroLeido=false;
        $aux=true;
        while(!$libroLeido){
            if($this->getColecconLibros()[$contador]->getTitulo()==$titulo){
                $libroLeido=true;
                $aux=false;
            }
            if(count($this->getColecconLibros())-1==$contador){
                $libroLeido=true;
            }
            $contador++;
        }
        if($aux){
            $libroLeido=false;
        }
        return $libroLeido;

    }
    public function darSinopsis($titulo){
        $contador=0;
        $sinopsis=null;
        $libroLeido=false;
        
        while(!$libroLeido){
            if($this->getColecconLibros()[$contador]->getTitulo()==$titulo){
                $libroLeido=true;
                $sinopsis=$this->getColecconLibros()[$contador]->getSinopsis();
                
            }
            if(count($this->getColecconLibros())-1==$contador){
                $libroLeido=true;
            }
            $contador++;
        }
        
        return $sinopsis;
    }

    public function darLibrosporAutor($autor){
        $libroAutor=[];
        foreach($this->getColecconLibros() as $libro){
            if($libro->getEscritor()->getNombre()==$autor){
               
                array_push($libroAutor,$libro);
                
            }
            
        }
        return [$autor=>$libroAutor];
    }

    public function leidosAniosEdicion($fechaEdicion){
        $libroporFechaEdicion=[];
        foreach($this->getColecconLibros() as $libro){
            if ($libro->getAnioEdicion()==$fechaEdicion){
                array_push($libroporFechaEdicion,$libro);
            }
        }
        return [$fechaEdicion=>$libroporFechaEdicion];
    }
    
}

?>