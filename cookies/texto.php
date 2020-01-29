<?php


if(isset($_COOKIE['font-size'])){
    $tamaño=htmlspecialchars($_COOKIE['font-size']);
}else{
    $tamaño='15px';
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        p{
            font-size:<?php echo $tamaño;?>
        }

    </style>
</head>
<body>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In soluta incidunt recusandae deleniti fugit, quasi, iusto necessitatibus cum dolore eligendi explicabo, nihil odio ex possimus voluptate animi vitae eveniet sapiente.</p>
</body>
</html>