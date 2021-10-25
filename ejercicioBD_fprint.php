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
        printf("%s", $file->ModeloAvion); // printf($file->ModeloAvion);
        echo "</td>";
    }
    echo "</tr>"; // Debe ir pa dentro del while
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

    ?>
</body>

</html>