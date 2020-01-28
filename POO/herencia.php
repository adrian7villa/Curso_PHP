<?php

class Persona{
    public $nombre;
    public $edad;
    public $pais;
    
    function __construct($nombre,$edad,$pais){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->pais=$pais;
    }

    public function mostrarInformacion(){
        return $this->nombre.' tiene '.$this->edad.' años de edad y es de '.$this->pais;
    }
}
/*class Estudiante{
    public $nombre;
    public $edad;
    public $pais;
    public $carrera;
    
    function __construct($nombre,$edad,$pais,$carrera){
        $this->nombre=$nombre;
        $this->edad=$edad;
        $this->pais=$pais;
        $this->carrera=$carrera;
    }
    public function mostrarInformacion(){
        return $this->nombre.' tiene '.$this->edad.' años de edad y es de '.$this->pais.' tiene la carrera de '.$this->carrera;
    }
}*/

class Estudiante extends Persona{
    //public $carrera;
    function __construct($nombre,$edad,$pais,$carrera){
        //$this->nombre=$nombre;
        //$this->edad=$edad;
        //$this->pais=$pais;
        parent::__construct($nombre,$edad,$pais);
        $this->carrera=$carrera;
    }
    public function mostrarInformacion(){
        return $this->nombre.' tiene '.$this->edad.' años de edad y es de '.$this->pais.' tiene la carrera de '.$this->carrera;
    }
}

class Trabajador extends Persona{
    function __construct($nombre,$edad,$pais,$trabajo){
        parent::__construct($nombre,$edad,$pais);
        $this->trabajo=$trabajo;
    }
    public function mostrarInformacion(){
        return $this->nombre.' tiene '.$this->edad.' años de edad y es de '.$this->pais.' trabaja en '.$this->trabajo;
    }
}

$carlos =new Persona('Adrian',33,'Mexico');
echo $carlos->mostrarInformacion().'<br/>';

$carlos =new Estudiante('Adrian',33,'Mexico',"Programador");
echo $carlos->mostrarInformacion().'<br/>';

$carlos =new Trabajador('Adrian',33,'Mexico',"Profesor");
echo $carlos->mostrarInformacion().'<br/>';
    
?>