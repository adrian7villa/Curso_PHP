<?php

try{
    $conexion=new PDO('mysql:host=localhost;dbname=ssn_archivo','root','');
    //echo "Conexion OK";

  //  $resultados=$conexion->query('SELECT * FROM USUARIO');//Consulta

  // foreach($resultados as $filas){
      
  //     echo $filas['Nombre'].'-'.$filas['id'].'<br/>';

  // }

  $estatement=$conexion->prepare('SELECT * FROM usuario WHERE id=:id or :id2');
  $estatement->execute(array(':id'=>2,':id2'=>4));

  $resultados=$estatement->fetch();
  echo "<pre>";
  print_r($resultados);
  echo "</pre>";
  
  
  
  
}catch(PDOException $e){
  
    echo "Error: ".$e->getMessage();

}

?>