<?php 



$definiciones = [
    "comunicacion" => "proceso social basico",
    "autopoiesis" => "Capacidad de un sistema para reproducirse y mantenerse a sí mismo.",
    "influencia" => "Efecto que algo o alguien ejerce sobre otra cosa o persona."
];

?>

<!doctype html>
<html lang="es">

<link href="estilodos.css" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glosario</title>
</head>
<body>

<h1>Definición seleccionada</h1>

<?php


if (isset($_GET['palabra']) && array_key_exists($_GET['palabra'], $definiciones)) {
    $palabra = $_GET['palabra'];
    echo "<h2>$palabra</h2>";
    echo "<p>{$definiciones[$palabra]}</p>";
} else {
    echo "<p>No se ha seleccionado ninguna definición válida.</p>";
}
?>



<button >
<a href="introduccion.html">volver al inicio</a>
</button>

</body>
</html>