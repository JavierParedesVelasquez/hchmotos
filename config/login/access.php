<?php

require_once("../login_home/conexion.php");

$u = $_POST['txtusuario'];
$p = md5($_POST['txtclave']);

$sql = "SELECT * FROM admin WHERE user_admin='$u' AND pass_admin='$p'";
$rs	= $cnx->query($sql) or die("error");
//roundCount CONTAR LOS REGISTROS
if ($rs->rowCount()==0) {
	# funcion de php header encabezado, location sirve para direccionar el navergador, para que se mueva a una pagina
	# te redigira a la pagina principal si esta incorrecto
	header("location: login.php");
}else{
	//INICIO DE SESION se inicia cuando los datos son correctos.
 	session_start();
 	// las variables de sesion son las que no se almacenan en la memoria del navegador sino se almacenan en la memoria del servidor y esas variables no se borran
 	$reg = $rs->fetchObject();
 	$_SESSION['id_admin'] = $reg->id_admin;
	$_SESSION['nombre_admin'] = $reg->nombre_admin;
 	$_SESSION['user_admin'] = $reg->user_admin;
 	$_SESSION['pass_admin'] = $reg->pass_admin;
	header("location: ../admin/home.php");
}
?>	