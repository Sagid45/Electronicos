<?php
    require_once 'IProducto.php';
    require_once 'config.php';

    class EliminarProducto implements IProducto
    {
        public function ejecutar($params)
        {
            $conn = new mysqli(s,u,p,bd);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $stmt = $conn->prepare("CALL EliminarProducto(?)");
            $stmt->bind_param("i", $params['id']);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }
    }
?>
