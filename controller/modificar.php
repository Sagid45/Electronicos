<?php
    require_once 'config.php';

    function modificar()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $conn = new mysqli(s, u, p, bd);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $stmt = $conn->prepare("SELECT * FROM productos WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $producto = $result->fetch_assoc();
            $stmt->close();
            $conn->close();
            View('modificar', ['producto' => $producto]);
        } else {
            header("Location: ?pagina=productos");
            exit();
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['action']) && $_POST['action'] == 'modificar') {
            $operacion = Factory::elegirOperacion('modificar');
            $operacion->ejecutar($_POST);
            header("Location: ?pagina=productos");
            exit();
        }
    } else {
        modificar();
    }
?>

