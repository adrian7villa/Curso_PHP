<?php

$conexion =new mysqli('localhost','root','','ssn_archivo');

if($conexion->connect_errno){
    die('Error de conexion');
} else{
    $sql='SELECT * FROM usuario';
    $resultado=$conexion->query($sql);

    if($resultado){
        // echo $resultado->num_rows;
        // echo '<pre>';
        // var_dump($resultado->fetch_assoc()); 
        // echo '</pre>';

        while($fila=$resultado->fetch_assoc()){
            echo $fila['id'].'-'.$fila['Nombre'].'<br/>';
        }

    }else{
        echo 'No hay datos';
    }
}

?>