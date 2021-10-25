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
    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $error = mysqli_connect_errno(); // OLD: $error = mysqli_errno(($mysqli));
    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos:" . mysqli_connect_error() . "</p>";
        exit();
    } else {
        echo "conectado correctamente!!!!!!!!!qweasd"; // Pa ver si funciona
        echo "<br>";
    }
    $result = mysqli_query($mysqli, "SELECT * FROM `vuelos`"); // Usar comillas ``` para consultas.
    //var_dump($result);
    echo "<br>";
    //mysqli_close($mysqli);

    if ($result == false) {
        echo "La consulta no ha funcionado correctamente...";
    } else {

        echo "<table border = 2>";
        echo "<th>ID</th>";
        echo "<th>Origen</th>";
        echo "<th>Destino</th>";
        echo "<th>Fecha</th>";
        echo "<th>Companya</th>";
        echo "<th>ModeloAvion</th>";

        while ($file = mysqli_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>";
            echo $file["id"];
            echo "</td>";

            echo "<td>";
            echo $file["Origen"];
            echo "</td>";

            echo "<td>";
            echo $file["Destino"];
            echo "</td>";

            echo "<td>";
            echo $file["Fecha"];
            echo "</td>";

            echo "<td>";
            echo $file["Companya"];
            echo "</td>";

            echo "<td>";
            echo $file["ModeloAvion"];
            echo "</td>";
        }
        echo "</tr>";
        echo "</table>";
    }

    mysqli_close($mysqli);

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $result = mysqli_query($mysqli, "SELECT * FROM `vuelos`"); // Usar comillas ``` para consultas.
    //var_dump($result);

    echo "<table border = 2>";
    echo "<th>ID</th>";
    echo "<th>Origen</th>";
    echo "<th>Destino</th>";
    echo "<th>Fecha</th>";
    echo "<th>Companya</th>";
    echo "<th>ModeloAvion</th>";

    while ($file = mysqli_fetch_object($result)) {
        echo "<tr>";

        echo "<td>";
        printf("%s", $file->id);
        echo "</td>";

        echo "<td>";
        printf("%s", $file->Origen);
        echo "</td>";

        echo "<td>";
        printf("%s", $file->Destino);
        echo "</td>";

        echo "<td>";
        printf("%s", $file->Fecha);
        echo "</td>";

        echo "<td>";
        printf("%s", $file->Companya);
        echo "</td>";

        echo "<td>";
        printf("%s", $file->ModeloAvion);
        echo "</td>";
    }
    echo "</tr>";
    echo "</table>";

    mysqli_close($mysqli);

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $result = mysqli_query($mysqli, "SELECT * FROM `vuelos`"); // Usar comillas ``` para consultas.
    //var_dump($result);

    echo "<table border = 2>";
    echo "<th>ID</th>";
    echo "<th>Origen</th>";
    echo "<th>Destino</th>";
    echo "<th>Fecha</th>";
    echo "<th>Companya</th>";
    echo "<th>ModeloAvion</th>";

    while ($file = mysqli_fetch_array($result)) {
        echo "<tr>";

        echo "<td>";
        printf("%s", $file["id"]);
        echo "</td>";

        echo "<td>";
        printf("%s", $file["Origen"]);
        echo "</td>";

        echo "<td>";
        printf("%s", $file["Destino"]);
        echo "</td>";

        echo "<td>";
        printf("%s", $file["Fecha"]);
        echo "</td>";

        echo "<td>";
        printf("%s", $file["Companya"]);
        echo "</td>";

        echo "<td>";
        printf("%s", $file["ModeloAvion"]);
        echo "</td>";
    }
    echo "</tr>";
    echo "</table>";

    mysqli_close($mysqli);

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $result = mysqli_query($mysqli, "SELECT * FROM `vuelos`"); // Usar comillas ``` para consultas.
    //var_dump($result);

    echo "<table border = 2>";
    echo "<th>ID</th>";
    echo "<th>Origen</th>";
    echo "<th>Destino</th>";
    echo "<th>Fecha</th>";
    echo "<th>Companya</th>";
    echo "<th>ModeloAvion</th>";

    while ($file = mysqli_fetch_row($result)) {
        echo "<tr>";

        echo "<td>";
        echo $file[0];
        echo "</td>";

        echo "<td>";
        echo $file[1];
        echo "</td>";

        echo "<td>";
        echo $file[2];
        echo "</td>";

        echo "<td>";
        echo $file[3];
        echo "</td>";

        echo "<td>";
        echo $file[4];
        echo "</td>";

        echo "<td>";
        echo $file[5];
        echo "</td>";
    }
    echo "</tr>";
    echo "</table>";

    mysqli_close($mysqli);



    // foreach ($result as $fila) {

    //     echo "<tr>";
    //     echo "<td>$fila[id]</td>";
    //     echo "<td>$fila[Origen]</td>";
    //     echo "<td>$fila[Destino]</td>";
    //     echo "<td>$fila[Fecha]</td>";
    //     echo "<td>$fila[Companya]</td>";
    //     echo "<td>$fila[ModeloAvion]</td>";
    // }
    // echo "</tr>";
    // echo "</table>";


    ?>
</body>

</html>

<!-- echo "<table border = 2>";
    echo "<th>Nombre del acctor</th>";
    echo "<th>Nombre del personaje</th>";
    echo "<th>Género</th>";
    echo "<th>Año de nacimiento</th>";
    echo "<th>Edad</th>";
    echo "<th>Foto</th>";

    foreach ($personajes as $infoRow) {

        echo "<tr>";
        echo "<td>$infoRow[nombreReal]</td>";
        echo "<td>$infoRow[nombreSerie]</td>";
        echo "<td>$infoRow[genero]</td>";
        echo "<td>$infoRow[nacimiento]</td>";
        echo "<td>",calcularEdad($infoRow),"</td>";
        echo "<td><img class = 'image' src='$infoRow[foto]'/></td>"; -->