<?php
$servidor = "localhost";
$baseDatos = "bdpokemon";
$usuario = "developer";
$pass = "developer";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
    echo "Conectado correctamente";
    echo "<br>";
    $sql = "SELECT * FROM pokemon";


    function cabeceraWapa() {
        echo "<table border = 2>";
        echo "<th>Nombre</th>";
        echo "<th>Tipo 1</th>";
        echo "<th>Tipo 2</th>";
        echo "<th>Nº Lista</th>";
        echo "<th>Generación</th>";
        echo "<th>Fecha Creación</th>";
        echo "<th>Imagen</th>";
        echo "<th>ID (BBDD)</th>";
    }

    cabeceraWapa();
    $pokemoncito = $conexion->query($sql);

    while ($poke = $pokemoncito->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>";
        echo $poke['nombre'];
        echo "</td>";

        echo "<td>";
        echo $poke['tipo1'];
        echo "</td>";

        echo "<td>";
        echo $poke['tipo2'];
        echo "</td>";

        echo "<td>";
        echo $poke['numero_lista'];
        echo "</td>";

        echo "<td>";
        echo $poke['generacion'];
        echo "</td>";

        echo "<td>";
        echo $poke['fecha_creacion'];
        echo "</td>";

        echo "<td>";
        echo $poke['imagen'];
        echo "</td>";

        echo "<td>";
        echo $poke['id'];
        echo "</td>";

    }
    echo "</table>";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
    ?>