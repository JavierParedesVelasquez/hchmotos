<?php
include "../conexion.php";
$conn=conexion();

$txtproducto =$_POST['txtproducto'];
$txtimagen = addslashes(file_get_contents($_FILES['txtimagen']['tmp_name']));
$txtprecio =$_POST['txtprecio'];



$sql = "INSERT INTO producto ( nombre_producto, imagen_producto, precio_producto) 
VALUES ('$txtproducto','$txtimagen','$txtprecio')";

$query=mysqli_query($conn,$sql);

if ($query){
    header('Location: ../../producto.php');
}else{
    echo "No se insertaron los datos";
}

?>