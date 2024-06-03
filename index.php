<?php
    require 'helpers.php';
   // echo "Helpers loaded"; // Línea de depuración
    $pagina = 'home';
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    }
    //echo "Página: $pagina"; // Línea de depuración
    Controller($pagina);
?>

