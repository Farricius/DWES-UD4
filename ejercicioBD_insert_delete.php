<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // DELETES 

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $error = mysqli_connect_errno(); // OLD: $error = mysqli_errno(($mysqli));

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos:" . mysqli_connect_error() . "</p>";
        exit();
    }

    $result = mysqli_query($mysqli, "DELETE FROM `vuelos` WHERE Origen = 'Huelva' "); // -2 fila

    if ($result == false) {
        echo ("La consulta NO ha funcionado correctamente");
    } else {
        echo "Se han borrado ", mysqli_affected_rows($mysqli), " filas"; // Nº de filas dep 
    }

    mysqli_close($mysqli);
    echo "<br>";

    // INSERT

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $error = mysqli_connect_errno(); // OLD: $error = mysqli_errno(($mysqli));

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos:" . mysqli_connect_error() . "</p>";
        exit();
    }

    $result = mysqli_query($mysqli, "INSERT INTO `vuelos` 
    (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES ('Madrid', 'Valencia', '2021-10-21 09:16:52', 'Iberia', 'A380')");

    if ($result == false)
        echo "La consulta no ha funcionado correctamente";

    else {
        echo "Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
        echo "<br>";
        echo "El id del último elemento añadido es ", mysqli_insert_id($mysqli);
    }
    mysqli_close($mysqli);

    // UPDATE ---// Comillas solo a VALROES!!!!!! A tabla y campos: NO

    $result2 = mysqli_query($mysqli, "UPDATE vuelos SET Origen = 'Dos Hermanas' WHERE  id  = '8' ");
    if ($result == false ) {
        echo "La consulta no ha funcionado correctamente.";
    }
    else {
        echo "Se han actualizado ", mysqli_affected_rows($mysqli), " filas";
    }

    ?>
</body>

</html>