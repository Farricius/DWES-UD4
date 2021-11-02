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

    while ($pokemoncito = $pokemoncitos->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>";
        echo $pokemoncito['nombre'];
        echo "</td>";

        echo "<td>";
        echo $pokemoncito['tipo1'];
        echo "</td>";

        echo "<td>";
        echo $pokemoncito['tipo2'];
        echo "</td>";
        echo "</tr>";

        echo "<td>";
        echo $pokemoncito['numero_lista'];
        echo "</td>";
        echo "</tr>";

        echo "<td>";
        echo $pokemoncito['generacion'];
        echo "</td>";
        echo "</tr>";

        echo "<td>";
        echo $pokemoncito['fecha_creacion'];
        echo "</td>";
        echo "</tr>";

        echo "<td>";
        echo $pokemoncito['imagen'];
        echo "</td>";
        echo "</tr>";

        echo "<td>";
        echo $pokemoncito['id'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";