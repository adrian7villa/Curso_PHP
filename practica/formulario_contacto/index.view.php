<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
</head>
<body>
    <h1>Hola</h1>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

            <label for="nombre">Nombre: </label>
            <input type="text" class="form-control" name="nombre" placeholder='Nombre' id="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
            <br>

            <label for="correo">Correo: </label>
            <input type="text" class="form-control" name="correo" placeholder='Correo' id="correo" value="<?php if(!$enviado && isset($correo)) echo $correo?>">

            <br>
            <label for="mensaje">Mensaje: </label>
            <textarea name="mensaje" class="form-control" id="mensaje" placeholder="mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>

            <?php if(!empty($errores)): ?>
            <div class="alert error">
                <?php echo $errores; ?>
            </div>
            
            <?php elseif($enviado): ?>
                <div class="alert success">
                    <p>Enviado correctamente</p>
                </div>
            <?php endif?>
            

            <br>
            <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        </form>
    </div>
</body>
</html>