<?php

class Persona{
    public static $dia='7 de Julio';

    public static function saludo($nombre=null){
        if($nombre){
            return 'Hola, buen dia '.$nombre;

        }else{
            return 'Hola, buen dia.';
        }
        
    }
}

//$adrian=new Persona;
//echo $adrian->dia;

//echo Persona::$dia;
echo Persona::saludo('Adrian');
echo Persona::saludo();


?>