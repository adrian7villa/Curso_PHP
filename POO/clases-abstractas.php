<?php

abstract class Persona{
    public function saludo(){
        return 'Hola';
    }
}
class Estudiante extends Persona{
    
}
$adrian=new Estudiante;
echo $adrian->saludo();

?>