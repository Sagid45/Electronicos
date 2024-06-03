<?php
    require_once 'IProducto.php';
    require_once 'config.php';

    class AgregarProducto implements IProducto
    {
        public function ejecutar($params)
        {
            $conn = new mysqli(s,u,p,bd);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $stmt = $conn->prepare("CALL InsertarProducto(?,?,?)");
            $stmt->bind_param("ssd", $params['nombre'], $params['descripcion'], $params['precio']);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        }
    }
?>
