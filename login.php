<?php
session_start();

$conexion = new mysqli('localhost', 'michael', '', 'registro');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña']; // No hasheamos la contraseña aquí

// Preparamos la consulta SQL para evitar SQL injection
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();

    // Verifica la contraseña utilizando password_verify() en lugar de comparar directamente con md5
    if (password_verify($contraseña, $fila['contraseña'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error_message'] = "Contraseña incorrecta. Intenta nuevamente.";
        header("Location: login1.php");
        exit();
    }
} else {
    $_SESSION['error_message'] = "Usuario o contraseña incorrectos, regístrate";
    header("Location: login1.php");
    exit();
}

$conexion->close();
?>
