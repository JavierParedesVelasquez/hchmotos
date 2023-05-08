<?php

require_once("../conexion.php");

$u = $_POST['txtdni'];
$p = md5($_POST['txtpass']);


$sql = "SELECT * FROM cliente WHERE dni_cliente='$u' AND pass_cliente='$p'";
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
 	$_SESSION['id_cliente'] = $reg->id_cliente;
	$_SESSION['nombres_cliente'] = $reg->nombres_cliente;
 	$_SESSION['apellidos_cliente'] = $reg->apellidos_cliente;
 	$_SESSION['dni_cliente'] = $reg->dni_cliente;
	$_SESSION['correo_cliente'] = $reg->correo_cliente;
 	$_SESSION['telefono_cliente'] = $reg->telefono_cliente;
 	$_SESSION['direccion_cliente'] = $reg->direccion_cliente;
	 $_SESSION['pass_cliente'] = $reg->pass_cliente;
	header("location: ../../../view/index.php");
}
?>