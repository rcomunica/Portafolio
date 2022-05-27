<!DOCTYPE html>
<html>
<head>
	<title>rcomunica - Portafolio</title>
	<meta charset="utf-8">
    <!-- Vinculaciones -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&family=Patrick+Hand&family=Radio+Canada:wght@300&family=Zen+Loop&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="styles/style-index.css">
	<link rel="icon" type="icon" href="src/OnlyLogo.ico">
    <!-- FontAwesome -->
    <script src="https://kit.fontawesome.com/03b0ac721b.js" crossorigin="anonymous"></script>
</head>
<body>



	<div class="container">
		<div class="container_nav" id="container_nav">
		</div>
		<div class="container_title">
			<h1 class="title">Hola! soy <r>rcomunica</r> y</h1>
			<h3 class="description"><i>soy desarrollador</i> <w> WEB</w>
			<h4 style="position: relative;bottom: 12vh;">y este es mi portafolio</h4>
			<a href="#sobre-mi"><img src="src/OnlyLogo.jpg" class="img__title" width="80px"></a>
			<center>
			<h2 class="neonText" id="neonText">Da click en mi logo</h2>
			</center>
		</div>
		<div class="container_about-me">
			<p class="about-me__text" id="sobre-mi">Soy un desarollador Front-end, con muy poca experencia laboral pero con suficientes conocimientos para crear y hacer lo que me soliciten, </p>
			<img src="src/person.png" class="img__about-me">
		</div>
	</div>
</body>

<script src="app.js"></script>

<!--
		<script type="text/javascript">
		var NavDisplay = document.getElementById('ShowNav')
		var ContainerNav = document.getElementById('container_nav')

			function MostarNav(click){
				if(ContainerNav.style.display="none"){
					NavDisplay.onclick(ContainerNav.style.display="inline");
					return;
				}
			}	
	</script>
-->
</html>