<?php

class Persona{
    public $nonmbre;
    public $edad;
    public $pais;
    
    public function mostrarInformacion(){
        echo $this->nombre.' tiene '.$this->edad.' años de edad y es de '.$this->pais;
    }
    
    }
    
    
    $Carlos=new Persona;
    $Carlos->nombre='Carlos Arturo';
    $Carlos->pais='Mexico';
    $Carlos->edad=32;
        
    $Carlos->mostrarInformacion();
    echo '<br/>';
    $Alejandro=new Persona;

    $Alejandro->nombre='Alejandro';
    $Alejandro->pais='España';
    $Alejandro->edad=30;
        
    $Alejandro->mostrarInformacion();

?>