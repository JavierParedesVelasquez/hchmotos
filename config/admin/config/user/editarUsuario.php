<?php

error_reporting(1);

include "../conexion2.php";

$id=$_REQUEST['cliente_id'];

$txtnombre =$_POST['txtnombre'];
$txtapellido =$_POST['txtapellido'];
$txtdni =$_POST['txtdni'];
$txtcorreo =$_POST['txtcorreo'];
$txttelefono =$_POST['txttelefono'];
$txtdireccion =$_POST['txtdireccion'];
$txtclave =md5($_POST['txtclave']);


$sql="UPDATE cliente SET 
nombres_cliente='$txtnombre', 
apellidos_cliente='$txtapellido',
dni_cliente='$txtdni', 
correo_cliente='$txtcorreo',
telefono_cliente='$txttelefono', 
direccion_cliente='$txtdireccion',
pass_cliente='$txtclave'
   WHERE id_cliente=$id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../user.php');
}else{
    echo "No se edito el datos";
}
?>