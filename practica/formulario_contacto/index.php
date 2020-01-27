<?php

$errores='';
$enviado='';

if(isset($_POST['submit'])){
    $nombre=$_POST['nombre'];
    $correo=$_POST['correo'];
    $mensaje=$_POST['mensaje'];
    if(!empty($nombre)){
        $nombre=trim($nombre);
        $nombre=filter_var($nombre,FILTER_SANITIZE_STRING);
    }else{
        $errores .= 'Por favor ingrese un nombre <br />';
    }

    if(!empty($correo)){
        
        $correo=trim($correo);
        $correo=filter_var($correo,FILTER_SANITIZE_EMAIL);
        if(!$correo=filter_var($correo,FILTER_VALIDATE_EMAIL)){
            $errores.= 'Porfavor ingresar un correo valido <br />';
        }
    }else{
        $errores .= 'Por favor ingrese un correo <br />';
    }

    if(!$errores)
    {
        $enviar_a='adria.david.villa7@gmail.com';
        $asunto='Correo enviado desde mi paguina.com';
        $mensaje_preparado='De '.$nombre.' \n';
        $mensaje_preparado.="Correo:$correo \n";
        $mensaje_preparado.="Mensaje: ".$mensaje;

        //mail($enviar_a,$asunto,$mensaje_preparado);

        $enviado=true;
    }
}


require 'index.view.php';



?>