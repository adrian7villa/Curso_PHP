<?php

//print_r($_POST);

    if(!$_POST)
    {
        header('Location: http://localhost/Curso_PHP/Formularios/');
    }

    $nombre=$_POST['nombre'];
    $sexo=$_POST['sexo'];
    $year=$_POST['year'];
    $terminos=$_POST['terminos'];

    echo 'Hola '. $nombre.' eres '.$sexo;
?>