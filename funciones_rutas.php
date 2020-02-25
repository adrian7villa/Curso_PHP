<?php


//Nombre del archivo con su extencion
//echo pathinfo('documento.txt',PATHINFO_BASENAME);
//ruta del archivo directorio padre del archivo
//echo pathinfo('usuario/carpeta/documento.txt',PATHINFO_DIRNAME);
//Extencion del archivo 
//echo pathinfo('documento.txt',PATHINFO_EXTENSION);
//nombre del archivo
//echo pathinfo('documento.txt',PATHINFO_FILENAME);
//arreglo de archivos por varias extenciones
//$resultado=glob('*.{php,html,txt}',GLOB_BRACE);
//arreglo de archivos por nombre
//$resultado=glob('d*.*',GLOB_BRACE);
//print_r($resultado);

//echo basename('carpeta/carpeta2/archivo.php');

echo dirname('carpeta/carpeta2/archivo.php');



?>