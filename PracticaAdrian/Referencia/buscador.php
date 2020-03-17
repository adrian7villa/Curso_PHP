<?php

//echo $_GET['term'];
if (isset($_GET['term'])){
	# conectare la base de datos
    $con=@mysqli_connect('localhost','root','','sistema_agenducha') or die ('Nose puedo conectar a la base de datos');
	
$return_arr = array();
/* Si la conexión a la base de datos , ejecuta instrucción SQL. */
if ($con)
{
    //$fetch = mysqli_query($con,"SELECT * FROM productos where codigo_producto like '%" . mysqli_real_escape_string($con,($_GET['term'])) . "%' LIMIT 0 ,50"); 
    //$fetch = mysqli_query($con,"SELECT id_derecho FROM derechohabientes where CONCAT_WS(' ',ap_p,ap_m,nombres) LIKE '%ADRIAN%' COLLATE 'utf8_general_ci';"); 
    /*

SET collation_connection = 'utf8_general_ci';

then for your databases

ALTER DATABASE your_database_name CHARACTER SET utf8 COLLATE utf8_general_ci;

ALTER TABLE your_table_name CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;

MySQL sneaks swedish in there sometimes for no sensible reason.
*/
    $fetch = mysqli_query($con,"SELECT id_derecho,CONCAT_WS('-',CONCAT_WS('/',cedula,cedula_tipo),CONCAT_WS(' ',ap_p,ap_m,nombres)) AS 'Nombres' FROM derechohabientes WHERE (CONCAT_WS(' ',ap_p,ap_m,nombres) LIKE '%" .$_GET['term']. "%' COLLATE 'utf8_general_ci') OR cedula LIKE '%" .$_GET['term']. "%' ORDER BY cedula  LIMIT 0 ,50"); 

    /*
    

Firstly run this query

SHOW VARIABLES LIKE '%char%';

You have character_set_server='latin1'

If so,go into your config file,my.cnf and add or uncomment these lines:

character-set-server = utf8
collation-server = utf8_general_ci

Restart the server. Yes late to the party,just encountered the same issue.
*/
    //$row=$fetch->fetch_object(MYSQLI_NUM);
    //printf ($row[0]);

    if (!$fetch) {
        echo(mysqli_error($con));
    }

    while($fila=mysqli_fetch_array($fetch)){
        //echo $fila['Nombres'].'<br/>';
        $row_array['value'] = $fila['id_derecho']." | ".$fila['Nombres'];
        $row_array['id_derecho']=$fila['id_derecho'];
		$row_array['nombres']=$fila['Nombres'];
        array_push($return_arr,$row_array);
   }
	/* Recuperar y almacenar en conjunto los resultados de la consulta.*/
	/*while ($row = mysqli_fetch_array($fetch)) {
		//$id_producto=$row['id'];
		//$nombre=$row['Nombres'];
		$row_array['id']=$row['id'];
		$row_array['Nombres']=$row['Nombres'];
		array_push($return_arr,$row_array);
    }*/
}
 
/* Cierra la conexión. */
mysqli_close($con);
 
/* Codifica el resultado del array en JSON. */
echo json_encode($return_arr);
 
}

?>