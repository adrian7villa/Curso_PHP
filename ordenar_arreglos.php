<?php

$meses=array('Enero',"Febrero",'Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

$numeros=array(1,22,23,10,9,5,70,100,20);

#ordenamiento
sort($meses);
sort($numeros);
# ordenamiento revers
rsort($meses);
rsort($numeros);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
        <?php 
        foreach($meses as $mes)
        {
            echo '<li>'. $mes.'</li>';
        }
        
        
            ?>
    
    </ul>
    <h1>Numeros</h1>
    <ul>
        <?php 
        foreach($numeros as $numero)
        {
            echo '<li>'. $numero.'</li>';
        }
        
        
            ?>
    
    </ul>
</body>
</html>