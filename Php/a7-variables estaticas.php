<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

function incrementarvariable(){ 
    
    Static $contador=0;
    //$contador=0;

    $contador++;

    echo $contador . "<br>";

} //cuando termina una funcion las variables internas se destruyen

    incrementarvariable();
    incrementarvariable();
    incrementarvariable();
    incrementarvariable();
    
    
    ?>
<body>

</html>