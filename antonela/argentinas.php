<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argentinas - Sociólogas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Argentinas</h1>
        <nav>
            <a href="index.html" class="btn">Volver a Inicio</a>
        </nav>
    </header>

    <?php
    include("datos.php");
    ?>

    <section>
        <h2>Sociólogas Argentinas</h2>
        <p>Las sociólogas argentinas han tenido un rol fundamental en la investigación sobre movimientos sociales,
            feminismo y derechos humanos en Argentina.</p>
        
        <ul>
        <?php
        foreach ($argentinas as $nombre => $datos) {
            echo '<li><a href="autora.php?nombre=' . $nombre . '"><strong>' . $datos['nombre'] . ' (' . $datos['fecha'] . ')</strong></a></li>';
        }
        ?>
        </ul>
    </section>

</body>
</html>
