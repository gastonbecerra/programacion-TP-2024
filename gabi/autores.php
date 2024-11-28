<?php
include ("datos.php");
//print_r($autores);
//print_r($imagen);
//print_r($informacion);

foreach($autores as $j => $i){
   

    echo "<a href='autor.php?j=$j'>";
    echo $i;
    echo "</a>";
    echo "<hr>";}
    


?>
