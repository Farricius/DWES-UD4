<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // INSERT UNA FILA + MSG

    function creaConexion() {

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $error = mysqli_connect_errno();

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos:" . mysqli_connect_error() . "</p>";
        exit();
    }
}


    function creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion) {

    creaConexion();
    
    $result = mysqli_query($mysqli, "INSERT INTO `vuelos` 
    (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES ('Madrid', 'Valencia', '2021-10-21 09:16:52', 'Iberia', 'A380')");


    }

?>