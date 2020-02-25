<?php
session_start();

if(isset($_SESSION['usuario'])){
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD']=='POST'){
    $usuario=filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
    $password=$_POST['password'];
    $password2=$_POST['password2'];

    //echo "$usuario . $password . $password2";

    $errores='';
    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores.='<li>Por favor rellena todos los datos correctamente</li>';

    }else{
        try {

            $conexion= NEW PDO('mysql:host=localhost;dbname=prueba','root','');// or die ('Nose puedo conectar a la base de datos');

        } catch (PDOException $e) {
            echo "Error: ".$e->getMessage();
        }

        $statement=$conexion->prepare('select * from usuario where Usuario=:usuario limit 1');//aui se hacen las consultas
        $statement->execute(array(':usuario'=>$usuario));
        $resultado=$statement->fetch();

        //print_r($resultado);

        if ($resultado!=false) {
            $errores.='<li>El nombre de usuario ya existe</li>';
            # code...
        }
        $password=hash('sha512',$password);
        $password2=hash('sha512',$password2);

        if ($password!=$password2) {
            $errores.='<li>Las contraseñas no son iguales</li>';
            # code...
        }
    }

    if ($errores=='') {
        $statement=$conexion->prepare('INSERT INTO `prueba`.`usuario`(`id`,`Usuario`,`Pass`,`Nombre`,`Activo`) VALUES ( NULL,:usuario,:pass,:usuario,1);');
        $statement->execute(array(':usuario'=>$usuario,':pass'=>$password));

        header('Location:login.php');
        # code...
    }
}

require 'views/registrate.view.php';


?>