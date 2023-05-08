<?php

error_reporting(1);

include "../conexion2.php";

$id=$_REQUEST['admin_id'];

$txtnombre = $_POST['txtnombre'];
$txtusuario = $_POST['txtusuario'];
$txtclave = md5($_POST['txtclave']);


$sql="UPDATE admin SET 
nombre_admin='$txtnombre', 
user_admin='$txtusuario',
pass_admin='$txtclave'
   WHERE id_admin=$id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../admin.php');
}else{
    echo "No se edito el datos";
}
?>