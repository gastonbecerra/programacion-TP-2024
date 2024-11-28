<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['mensaje'])) {
    $nombre = htmlspecialchars(trim($_POST['nombre']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mensaje = htmlspecialchars(trim($_POST['mensaje']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit();
    }
} else {
    header("Location: ../front/index.html");
    exit();
}

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");
header("Expires: 0");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Procesados</title>
    <link rel="stylesheet" href="../front/styles.css">
</head>
<body>
    <h1>Gracias por tu mensaje</h1>
    <p><strong>Nombre:</strong> <?php echo htmlentities($nombre); ?></p>
    <p><strong>Correo Electrónico:</strong> <?php echo htmlentities($email); ?></p>
    <p><strong>Mensaje:</strong> <?php echo nl2br(htmlentities($mensaje)); ?></p>

    <a href="../front/index.html">Volver al Inicio</a>
</body>
</html>