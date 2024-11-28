
<?php
// Inicializar variables
$usuario_instagram = $tiempo_uso = $facilidad = $influencia = $otra_red_social = $porque_no_ig = "";

// Procesar el formulario cuando el usuario lo envíe
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pregunta sobre si es usuario de Instagram
    if (isset($_POST['usuario_instagram'])) {
        $usuario_instagram = $_POST['usuario_instagram'];
    }
    
    if ($usuario_instagram == "no") {
        $porque_no_ig = $_POST['porque_no_ig'] ?? '';
        $otra_red_social = $_POST['otra_red_social'] ?? '';
    }

    if (isset($_POST['tiempo_uso'])) {
        $tiempo_uso = $_POST['tiempo_uso'];
    }

    if (isset($_POST['facilidad'])) {
        $facilidad = $_POST['facilidad'];
    }

    if (isset($_POST['influencia'])) {
        $influencia = $_POST['influencia'];
    }
};
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta sobre Instagram</title>
    <link href="estilodos.css" rel="stylesheet">
</head>
<body>

<h1>Encuesta sobre Instagram</h1>

<!-- Formulario de la encuesta -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    <!-- Pregunta 1: ¿Sos usuario de Instagram? -->
    <label>¿Sos usuario de Instagram?</label><br>
    <input type="radio" name="usuario_instagram" value="si" required> Sí<br>
    <input type="radio" name="usuario_instagram" value="no"> No<br><br>

    <div id="no-ig-questions" style="display:none;">
        <label>¿Por qué no usás Instagram?</label><br>
        <textarea name="porque_no_ig" rows="3" cols="40"></textarea><br><br>

        <label>¿Usás otra red social?</label><br>
        <input type="text" name="otra_red_social" placeholder="Ej: Facebook, Twitter, TikTok..."><br><br>
    </div>

    <!-- Pregunta 2: ¿Cuánto tiempo usás Instagram? -->
    <label>¿Cuánto tiempo usás Instagram?</label><br>
    <input type="radio" name="tiempo_uso" value="menos_de_una_hora" required> Menos de una hora<br>
    <input type="radio" name="tiempo_uso" value="entre_una_y_dos_horas"> Entre una hora y dos horas<br>
    <input type="radio" name="tiempo_uso" value="mas_de_dos_horas"> Más de dos horas<br><br>

    <!-- Pregunta 3: ¿Te resulta fácil entender el funcionamiento y la dinámica de IG? -->
    <label>¿Te resulta fácil entender el funcionamiento y la dinámica de IG?</label><br>
    <input type="radio" name="facilidad" value="si" required> Sí<br>
    <input type="radio" name="facilidad" value="no"> No<br><br>

    <!-- Pregunta 4: ¿Crees que IG influyó en alguna acción de tu vida? -->
    <label>¿Crees que IG influyó en alguna acción de tu vida, ya sea comprar algo o en alguna opinión?</label><br>
    <input type="radio" name="influencia" value="si" required> Sí<br>
    <input type="radio" name="influencia" value="no"> No<br><br>

    <input type="submit" value="Enviar">
</form>

<!-- Mostrar las respuestas del formulario después de enviarlo -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Respuestas recibidas:</h2>";
    echo "<p><strong>¿Sos usuario de Instagram?:</strong> " . htmlspecialchars($usuario_instagram) . "</p>";
    echo "<p><strong>¿Cuánto tiempo usás Instagram?:</strong> " . htmlspecialchars($tiempo_uso) . "</p>";
    echo "<p><strong>¿Te resulta fácil entender Instagram?:</strong> " . htmlspecialchars($facilidad) . "</p>";
    echo "<p><strong>¿Crees que IG influyó en alguna acción?:</strong> " . htmlspecialchars($influencia) . "</p>";
    
    if ($usuario_instagram == "no") {
        echo "<p><strong>¿Por qué no usás Instagram?:</strong> " . htmlspecialchars($porque_no_ig) . "</p>";
        echo "<p><strong>¿Usás otra red social?:</strong> " . htmlspecialchars($otra_red_social) . "</p>";
    }
}
?>

<button>
    <a href="introduccion.html">Volver al inicio</a>
</button>

<script src="scriptss.js"></script>

</body>
</html>