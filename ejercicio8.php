<!-- 8. Antes de realizar este ejercicio inserta 3 filas en la tabla turista. A continuación, realiza una
consulta SQL que extraiga el nombre, el primer apellido y la dirección del turista y lo muestre en una tabla. 
Realizarlo una vez para cada posible valor del parámetro que recibe la función fetch, es decir, 6 veces. -->

<?php
$servidor = "localhost";
$baseDatos = "agenciaviajes";
$usuario = "developer";
$pass = "developer";

try {
    $conexion = new PDO("mysql:host=$servidor;dbname=$baseDatos", $usuario, $pass);
    echo "Conectado correctamente";
    echo "<br>";
    $sql = "SELECT nombre, apellido1, direccion FROM turista";


    function cabeceraWapa() {
        echo "<table border = 2>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
        echo "<th>Dirección</th>";
    }

    cabeceraWapa();
    $turistas = $conexion->query($sql);

    while ($turista = $turistas->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>";
        echo $turista['nombre'];
        echo "</td>";

        echo "<td>";
        echo $turista['apellido1'];
        echo "</td>";

        echo "<td>";
        echo $turista['direccion'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    cabeceraWapa();
    $turistas = $conexion->query($sql);
    
    while ($turista = $turistas->fetch(PDO::FETCH_NUM)) {
        echo "<tr>";
        echo "<td>";
        echo $turista[0];
        echo "</td>";

        echo "<td>";
        echo $turista[1];
        echo "</td>";

        echo "<td>";
        echo $turista[2];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    cabeceraWapa();
    $turistas = $conexion->query($sql);

    while ($turista = $turistas->fetch(PDO::FETCH_BOTH)) {
        echo "<tr>";
        echo "<td>";
        echo $turista[0];
        echo "</td>";
        echo "<td>";
        echo $turista[1];
        echo "</td>";
        echo "<td>";
        echo $turista[2];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    cabeceraWapa();
    $turistas = $conexion->query($sql);

    while ($turista = $turistas->fetch(PDO::FETCH_OBJ)) {
        echo "<tr>";
        echo "<td>";
        echo $turista->nombre;
        echo "</td>";
        echo "<td>";
        echo $turista->apellido1;
        echo "</td>";
        echo "<td>";
        echo $turista->direccion;
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    cabeceraWapa();
    $turistas = $conexion->query($sql);

    while ($turista = $turistas->fetch(PDO::FETCH_LAZY)) {
        echo "<tr>";
        echo "<td>";
        echo $turista['nombre'];
        echo "</td>";

        echo "<td>";
        echo $turista['apellido1'];
        echo "</td>";

        echo "<td>";
        echo $turista['direccion'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

    cabeceraWapa();
    $turistas = $conexion->query($sql); // FETCH_BOUND USA BIND COLUMNS¿? ¿?¿?¿' XD WT

    while ($turista = $turistas->fetch(PDO::FETCH_BOUND)) {
        echo "<tr>";
        echo "<td>";
        echo $turista['nombre'];
        echo "</td>";

        echo "<td>";
        echo $turista['apellido1'];
        echo "</td>";

        echo "<td>";
        echo $turista['direccion'];
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
//$conn = null;
?>