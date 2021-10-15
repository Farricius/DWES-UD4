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
    $file = fopen("personajes.txt", "r");

    echo ("<table border = 2");
    while (feof($file) != true) {
        echo ("<tr>");
        $personaje = fgets($file);
        echo ("<td> $personaje</td>");
        echo ("</tr>");
    }


    fclose($file);

    $file = fopen("personajes.txt", "a+");
    fwrite($file, " Farrij,180,83,black,light,black,24,male,Andalusia,Human");
    fclose($file);

    //td y tr

    //str_getcsv($personaje, ",");


    ?>
</body>

</html>