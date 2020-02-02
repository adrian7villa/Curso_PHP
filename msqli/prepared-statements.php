<?php

$conexion= new mysqli('localhost','root','','ssn_archivo');

if($conexion->connect_errno){//comprueba la conexion
    die('No se logro la conexion');
}else{
    $statement=$conexion->prepare("INSERT INTO USUARIO(id,Nombre,Pass,Usuario) VALUES (?,?,?,?)");

    // Remplazamos los placeholder ? con valores que queremos uasort
    //     Una S por cada placeholder que tengamos
    //     s = string
    //     i = integer 
    //     d = double
    $statement->bind_param('isss',$id,$nombre,$pass,$usuario);
    $id=NULL;
    
    $nombre='Adrian';//$_GET['Nombre'];
    $pass='123';
    $usuario='AdrianD';

    $statement->execute();
    echo 'Filas añadidas:'. $conexion->affected_rows;

}

?>