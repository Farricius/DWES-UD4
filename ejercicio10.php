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

    $servidor = "localhost";
    $baseDatos = "agenciaviajes";
    $usuario = "developer";
    $pass = "developer";
    
    try {
        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo "<br>";

        $conexion->beginTransaction();
        $falloConsultas = false;

        // AQUÍ REALIZO CONSULTAS

        $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono)
        VALUES ('Farri','Junior','Makelele','Sydney','650906080')";
        $numeroClientes = $conexion->exec($sql);
        $last_id = $conexion->lastInsertId(); // last_id
        if ($last_id > 0) { // if ($last_id < 1)
            echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id.";
        } else {
            echo "FALLO";
            $falloConsultas = true;
        }

        $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono)
        VALUES ('Pepito','Junior','Makelele','Sydney','123456789')";
        $numeroClientes = $conexion->exec($sql);
        $last_id = $conexion->lastInsertId(); // last_id2
        if ($last_id > 0) {  // if ($last_id < 1 || $last_id2 == $last id)
            echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id.";
        } else {
            echo "FALLO";
            $falloConsultas = true;
        }

        $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono)
        VALUES ('Melón','Junior','Makelele','Sydney','123456780')";
        $numeroClientes = $conexion->exec($sql);
        $last_id = $conexion->lastInsertId(); // //last_id3
        if ($last_id > 0) { // if ($last_id3 < 1 || $last_id3 == $last id2)
            echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id.";
        } else {
            echo "FALLO";
            $falloConsultas = true;
        }

        if ($falloConsultas) {
            $conexion->rollBack();
        } else {
            $conexion->commit();
        }
        $conexion = null;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    //$conn = null;
    ?>

</body>

</html>