<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>precios</title>
    <link rel="icon" href="LOGO TRANSPARENTE.png" type="image/x-icon">
    <style type="text/css">
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    border: none;
    outline: none;
    scroll-behavior: smooth;
    font-family: 'Poppins', sans-serif;
}
:root {
    --bg-color: #081b29;
    --second-bg-color: #112e42;
    --text-color: #ededed;
    --main-color: #00abf0;
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
}
body{
    background: var(--bg-color);
    color: var(--text-color);
}

.promo button:hover {
  transform: scale(1.1);
  transition: transform 0.5s ease-in-out;
}

/* Resto del código sin cambios */

.promos {
  width: 800px;
  margin: 0 auto;
  margin-top: 150px;
}
.promo {
  width: 250px;
  background: #0F1012; 
  color: #f9f9f9;
  float: left;
  border-radius: 20px;
  border: 2px solid #0ef;
    box-shadow: 0 0 25px #0ef ;
    overflow: hidden;
}
.deal {
  padding: 10px 0 0 0;
}
.deal span {
  display: block;
  text-align: center;
}
.deal span:first-of-type {
  font-size: 23px;  
}
.deal span:last-of-type {
  font-size: 13px;
}
.promo .price {
  display: block;
  width: 250px;  
  background: #292b2e;
  margin: 15px 0 10px 0;
  text-align: center;
  font-size: 23px;
  padding: 17px 0 17px 0;
}
ul {
  display: block;
  margin: 20px 0 10px 0;
  padding: 0;
  list-style-type: none;
  text-align: center;
  color: #999999;
}
li {
  display: block;
  margin: 10px 0 0 0;
}
button {
  border: none;
  border-radius: 40px;
  background: #292b2e;
  color: #f9f9f9;
  padding: 10px 37px;
  margin: 10px 0 20px 60px;
}
.scale {
  transform: scale(1.2);
  box-shadow: 0 0 4px 1px rgba(20, 20, 20, 0.8);
}
.scale button {
  background: #64AAA4;
}
.scale .price {
  color: #64AAA4;
}
header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 2rem 9%;
    background: transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}
.logo {
    font-size: 2.5rem;
    color: var(--text-color);
    font-weight: 600;
}

.navbar a {
    font-size: 1.7rem;
    color: var(--text-color);
    font-weight: 500;
    margin-left: 3.5rem;
    transition: .3s;
}

.navbar a:hover,
.navbar a.active {
    color: var(--main-color);
}

#menu-icon{
    font-size: 3.6rem;
    color: var(--text-color);
    cursor: pointer;
    display: none;

}
@media (max-width: 1200px ){
    html{
        font-size:55%;
    }
}
    @media (max-width: 767px) {
            .promos {
                width: 85%;
                margin-top: 80px; /* Ajuste del margen superior para evitar la superposición con el encabezado */
                justify-content:center ;
                align-items: center;

            }

            .promo {
                width: 85%;
                margin-bottom: 50px;
                justify-content:center ;
                align-items: center;
            }
                .promo .scale {
                width: 85%;
                margin-bottom: 50px;
                justify-content:center ;
                align-items: center;
                padding-left: 30px;
            }

            .promo button {
                margin-auto ; /* Centrar el botón */
            }
        }
    </style>
</head>
<body>
    <?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Si no está autenticado, redirige al formulario de inicio de sesión
    header("Location: login1.php");
    exit();
}
?>
        <header class="header">
        <a href="#" class="logo">Michael.</a>
        <div class="bx bx-menu" id="menu-icon"></div>
        <nav class="navbar">
            <a href="index.php">Volver</a>
            <a href="logout.php">Cerrar Sesión</a>
        </nav>
    </header>
<div class="promos">  
<div class="promo">
  <div class="deal">
    <span>Premium</span>
    <span>Servicios durante 3 meses</span>
  </div>
  <span class="price">79€</span>
  <ul class="features">
    <li>Te ofrecemos servicios</li>
    <li>y ademas un equipo antimalware</li>
    <li>y mucho más</li>   
  </ul>
  <button onclick="playMusic()" >Contratar</button>
</div>
<div class="promo scale">
  <div class="deal">
    <span>Plus</span>
    <span>Servicios durante 1 año</span>
  </div>
  <span class="price">89€</span>
  <ul class="features">
    <li>Te ofrecemos servicios</li>
    <li>las 24hs del día</li>
    <li>y mucho más</li>   
  </ul>
  <button onclick="playMusic3()">Contratar</button>
</div>
<div class="promo">
  <div class="deal">
    <span>Básico</span>
    <span>Servicios durante 1 mes</span>
  </div>
  <span class="price">50€</span>
  <ul class="features">
    <li>Esta opción es para usuarios  </li>
    <li> que desconfian de nosotros</li>
    <li>y cuentan con una garantia</li>   
  </ul>
  <button onclick="playMusic2()">Contratar</button>
</div>
</div>

<audio id="backgroundMusic" loop>
    <source src="rick1.mp3" type="audio/mp3">
</audio>

<audio id="backgroundMusic2" loop>
    <source src="rick2.mp3" type="audio/mp3">
</audio>
<audio id="backgroundMusic3" loop>
    <source src="rick3.mp3" type="audio/mp3">
</audio>
<script>


    function playMusic() {
        var audio = document.getElementById("backgroundMusic");

         if (audio.paused) {
            audio.play();
        } else {
            audio.pause();
            audio.currentTime = 0; // Reinicia al principio
        }
    }
     function playMusic2() {
        var audio = document.getElementById("backgroundMusic2");

        if (audio.paused) {
            audio.play();
        } else {
            audio.pause();
            audio.currentTime = 0; // Reinicia al principio
        }
    }
     function playMusic3() {
        var audio = document.getElementById("backgroundMusic3");

        if (audio.paused) {
            audio.play();
        } else {
            audio.pause();
            audio.currentTime = 0; // Reinicia al principio
        }
    }
</script>
</body>
</html>
