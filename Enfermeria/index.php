
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Productividad del servicio de CEYE</h1>
    <br>
    <form action="recibe.php" method="post">
    <label for="year"><h3>Turno: </label>
        <select name="year" id="year">
            <option value="Matutino">Matutino</option>
            <option value="Vespertino">Vespertino</option>
            <option value="Nocturno1">Nocturno L-M-V</option>
            <option value="Nocturno2">Nocturno M-J</option>
            <option value="SDFD">Fines De Semana Diurno</option>
            <option value="SDFN">Fines De Semana Nocturno</option>

        </select>
        <br>

        <label for="nombre">Nombre: </label>
        <input type="text" placeholder="Nombre" name="nombre">
        <br>

        <label for="hombre">Hombre</label>
        <input type="radio" name="sexo" id="" value="hombre">
        <br>

        <label for="mujer">Mujer</label>
        <input type="radio" name="sexo" id="" value="mujer">
        <br>

        <label for="year">Año de nacimiento: </label>
        <select name="year" id="year">
            <?php 
            for($i=1980;$i<=2020;$i++)
            {
                echo "<option value='$i'>$i</option>";
            }
            ?>

        </select>
        <br>

        <label for="terminos">Acepta los terminos?</label>
        <input type="checkbox" name="terminos" id="terminos" value="ok">
        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>