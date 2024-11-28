<?php
// $cursos = [
//     "Perspectivas Feministas de la Inteligencia Artificial",
//     "Curso de Capacitación Política, 2024",
//     "Fundamentos de Procesamiento de Lenguaje Natural con Python, 2023"
// ];
require_once 'vendor/autoload.php';
use SQLiteCloud\SQLiteCloudClient;
use SQLiteCloud\SQLiteCloudRowset;

$sqlite = new SQLiteCloudClient();
$sqlite->connectWithString('sqlitecloud://ciipib7znz.sqlite.cloud:8860?apikey=737LKmJDi7E5fYjJLQqEHepODfwq9Kpa6jz5hYrU4VM');

$db_name = 'dbsocio';
$sqlite->execute("USE DATABASE {$db_name}");

$rowset = $sqlite->execute('SELECT nombre FROM curso');
$datos = $rowset->data;

echo "<ol>";
for ($i = 0; $i < count($datos); $i += 1) {
// foreach ($cursos as $curso) {
  $nombre_curso = $datos[$i];

  $certificadoBase = "assets/" . str_replace(" ", "_", strtolower($nombre_curso));
    $extensiones = ["pdf", "png", "jpg"];
    $certificado = null;
    foreach ($extensiones as $extension) {
        $rutaCertificado = $certificadoBase . "." . $extension;
        if (file_exists($rutaCertificado)) {
            $certificado = $rutaCertificado;
            break;
        }
    }

    echo "<li>" . $nombre_curso;
    if ($certificado) {
        echo " - <a href='#' onclick='abrirCertificado(\"$certificado\"); return false;'>Ver Certificado</a>";
    }
    echo "</li>";
}
echo "</ol>";
?>

<script>
function abrirCertificado(ruta) {
  var extension = ruta.split('.').pop().toLowerCase(); // Obtener la extensión del archivo
  if (extension === 'pdf') {
    window.open(ruta, "_blank", "width=800,height=600"); // Abrir PDF en nueva ventana
  } else if (extension === 'png' || extension === 'jpg') {
    // Mostrar imagen en un modal o lightbox (requiere código adicional)
    // Ejemplo con un modal simple:
    var modal = document.createElement('div');
    modal.style.position = 'fixed';
    modal.style.top = '0';
    modal.style.left = '0';
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
    modal.style.display = 'flex';
    modal.style.justifyContent = 'center';
    modal.style.alignItems = 'center';

    var img = document.createElement('img');
    img.src = ruta;
    img.style.maxWidth = '90%';
    img.style.maxHeight = '90%';

    modal.appendChild(img);
    document.body.appendChild(modal);

    modal.onclick = function() {
      document.body.removeChild(modal);
    };
  }
}
</script>