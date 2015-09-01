<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=si, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Login</title>
	<link rel="shortcut icon" href="img/favicon.ico">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/estilos.css">

</head>
<body>
	   <section id="contenido">
	   	<div id="logo"><img src="img/logo.png" alt="Imagen Empresa"></div>
	   	<div id="login">
	   		<?php
	   		if(isset($_GET["dato"])){
	   			$dato=$_GET["dato"];
	   			echo "<span>".$dato."</span>";
	   		}
	   		?> 
	   		<form action="auth/verSesion.php" method="POST" id="inicio">
	   			<input name="txtUser"type="text" placeholder="Usuario" required class="cambio">
	   			<input name="txtPass" type="password" placeholder="Contraseña" required class="cambio">
	   			<input type="submit" value="Iniciar Sesion" class="btn btnazul cambio">	
	   		</form> 
	   		<br>	   		
	   		<div><a id="linko" class="cambio">Olvide Contraseña</a></div>
	   		<article id="olvide" class="cambio">
	   			<form action="" method="POST">
	   				<input name="txtemail" type="email" required placeholder="Correo Electronico">
	   				<input type="submit" value="Enviar" class="btn btnazul1 cambio">	
	   			</form>
	   		</article>
	   	</div>
	   </section>
	   <script>
	   		var a = document.getElementById('olvide');
	   		var b = document.getElementById('linko');
	   		var c = document.getElementById('inicio');
	   		b.addEventListener('click',aparece);
	   		function aparece () {
	   			a.style.display="block";
	   			c.style.display="none";
	   		}
	   </script>
</body>
</html>