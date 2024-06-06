<?php
// Conexión a la base de datos (reemplaza con tus propios datos)
$conexion = new mysqli('localhost', 'michael', '', 'registro');

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$email = $_POST['email'];
$contraseña = $_POST['contraseña'];

// Cifrar la contraseña con bcrypt
$contraseña_cifrada = password_hash($contraseña, PASSWORD_DEFAULT);

// Consulta SQL para verificar si el usuario ya existe, usando prepared statement
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$resultado_existencia = $stmt->get_result();

if ($resultado_existencia->num_rows > 0) {
    // El usuario ya existe, mostrar un mensaje emergente
    echo '<script>alert("El usuario ya existe. Por favor, elige otro nombre de usuario."); window.location.href = "login1.php";</script>';
} else {
    // El usuario no existe, realizar la inserción en la base de datos, usando prepared statement
    $stmt_insert = $conexion->prepare("INSERT INTO usuarios (usuario, email, contraseña) VALUES (?, ?, ?)");
    $stmt_insert->bind_param("sss", $usuario, $email, $contraseña_cifrada);

    if ($stmt_insert->execute() === TRUE) {
        // Usuario insertado correctamente, redirigir a la página principal
        header("Location: index.php");
        exit();
    } else {
        // Ocurrió un error al insertar el usuario, redirigir a una página de error
        header("Location: login1.php");
        exit();
    }
}

// Cerrar las declaraciones y la conexión
$stmt->close();
$stmt_insert->close();
$conexion->close();
?>
