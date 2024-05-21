<?php
session_start();

$conexion = new mysqli('localhost', 'root', 'A31543154a.', 'registro');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña']; // No hasheamos la contraseña aquí

$consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
$resultado = $conexion->query($consulta);

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


