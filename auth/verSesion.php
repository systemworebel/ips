<?php
require "../conn/classConeccionBd.php";
$consulta="SELECT usuario,contrasena,rol FROM ips_bd";
$procesando=mysql_query($consulta);
$i=0;

while($datosObtenidos=mysql_fetch_array($procesando)){
	$usuarios[$i][0]=$datosObtenidos['usuario'];
	$usuarios[$i][1]=$datosObtenidos['contrasena'];
	$usuarios[$i][2]=$datosObtenidos['rol'];
	$i++;
}
$usuario=$_POST['txtUser'];
$pass=$_POST['txtPass'];
$dato="No se pudo inciar sesión";
for($j=0;$j<count($usuarios);$j++){
	if($usarios[$j][0]==$usuario and $usuarios[$j][1]==$contrasena){
		session_start();
		$_SESSION["rol"]=$usuarios[$i][2];
		header("Location: board.php");
	}else{
		"chao";
		header("Location: index.html?dato=".$dato);
	}
}

?>