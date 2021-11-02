<!-- Recuerda que CRUD representa un acrónimo para operaciones de base de datos de Crear (Create), Leer (Read), Actualizar (Update) y Eliminar (Delete). Al igual que hicimos con MySQLi, vamos a realizar una capa de abstracción que se encargue de realizar todas las tareas de gestión de la tabla turista:
Función crearTurista que devuelve el id del turista creado.
Función extraeTurista que devuelve un turista según el id.
Función extraeTuristas que devuelve un array con todos los turistas.
Función actualizaTurista que permite modificar la dirección de un turista y su número de teléfono, devuelve true si ha sido modificado.
Función eliminaTurista que elimina un turista según el id.
Prueba todas las funciones.
Guárdalo como ejercicio11.php -->

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

    $conexion = crearConexion();

    function crearConexion()
    {
        $servidor = "localhost";
        $baseDatos = "agenciaviajes";
        $usuario = "developer";
        $pass = "developer";

        $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo "<br>";

        $conexion->beginTransaction();
    }

    function creaTurista($conexion)
    {
        $sql = "INSERT INTO turista (nombre, apellido1, apellido2, direccion, telefono)
    VALUES ('Farri','ejercicio11','funciona?','New York','650906080')";
        $numeroClientes = $conexion->exec($sql);
        $last_id = $conexion->lastInsertId(); // last_id
        if ($last_id > 0) { // if ($last_id < 1)
            echo "Se han añadido $numeroClientes cliente nuevo con el id: $last_id.";
        }
    }



    ?>

</body>

</html>