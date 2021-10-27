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

    function creaConexion() {

    @$mysqli = mysqli_connect('localhost', 'developer', 'developer', 'agenciaviajes');
    $error = mysqli_connect_errno();

    if ($error != null) {
        echo "<p>Error $error conectando a la base de datos:" . mysqli_connect_error() . "</p>";
        exit();
    }
    return $mysqli;
}

    function creaVuelo($origen, $destino, $fecha, $companya, $modeloAvion) {

    $mysqli = creaConexion();
    
    $sql = "INSERT INTO `vuelos` (Origen,Destino,Fecha,Companya,ModeloAvion) VALUES (?,?,?,?,?)";
    $consulta = mysqli_stmt_init($mysqli);

    if ($stmt = mysqli_prepare($mysqli, $sql)) {
        mysqli_stmt_bind_param($stmt, "sssss", $Origen, $Destino, $Fecha, $Companya, $ModeloAvion);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }
    mysqli_close($mysqli);
}

    function modificaDestino ($id, $destino) {

        $mysqli = creaConexion();
        $retorno = false;
        $sql = "UPDATE `vuelos` SET `Destino` = ? WHERE `id` = ?";
        $consulta = mysqli_stmt_init($mysqli);

        if ($stmt = mysqli_prepare($mysqli, $sql)) {
            mysqli_stmt_bind_param($stmt, "si", $Destino, $id);
            $retorno = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
        }

        mysqli_close($mysqli);
        return $retorno;
    }

?>

