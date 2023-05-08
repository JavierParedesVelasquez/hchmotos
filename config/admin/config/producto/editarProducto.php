<?php

error_reporting(1);

include "../conexion2.php";
$id=$_REQUEST['producto_id'];

$txtproducto =$_POST['txtproducto'];
$txtimagen = addslashes(file_get_contents($_FILES['txtimagen']['tmp_name']));
$txtprecio =$_POST['txtprecio'];

if(!empty($txtimagen)){
    
	$sql = "UPDATE producto SET 
    nombre_producto	='$txtproducto',
	imagen_producto	='$txtimagen',
    precio_producto	='$txtprecio'
	WHERE id_producto=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../producto.php");

	} else {

	echo "No se editó el dato";}
}else {

	$sql = "UPDATE producto SET 
    nombre_producto	='$txtproducto',
	precio_producto	='$txtprecio'
	WHERE id_producto=$id";

	$resultado = $conexion->query($sql);

	if($resultado == true){

	header("Location: ../../producto.php");

	} else {

	echo "No se editó el dato";

}
}

?>