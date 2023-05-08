<?php
include "../conexion.php";
$conn=conexion();

$txtnombre =$_POST['txtnombre'];
$txtusuario =$_POST['txtusuario'];
$txtclave =md5($_POST['txtclave']);




$sql = "INSERT INTO admin ( nombre_admin, user_admin, pass_admin) 
VALUES ('$txtnombre','$txtusuario','$txtclave')";

$query=mysqli_query($conn,$sql);

if ($query){
    header('Location: ../../admin.php');
}else{
    echo "No se insertaron los datos";
}

?>