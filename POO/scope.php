<?php

class Usuario{
    public $nombre;
    public $correo;
    
    function __construct($nombre,$correo){
        $this->nombre=$nombre;
        $this->correo=$correo;
    }

    public function mostrarInformacion(){
        return $this->correo;
    }
}


$adrian=new Usuario("Adrian",'adria.david@gmail.com');
echo $adrian->correo;

?>