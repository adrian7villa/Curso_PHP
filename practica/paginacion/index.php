<?php

try{

    $conexion=new PDO('mysql:host=localhost;dbname=prueba','root','');

    $pagina=isset($_GET['pagina']) ? (int)$_GET['pagina']:1;
    $postPorPagina=2;
    
    $inicio=($pagina>1)?($pagina*$postPorPagina-$postPorPagina):0;

    $articulos=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulo LIMIT $inicio , $postPorPagina");

    $articulos->execute();
    $articulos=$articulos->fetchAll();

    if(!$articulos){
        header('Location: index.php');
    }

    $totalArticulos=$conexion->query("SELECT FOUND_ROWS() as total");
    $totalArticulos=$totalArticulos->fetch()['total'];
    
    $numeroPaginas=ceil($totalArticulos/$postPorPagina);

    echo $numeroPaginas;



}catch(PDOException $e){
    echo "ERROR: ".$e->getMessage();
    die();
}

require 'index.view.php';

?>