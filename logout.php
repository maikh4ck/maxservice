<?php
// Inicia la sesión (asegúrate de hacerlo al principio de cada script)
session_start();

// Destruye todas las variables de sesión
session_unset();

// Destruye la sesión
session_destroy();

// Redirige al usuario al formulario de inicio de sesión
header("Location: login1.php");
exit();
?>
