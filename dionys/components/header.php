<?php
// Obtén la ruta actual
$rutaActual = parse_url($_SERVER['REQUEST_URI'])['path'];

// Define las rutas para Dionys y Brian
$rutaDionys = '/dionys.php';
$rutaBrian = '/brian.php';

// Verifica la ruta actual e incluye el archivo correspondiente
if ($rutaActual === $rutaDionys) {
    include 'dionys/header.html';
} elseif ($rutaActual === $rutaBrian) {
    include 'brian/header.html';
} else {
    ?>
    <div class="profile-container">
        <div> 
            <h1>Contáctanos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="header-tercer-col">
            </div> 
    <?php  
}
?>