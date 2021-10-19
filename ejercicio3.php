<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Abre el archivo de la forma correcta.
    $file = simplexml_load_file("ejercicio3.xml");

    // Muestra la información del libro 2 con la función printf.

    $libro2 = $file->book[1];

    //printf("Author: %s <br> title: %s <br> genre: %s <br> price: %s <br> publish_date: %s <br> description: %s <br>"
    //not working - todo

    ?>

    <table border="3">
        <tr>
            <th>author</th>
            <th>title</th>
            <th>genre</th>
            <th>price</th>
            <th>publish_date</th>
            <th>description</th>

            <?php
            foreach ($file->book as $libro) {
                echo "<tr><td>" . $libro->author . "</td><td>" . $libro->title . "</td><td>" . $libro->genre . "</td><td>" . $libro->price . "</td><td>" . $libro->publish_date . "</td><td>" . $libro->description . "</td>";
            }

            ?>

    </table>

    <!--
// Añade un libro nuevo al fichero con todos sus atributos y elementos.
// Muestra de nuevo la tabla. 
-->

    <?php
    $milibro = $file->addChild("book");
    $milibro->addAttribute("id", "fa2");

    $milibro->addChild("author", "fali");
    $milibro->addChild("title", "holamundo jaa");
    $milibro->addChild("genre", "Terror");
    $milibro->addChild("price", "37.2");
    $milibro->addChild("publish_date", "2021-02-02");
    $milibro->addChild("description", "Mucho miedo");

    $file->asXML("ejercicio3.xml");
    ?>



</body>

</html>