<?php
    require_once 'IProducto.php';
    require_once 'config.php';

    class ModificarProducto implements IProducto
    {
        public function ejecutar($params)
        {
            $conn = new mysqli(s, u, p, bd);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $stmt = $conn->prepare("CALL ModificarProducto(?, ?, ?, ?)");
            $stmt->bind_param("issd", $params['id'], $params['nombre'], $params['descripcion'], $params['precio']);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }
    }
?>