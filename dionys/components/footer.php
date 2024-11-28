<?php
// Obtén la ruta actual
$rutaActual = parse_url($_SERVER['REQUEST_URI'])['path'];

// Define las rutas para Dionys y Brian
$rutaDionys = '/dionys.php';
$rutaBrian = '/brian.php';

// Verifica la ruta actual e incluye el archivo correspondiente
if ($rutaActual === $rutaDionys) {
    include 'dionys/footer.html';
} elseif ($rutaActual === $rutaBrian) {
    include 'brian/footer.html';
} else {
    ?>
    <p>&copy; 2024 Brian & Dionys – B^D</p>
    <?php  
}
?>