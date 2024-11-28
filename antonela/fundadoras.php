<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundadoras - Sociólogas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Fundadoras</h1>
        <nav>
            <a href="index.html" class="btn">Volver a Inicio</a>
        </nav>
    </header>
    <?php
    include ("datos.php");
    ?>
    <section>
        <h2>Sociólogas Fundadoras</h2>
        <p>Las fundadoras de la sociología son aquellas mujeres que, antes de que la sociología se 
            formalizara como disciplina académica, ya estaban trabajando en el análisis y estudio de 
            las sociedades. Ellas sentaron las bases para futuras investigaciones y teorías.
        <ul>
        <?php
        foreach ($fundadoras as $nombre => $datos){
            echo '<li><a href="autora.php?nombre='.$nombre;
            echo '"><strong>'.$datos['nombre'].' ('.$datos['fecha'].')</strong></a>';
            echo '</li>';
              }
        
        
       
    ?>