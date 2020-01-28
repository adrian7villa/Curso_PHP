<?php

class Persona{
public $nonmbre;
public $edad;
public $pais;

public function mostrarInformacion(){
    echo 'Hola Mundo';
}

}


$Carlos=new Persona;

$Carlos->nombre='Carlos Arturo';
$Carlos->Pais='Mexico';
$Carlos->Edad=32;

$Alejandro=new Persona;

$Alejandro->nombre='Alejandro';
$Alejandro->Pais='España';
$Alejandro->Edad=30;

$Carlos->mostrarInformacion();

?>