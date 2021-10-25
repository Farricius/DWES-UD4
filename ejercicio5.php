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

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $error = mysqli_connect_errno();

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos:" . mysqli_connect_error() . "</p>";
        exit();
    }

    $result = mysqli_query($mysqli, "INSERT INTO `vuelos` 
    (Origen, Destino, Fecha, Companya, ModeloAvion) VALUES ('Barcelona', 'Londres', '2022-01-01 09:15:00', 'CAT AirLines', 'A82')");

    if ($result == false)
        echo "La consulta no ha funcionado correctamente...";

    else {
        echo "Se han insertado ", mysqli_affected_rows($mysqli), " filas.";
        echo "<br>";
        echo "El id del último elemento añadido es ", mysqli_insert_id($mysqli);
    }
    mysqli_close($mysqli);
    echo "<br>";


    // UPDATE UNA FILA + MSG

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $error = mysqli_connect_errno();

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos:" . mysqli_connect_error() . "</p>";
        exit();
    }

    $result2 = mysqli_query($mysqli, "UPDATE vuelos SET Destino = 'New York' WHERE  id  = '2' "); // Comillas solo a VALROES!!!!!!
    if ($result == false) {
        echo "La consulta no ha funcionado correctamente...";
    } else {
        echo "Se han actualizado ", mysqli_affected_rows($mysqli), " filas";
    }
    mysqli_close($mysqli);
    echo "<br>";

    // BORRA UNA FILA + MSG


    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $error = mysqli_connect_errno(); // OLD: $error = mysqli_errno(($mysqli));

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos:" . mysqli_connect_error() . "</p>";
        exit();
    }

    $result = mysqli_query($mysqli, "DELETE FROM `vuelos` WHERE Origen = 'Barcelona' "); // -2 fila

    if ($result == false) {
        echo ("La consulta NO ha funcionado correctamente");
    } else {
        echo "Se han borrado ", mysqli_affected_rows($mysqli), " filas"; // Nº de filas DEP
    }

    mysqli_close($mysqli);
    echo "<br>";

    ?>
</body>

</html>