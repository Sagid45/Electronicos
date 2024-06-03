<?php
    function home() {
        require 'config.php';
        $conn = new mysqli(s, u, p, bd);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $result = $conn->query("SELECT * FROM vista_productos");
        if (!$result) {
            echo "Error en la consulta: " . $conn->error; //En caso de error mandara este mensaje
        }
        $productos = $result->fetch_all(MYSQLI_ASSOC);
        $conn->close();
        View('home', ['productos' => $productos]);
    }
    home();
?>
