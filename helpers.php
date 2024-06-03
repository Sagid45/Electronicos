<?php
    function View($view, $param = array(), $masterpage = '') {
        extract($param);    
        ob_start();
        $file = "view/$view.view.php";
        if (file_exists($file)) {
            require $file;
        } else {
            echo "Vista no encontrada: $file"; // Línea de depuración
        }
        $view_content = ob_get_clean();
        if ($masterpage == '') {
            require 'view/masterpage/masterpage.default.view.php';    
        } else {
            require "view/masterpage/masterpage.$masterpage.view.php";
        }
    }

    function Controller($controller) {
        if (empty($controller)) {
            $controller = 'home';
        }        
        $file = "controller/$controller.php";
        if (file_exists($file)) {
            require $file;    
        } else {
            echo "Controlador no encontrado: $file"; // Línea de depuración
            require 'controller/error404.php';
        }    
    }
?>
