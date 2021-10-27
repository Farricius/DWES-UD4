<?php
    $servidor = "localhost";
    $baseDatos = "agenciaviajes";
    $usuario = "developer";
    $pass = "developer";

    try {
        $conexion = new PDO ("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
        echo "Conectado correctamente";
        echo "<br>";
        $sql = "SELECT * FROM turista";
        $turistas = $conexion->query($sql);
        while ($turista = $turistas->fetch()) {
            echo "El turista de nombre " .$turista['nombre']. " " .$turista['apellido1']. " " .$turista['apellido2']. " es de " .$turista['direccion']. "<br />";
        }

        while ($turista = $turistas->fetch(PDO::FETCH_NUM)) {
            echo "El turista de nombre " .$turista['nombre']. " " .$turista['apellido1']. " " .$turista['apellido2']. " es de " .$turista['direccion']. "<br />";
        }




        // while($turista = $turistas->fetch(PDO::FETCH_ASSOC)){
        //     print $turista['nombre'] . '<br>';
        //     echo "hol";
        //     print $turistas['apellido1'] . '<br>';
        // }

    }catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    //$conn = null;
?>