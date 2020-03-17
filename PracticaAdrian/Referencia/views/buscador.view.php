<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referencia</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/73ae0a3112.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="CSS/estilos.css">


    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#codigo").autocomplete({
                source: "buscador.php",
                minLength: 4,
                select: function(event, ui) {
                    event.preventDefault();
                    $('#codigo').val(ui.item.nombres);
                    //alert('Has seleccionado el '+$('#codigo').val());	
                    $('#h3derecho').html($('#codigo').val());
                    $('#fullq').show();
                    $('#wrap2').show();
                    $('#imga').css("width","10%");
                    $('#imga').css("height","10%");

                    
                }
            });
        });
    </script>
</head>
<body>

    <form action="" class="formBuscar">
        <div>
            <img src="IMG/60_issste_logo.png" class="imgprincipal" alt="" id="imga">
        </div>

        <div class="divBuscador">  
            <input type="text" name="" id="codigo" class="txtBuscar" placeholder="Cedula o Nombre" 
            required pattern="[A-Z 0-9]{1,100}" onkeyup="javascript:this.value=this.value.toUpperCase();">
            <i class="submit-btn fas fa-search" onclick="login.submit()"></i>
        </div>

        <div class="Dderecho">
            <h3 id="h3derecho" class="LDerecho"></h3>
        </div>

        <div class="full" id="fullq" style="display:none;">
            <div class="left">
                <h5>Motivo Referencia</h5>
                <textarea name="comentarios" class="txtmotivo" rows="10" >Escribe aquí tus comentarios</textarea>
            </div>
            <!--<div class="right">
                <textarea name="comentarios" class="txtmotivo" rows="10" >Escribe aquí tus comentarios</textarea>
            </div>-->

            <div class="wrap" id="wrap2">
                <form class="formmotivo" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" name="nombre" placeholder='Nombre' id="nombre" value="<?php if(!$enviado && isset($nombre)) echo $nombre?>">
                    <br>

                    <label for="correo">Correo: </label>
                    <input type="text" class="form-control" name="correo" placeholder='Correo' id="correo" value="<?php if(!$enviado && isset($correo)) echo $correo?>">

                    <br>
                    <label for="mensaje">Mensaje: </label>
                    <textarea name="mensaje" class="form-control2" id="mensaje" placeholder="mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje?></textarea>

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
                    
                </form>
            </div>
        </div>

        
    <input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
        


    </form>

   <!-- <div style="display:none;">
    <div>
        <h1 id="prueba">prueba</h1>    
    </div>-->
</body>
</html>