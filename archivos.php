<?php

//Saber si existe archivo
/*
if(file_exists('documento.txt')){
    echo "El archivo si existe";
}else{
    echo "El archivo no existe";
}*/
//Leer
/*echo file_get_contents('documento.txt');
echo '</br>';
file_put_contents('documento.txt','Hola adrian',FILE_APPEND);

echo file_get_contents('documento.txt');
echo '</br>';
*/

/*
//escribe en el archivo
file_put_contents('documento.txt','');
for($i=0;$i<=10;$i++){
    file_put_contents('documento.txt',"$i\n",FILE_APPEND);
}*/

$archivo=file('documento.txt');
echo "<pre>";
print_r($archivo);


?>