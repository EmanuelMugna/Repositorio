<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$nombre="emanuel";

function modvar(){

    global $nombre; // esto debe estar dentro de la funcion 

    $nombre="maria";
}

 modvar(); // llamo a la funcion para modificar
echo $nombre;
    ?>
<body>

</html>