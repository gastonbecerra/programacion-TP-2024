<?php
include("datos.php");

$autora = null;

if (isset($_GET['nombre'])) {
    $nombre = $_GET['nombre'];
    if (array_key_exists($nombre, $precursoras)) {
        $autora = $precursoras[$nombre];
    } elseif (array_key_exists($nombre, $fundadoras)) {
        $autora = $fundadoras[$nombre];
    } elseif (array_key_exists($nombre, $clasicas)) {
        $autora = $clasicas[$nombre];
    } elseif (array_key_exists($nombre, $latinoamericanas)) {
        $autora = $latinoamericanas[$nombre];
    } elseif (array_key_exists($nombre, $argentinas)) {
        $autora = $argentinas[$nombre];
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $autora ? $autora['nombre'] : 'Autora'; ?> - Sociólogas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1><?php echo $autora ? $autora['nombre'] : 'Autora Desconocida'; ?></h1>
    <nav>
        <a href="index.html" class="btn">Volver a Inicio</a>
    </nav>
</header>

<?php if ($autora): ?>
    <div class="header-image">
        <img src="<?php echo $autora['imagen']; ?>" alt="Imagen de <?php echo $autora['nombre']; ?>">
    </div>

     <section>
        <h2><?php echo $autora['nombre'] . " (" . $autora['fecha'] . ")"; ?></h2>
        <p><?php echo $autora['descripcion']; ?></p>
        <p><?php echo $autora['detalles']; ?></p>

        <?php if (isset ($autora ['video']) && !empty ($autora ['video'])): ?>
            <div class="video-container">
                <iframe width="560" height="315" 
                        src="<?php echo $autora['video']; ?>" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                </iframe>
            </div>
        <?php endif; ?> 
         
    </section>
        <p></p>
    </section>
<?php endif; ?>

</body>
</html>
