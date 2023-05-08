<?php
include "../conexion.php";
$conn=conexion();

$txtnombre =$_POST['txtnombre'];
$txtapellido =$_POST['txtapellido'];
$txtdni =$_POST['txtdni'];
$txtcorreo =$_POST['txtcorreo'];
$txttelefono =$_POST['txttelefono'];
$txtdireccion =$_POST['txtdireccion'];
$txtclave =md5($_POST['txtclave']);




$sql = "INSERT INTO cliente ( nombres_cliente, apellidos_cliente, dni_cliente, correo_cliente, telefono_cliente, direccion_cliente, pass_cliente) 
VALUES ('$txtnombre','$txtapellido','$txtdni','$txtcorreo','$txttelefono','$txtdireccion','$txtclave')";

$query=mysqli_query($conn,$sql);

if ($query){
    header('Location: ../../user.php');
}else{
    echo "No se insertaron los datos";
}

?>