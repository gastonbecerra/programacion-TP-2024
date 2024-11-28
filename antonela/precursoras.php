<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precursoras - Sociólogas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Precursoras</h1>
        <nav>
            <a href="index.html" class="btn">Volver a Inicio</a>
        </nav>
    </header>

    <?php
    include("datos.php");
    ?>

    <section>
        <h2>Sociólogas Precursoras</h2>
        <p>Las precursoras de la sociología son aquellas mujeres que, antes de que la sociología se formalizara 
            como disciplina académica, ya estaban trabajando en el análisis y estudio de las sociedades. 
            Ellas sentaron las bases para futuras investigaciones y teorías.</p>

        <ul>
    <?php
    foreach ($precursoras as $nombre => $datos) {
        echo '<li><a href="autora.php?nombre=' . $nombre . '" class="autora-link"><strong>' . $datos['nombre'] . ' (' . $datos['fecha'] . ')</strong></a></li>';
    }
    ?>
        </ul>
    </section>

</body>
</html>

