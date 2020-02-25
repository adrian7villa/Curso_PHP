<?php


if($_GET){
  //echo $_GET['folio'];

  $folio=$_GET['folio'];

  if(strlen($folio)===12){
    if(ctype_digit(substr($folio,0,3))){
        if(ctype_alpha(substr($folio,3,2))){
            if(ctype_digit(substr($folio,5,7))){

            //url de la paguina
            $url="http://licenciasmedicas.issste.gob.mx:9494/licmedWeb/buscarFolio.php?folio=$folio";
            //http://licenciasmedicas.issste.gob.mx:9494/licmedWeb/buscarFolio.php?folio=018LM0211799

            //url que contendra la pagina
            $url_content = '';  
            //	Open for reading only; place the file pointer at the beginning of the file.
            //abre para leer
            $file = @fopen($url, 'r');  
            if($file){  
                while(!feof($file)) {  
                $url_content .= @fgets($file, 4096);  

                }  
                //se cierra el documento(pagina)
                fclose ($file);  
            }  
            //substr_replace()
            //echo $url_content;

            if(strpos($url_content,"No Localizada")){
                $licencia=array('A1'=>"Licencia Médica No Localizada");

            }else if(strpos($url_content,"CANCELADA")){

              $nose= explode("<td",$url_content);

              //018LM0220729
              //echo $nose[1].'</br>';
              $estatus=trim(substr($nose[1],46,11));
              //echo $nose[2].'</br>';
              $fecha_exp=substr($nose[2],46,10);
              //echo substr($nose[2],46,10).'</br>';

              $licencia=array(
                'A1'=>$estatus,
                'A2'=>$fecha_exp);

            }
            
            else{
                //se separa por la etiqueta <td y se inserta en un array
                $nose= explode("<td",$url_content);

                //echo $nose[1].'</br>';
                $estatus=trim(substr($nose[1],46,11));
                //echo $nose[2].'</br>';
                $fecha_exp=substr($nose[2],28,10);
                //echo $nose[3].'</br>';
                $dias_otorgados=trim(substr($nose[3],27,2));
                //echo $nose[4].'</br>';
                $fecha_inicio=substr($nose[4],28,10);
                //echo explode("</td>",$nose[5])[0].'</br>';
                $fecha_fin=substr(explode("</td>",$nose[5])[0],46,10);
                //$fecha_fin.'</br>';

                $licencia=array(
                    'A1'=>$estatus,
                    'A2'=>$fecha_exp,
                    'A3'=>$fecha_inicio,
                    'A4'=>$fecha_fin,
                    'A5'=>$dias_otorgados);
            }
            
            

            }else{
            $licencia=array('A1'=>"Los ultimos 7 digitos tienen que ser numeros");
            }
        }else{
        $licencia=array('A1'=>'Esta parte '.substr($folio,3,2).' del folio tienen que ser letras');
        }
    }else{
    $licencia=array('A1'=>"Los 3 primeros digitos tienes que ser numeros");
    }
    
  }else{
      $licencia=array('A1'=>"El folio no tiene los 12 caracteres");
  }




}else{
    $licencia=array('A1'=>"El folio esta vacio");
}

header('Content-type: application/json; charset=utf-8');
//pasar array
$json_string = json_encode($licencia);
echo $json_string;


?>