<?php
session_start();
require 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];

    $sql = "SELECT * FROM usuarios WHERE correo = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$correo]);
    $usuario = $stmt->fetch();

    if ($usuario && password_verify($contraseña, $usuario['contraseña'])) {
        session_start();
        $_SESSION['usuario_id'] = $usuario['id'];
        header("Location: dashboard.php");
    } else {
        echo "Correo o contraseña incorrectos";
    }
}
<?