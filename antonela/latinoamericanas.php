<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latinoamericanas - Sociólogas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Latinoamericanas</h1>
        <nav>
            <a href="index.html" class="btn">Volver a Inicio</a>
        </nav>
    </header>

    <?php
    include("datos.php");
    ?>

    <section>
        <h2>Sociólogas Latinoamericanas</h2>
        <p>Las sociólogas latinoamericanas han abordado temas cruciales sobre la desigualdad, los derechos humanos,
            y las luchas sociales en América Latina.</p>
        
        <ul>
        <?php
        foreach ($latinoamericanas as $nombre => $datos) {
            echo '<li><a href="autora.php?nombre=' . $nombre . '"><strong>' . $datos['nombre'] . ' (' . $datos['fecha'] . ')</strong></a></li>';
        }
        ?>
        </ul>
    </section>

</body>
</html>
