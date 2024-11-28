<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"];
    $destinatario = $_POST['destinatario'];

    // Aquí puedes enviar un email, guardar los datos en una base de datos, etc.
    if ($destinatario == 'brian') {
        $redirectUrl = "brian.php";
        // Enviar correo a Brian
    } else {
        $redirectUrl = "dionys.php";
        // Enviar correo a Dionys
    }

    echo "<script>
        alert('¡Gracias por tu mensaje, $nombre!');
            setTimeout(function() {
                window.location.href = '$redirectUrl';
            }, 5000); // 5000 milliseconds = 5 seconds
          </script>";
}
?>