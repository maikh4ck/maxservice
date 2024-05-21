<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"> 
	<link rel="stylesheet" type="text/css" href="styleLogin.css">
	<title>Login</title>
	<link rel="stylesheet"  href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
	<link rel="icon" href="LOGO TRANSPARENTE.png" type="image/x-icon">
</head>
<body>
	<div class="envoltura">
		<span class="bg-animate"></span>
		<span class="bg-animate2"></span>
<?php
session_start();

// Verifica si el usuario ya está autenticado
if (isset($_SESSION['usuario'])) {
    // Si está autenticado, redirige a la página principal
    header("Location: index.php"); // Ajusta el nombre de tu página principal
    exit();
}
?>
<!-- Tu contenido HTML del formulario de inicio de sesión -->
		<div class="caja-forma login">
			<h2 class="animation" style="--i:0;--j:21;">Inicia Sesion</h2>
			<form action="login.php" method="post">
				<div class="input-caja animation"
				style="--i:1;--j:22;">
						<input type="text" name="usuario" required>
						<label>Usuario</label>
						<i class="bx bxs-user"></i>
				</div>
				<div class="input-caja animation"
				style="--i:2;--j:23;">
						<input type="password" name="contraseña" required>
						<label>Contraseña</label>
						<i class='bx bxs-lock-alt'></i>
				</div>
				<button type="submit" class="btn animation" 
				style="--i:3;--j:24;">Inicia Sesion</button>
				<div class="logreg-link animation" 
				style="--i:4;--j:25;">
					<p>¿No tienes una cuenta? <a href="#" class="register-link">Crea una</a> </p>
				</div>
			</form>
		</div>
		<div class="info-text login ajuste">
			<h2 class="animation" style="--i:0;--j:20">¡Bienvenido Amigo!</h2>
			<p class="animation" style="--i:1;--j:21">registrate o inicia sesion para poder acceder a la pagina</p>
		</div>
			<?php 
	 // Verifica si hay un mensaje de error en la sesión
        if (isset($_SESSION['error_message'])) {
            echo '<div class="error animation"style="--i:23; --j:5">
            ' . $_SESSION['error_message'] . '</div>';
           unset($_SESSION['error_message']);
        }
	 ?>
			<div class="caja-forma register">
			<h2 class="animation" style="--i:17; --j:0">Registrate</h2>
			<form action="register.php" method="post">
				<div class="input-caja animation" 
				style="--i:18;--j:1;">
						<input type="text" name="usuario" required>
						<label>Usuario</label>
						<i class="bx bxs-user"></i>
				</div>
				<div class="input-caja animation" 
				style="--i:19; --j:2">
						<input type="email" name="email" required>
						<label>Email</label>
						<i class="bx bxs-envelope"></i>
				</div>
				<div class="input-caja animation" 
				style="--i:20; --j:3">
						<input type="password" name="contraseña" required>
						<label>Contraseña</label>
						<i class='bx bxs-lock-alt'></i>
				</div>
				<button type="submit" class="btn animation" 
				style="--i:21; --j:4">Registrate</button>
				<div class="logreg-link animation" 
				style="--i:22; --j:5">
					<p>¿tienes una cuenta? <a href="#" class="login-link">Inicia Sesion</a> </p>
				</div>
			</form>
		</div>

		<div class="info-text register">
			<h2 class="animation" style="--i:17; --j:0">¡Bienvenido Amigo!</h2>
			<p class="animation" style="--i:18; --j:1">registrate o inicia sesion para poder acceder a la pagina</p>
		</div>
	</div>
	<script src="script.js"></script>
</body>
</html>