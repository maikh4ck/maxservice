<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Maxservices</title>
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="estilos.css">
    <link rel="icon" href="LOGO TRANSPARENTE.png" type="image/x-icon">
	<!-- box icons-->
</head>
<body>
<!--comprobacion de si el usuario esta registrado o no-->
<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Si no está autenticado, redirige al formulario de inicio de sesión
    header("Location: login1.php");
    exit();
}
?>

<!--contenido de la página principal -->
    <!-- diseño de cabecera (menu) -->
    <header class="header">
    	<a href="#" class="logo">Michael. <span class="animate" style="--i:1;"></span></a>
    	<div class="bx bx-menu" id="menu-icon"><span class="animate" style="--i:2;"></span></div>
    	<nav class="navbar">
    		<a href="#inicio" class="active">Inicio</a>
    		<a href="#about">Sobre mi</a>
    		<a href="#vulnerabilidades">Máquinas</a>
    		<a href="#contactanos">Contactanos</a>
    		<a href="logout.php">Cerrar Sesión</a>

            <span class="active-nav"></span>
            <span class="animate" style="--i:2;"></span>
    	</nav>
    </header>

    <!-- Inicio section design -->
    <section class="home show-animate" id="inicio">
    	<div class="home-content">
    		<h1>Hola, Soy <span>Michael Perozo</span><span class="animate" style="--i:2;"></span></h1>
    		<div class="text-animate">
    			<h3>Pentester Profesional</h3>
                <span class="animate" style="--i:3;"></span>
    		</div>
    		<p>Hola me llamo Michael, tambien conocido como Maikhack, en esta página vas a encontrar
    		tanto noticias sobre hacking, vulnerabilidades de maquinas que he hackeado,también me puedes
    	contactar para solucionar dudas u ofrecerte servicios para testear tus maquinas, tu red etc..
                <span class="animate" style="--i:4;"></span>
            </p>
    		
            <div class="btn-box">
    		<a href="https://iso-maik.blogspot.com" target="_blank" class="btn">Mi blog</a>
    		<a href="precios.php" class="btn">Contratame</a>
            <span class="animate" style="--i:5;"></span>
    		</div>
    	</div>
    	<div class="home-sci">
			<a href="https://www.instagram.com/maikhack/"><i class='bx bxl-instagram' ></i></a>
			<a href="https://www.youtube.com/@maikhack123/videos"><i class='bx bxl-youtube'></i></a>
			<a href="https://www.tiktok.com/@maxpro720?is_from_webapp=1&sender_device=pc"><i class='bx bxl-tiktok'></i>
            </a>
            <span class="animate" style="--i:6;"></span>
    	</div>
    	<div class="home-imgHover"></div>
        <span class="animate home-img" style="--i:7;"></span>
    </section>
    <!-- (sobre mi) section design -->
   <section class="about" id="about">
        <h2 class="heading">Sobre <span>Mi</span> <span class="animate scroll" style="--i:1;"></span></h2>

        <div class="about-img">
            <img src="about(2).jpg" alt="sobre mi">
            <span class="circle-spin"></span>
             <span class="animate scroll" style="--i:2;"></span>
        </div>

        <div class="about-content">
            <h3>Pentester Profesional<span class="animate scroll" style="--i:3;"></span></h3>
            <p>Hola me llamo Michael, tambien conocido como Maikhack. Me encanta la informatica
            sobre todo el tema de pentesting a si que he estado durante un tiempo investigando y formandome
        para poder trabajar de esto, mis habilidades son muy buenas y cada vez voy aprendiendo más y más.
            <span class="animate scroll" style="--i:4;"></span>
            </p>
        
            <div class="btn-box btns">
                <a href="#" class="btn">Leer más</a>
                <span class="animate scroll" style="--i:5;"></span>
            </div>
        </div>
    </section>

    <!-- maquinas y vulnerabilidades + noticias (education) section design -->
    <section class="education" id="vulnerabilidades">
        <h2 class="heading">Máquinas y <span>vulnerabilidades</span><span class="animate scroll" style="--i:1;"></span></h2>
        <div class="education-row">
            <div class="education-column">
                <h3 class="title">Máquinas<span class="animate scroll" style="--i:2;"></span></h3>
                <div class="education-box">
                    <a href="https://youtu.be/Bh6T5KwDtiM" target="_blank">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bx-devices'></i> 29-04-2024</div>
                            <h3>Máquina linux - DarkHole 2</h3>
                            <p><strong>En esta máquina vemos las siguientes técnicas:</strong> Information Leakage, Github Project Enumeration, SQLI (SQL Injection), Chisel (Remote Port Forwarding) + Abusing Internal Web Server, Bash History - Information Leakage [User Pivoting], Abusing Sudoers Privilege [Privilege Escalation]</p>
                        </div>
                    </div>
                    </a>
                    <a href="https://youtu.be/K8fBDCtYeDA" target="_blank">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bx-devices'></i>08-05-2024</div>
                            <h3>Máquina linux - IMF</h3>
                            <p><strong>En esta máquina vemos las siguientes técnicas:</strong> Information Leakage, Abusing Web Page - User Enumeration Vulnerability (Login), SQLI (SQL Injection) [Boolean Based Blind] + Python Scripting [Manual], Abusing Image Upload Form [RCE] + WAF Bypass, Custom Binary Exploitation - Ghidra Anlysis, Custom Binary Exploitation - Buffer Overflow x32 bits (ret2reg technique) [Privilege Escalation]</p>
                        </div>
                    </div>
                    </a>
                    <a href="https://youtu.be/MjjmEAaMyXk" target="_blank">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bx-devices'></i>13-05-2024</div>
                            <h3>Máquina linux - DarkHole 2</h3>
                            <p><strong>En esta máquina vemos las siguientes técnicas:</strong> Web Enumeration,Abusing password change panel - Password change for admin user, Abusing File Upload - Uploading malicious PHAR archive, Abusing custom SUID binary - User Pivoting, Abusing sudoers privilege - Python script manipulation [Privilege Escalation] </p>
                        </div>
                    </div>
                    </a>
                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>

        <div class="education-column">
                <h3 class="title">Noticias<span class="animate scroll" style="--i:2;"></span></h3>

                <div class="education-box">
                    <a href="https://youtu.be/6AqNGwU45-w?si=LYapwGbqiJ3POY01" target="_blank">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-tv'></i>4-01-2024</div>
                            <h3>El hacker que tumbó a Orange</h3>
                            <p>El 3 de enero, Orange España sufrió un ciberataque, causando una interrupción generalizada del servicio de internet. El atacante, "Ms_Snow_OwO", accedió a la cuenta de Orange en RIPE NCC utilizando una contraseña débil previamente comprometida por un malware. Modificó el número AS asociado a la dirección IP de Orange España, resultando en una pérdida del 50% del tráfico.</p>
                        </div>
                    </div>
                    </a>
                    <a href="https://youtu.be/ob-sisvI3lk?si=vvO3MeX056Ax6Bzm" target="_blank"> 
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-tv'></i>23-11-2023</div>
                            <h3>Hackean CCOO</h3>
                            <p>El portal web de Comisiones Obreras (CCOO) fue blanco de un ciberataque que lo dejó inutilizado y con mensajes críticos contra los sindicatos del Gobierno.El atacante, conocido como "Farlopa", explicó cómo aprovechó una vulnerabilidad en el sitio web para realizar el hackeo.</p>
                    </div>
                </div>
                </a>  
                <a href="https://youtu.be/wS-x6vcpkr4?si=ryyAaihH7tS3L8Bu" target="_blank"> 
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-tv'></i>7-02-2024</div>
                            <h3>Rompen el cifrado BitLocker</h3>
                            <p>El cifrado BitLocker, presente en Windows desde Vista, se ha vuelto popular por su simplicidad y gratuidad en versiones Pro y Enterprise. Sin embargo, se ha demostrado que puede ser vulnerado utilizando una Raspberry Pi Pico en tan solo 43 segundos.</p>
                        </div>
                    </div>
                </a>
                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>

        </div>

    </section>
    <!-- contact section design -->
    <section class="contact" id="contactanos">
        <h2 class="heading">Contactame y <span>Pregunta</span> <span class="animate scroll" style="--i:1;"></span></h2>
        <form action="" method="post">
            <div class="input-box">
                <div class="input-field">
                    <input type="text" placeholder="Nombre Completo" name="nombre" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="email" placeholder="Dirección gmail" name="nombre" required>
                    <span class="focus"></span>
                </div>
                <span class="animate scroll" style="--i:3;"></span>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="number" placeholder="Telefono" name="telefono" required>
                    <span class="focus"></span>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Asunto" name="asunto" required>
                    <span class="focus"></span>
                </div>
                <span class="animate scroll" style="--i:5;"></span>
            </div>
            <div class="textarea-field">
                <textarea name="mensaje" id="" cols="30" rows="10" placeholder="mensaje" required></textarea>
                <span class="focus"></span>
                <span class="animate scroll" style="--i:7;"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" class="btn" value="enviar">Enviar</button>
                <span class="animate scroll" style="--i:9;"></span>
            </div>
        </form>
    </section>

    <!-- footer design -->
    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Maikhack | ALL Rights Reserved. </p> 
            <span class="animate scroll" style="--i:1;"></span>
        </div>
        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
            <span class="animate scroll" style="--i:3;"></span>
        </div>
    </footer>
   <script src="script1.js"></script>
</body>
</html>
