<?php
$amigos=array(
    array('Alejandro',20,
            array('asd',    
                array(2,'nose'))),
    array('Cesar',21),
    array('Manuel',18));

echo 'Nombre: '.$amigos[0][0].' Edad: '.$amigos[0][1].' adentro1: '.$amigos[0][2][0].' adentro 2: '.$amigos[0][2][1][1].'</br>';
echo 'Nombre: '.$amigos[1][0].' Edad: '.$amigos[1][1].'</br>';
echo 'Nombre: '.$amigos[2][0].' Edad: '.$amigos[2][1];

?>