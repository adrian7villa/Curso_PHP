<?php

$conexion=mysqli_connect('localhost','root','','ssn_archivo') or die ('Nose puedo conectar a la base de datos');

//mysqli_select_db('ssn_archivo',$conexion);

$resultado=mysqli_query($conexion,'Select * from usuario');//aui se hacen las consultas

//-----------------------------------------------

/*$fila=mysqli_fetch_object($resultado);

echo $fila->Nombre;

$fila=mysqli_fetch_object($resultado);

echo $fila->Nombre;*/

//-------------------------------
while($fila=mysqli_fetch_object($resultado)){
     echo $fila->Nombre.'<br/>';
}


?>