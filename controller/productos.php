<?php
    require_once 'libreria/Factory.php';

    function productos() {
        require 'config.php';
        $conn = new mysqli(s, u, p, bd);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query("SELECT * FROM productos");
        if (!$result) {
            echo "Error en la consulta: " . $conn->error;
        }
        $productos = $result->fetch_all(MYSQLI_ASSOC);
        $conn->close();
        View('productos', ['productos' => $productos]);
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['action'])) {
            $operacion = Factory::elegirOperacion($_POST['action']);
            $operacion->ejecutar($_POST);
            header("Location: ?home");
            exit();
        }
    } else {
        productos();
    }
?>
