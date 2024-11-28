<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Resultados</h1>
        <nav>
            <a href="index.html" class="btn">Volver a Inicio</a>
        </nav>
    </header>
    <?php
    echo "<h1>Resultados</h1>";
    if (isset ($_POST["conocias"]) && isset ($_POST["biblio"])) {
        echo "Conocias: " . $_POST["conocias"];
        echo "<br>";
        echo "Biblio: " . $_POST["biblio"];
        echo "<br>";
        echo "<br>";
    
    if ($_POST["conocias"] == "si" && $_POST["biblio"] == "si"){
        echo "Vamos por buen camino";
        echo "<br>";
    }	
    else {
        echo "No dejes para mañana lo que puedes leer hoy.";
        echo "<br>";
        echo "<br>";
    }
    }
    if (isset($_POST["cual"])) {
        if (!empty($_POST["cual"])) {
            echo "¿Cuál?: " . $_POST["cual"];
            echo "<br>";
        } else {
            echo "Podrías empezar con Dora Barrancos.";
            echo "<br>";
        }
    }
    
    if (isset($_POST["cual_biblio"])) {
        if (!empty($_POST["cual_biblio"])) {
            echo "¿Cuál en bibliografía?: " . $_POST["cual_biblio"];
            echo "<br>";
        } else {
            echo "Te recomendamos Historia mínima de los feminismos en América Latina";
            echo "<br>";
            echo "<br>";
        }
    }
    
    if (isset ($_POST["materia"])){
        if (!empty($_POST["cual"])) {
            echo "Materia:" . $_POST["materia"];
            echo "<br>";
        } else {
            echo "Y tambien le podes sugerir a tu profe que visite nuestra página.";
            echo "<br>";
        }
    }
    
    ?>
