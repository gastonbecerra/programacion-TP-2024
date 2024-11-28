<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clásicas - Sociólogas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Clásicas</h1>
        <nav>
            <a href="index.html" class="btn">Volver a Inicio</a>
        </nav>
    </header>

    <?php
    include("datos.php");
    ?>

    <section>
        <h2>Sociólogas Clásicas</h2>
        <p>Las sociólogas clásicas contribuyeron significativamente al desarrollo de la teoría sociológica y
            fueron pioneras en temas de género, sociedad y política.</p>
        
        <ul>
        <?php
        foreach ($clasicas as $nombre => $datos) {
            echo '<li><a href="autora.php?nombre=' . $nombre . '"><strong>' . $datos['nombre'] . ' (' . $datos['fecha'] . ')</strong></a></li>';
        }
        ?>
        </ul>
    </section>

</body>
</html>
