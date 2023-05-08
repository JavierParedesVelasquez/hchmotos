<?php
require_once("../conexion.php");

$txtnombre = $_POST['txtnombre'];
$txtapellidos = $_POST['txtapellidos'];
$txtdni = $_POST['txtdni'];
$txtcorreo = $_POST['txtcorreo'];
$txttelefono = $_POST['txttelefono'];
$txtdireccion = $_POST['txtdireccion'];
$txtpass = md5($_POST['txtpass']);


$sql = "INSERT INTO cliente(
    nombres_cliente,
    apellidos_cliente,
    dni_cliente,
    correo_cliente,
    telefono_cliente,
    direccion_cliente,
    pass_cliente ) VALUES (
    '$txtnombre',
    '$txtapellidos',
    '$txtdni',
    '$txtcorreo',
    '$txttelefono',
    '$txtdireccion',
    '$txtpass')";

//EJECUTAR LA SENTENCIA
$cnx->query($sql) or die("error");
header("location: ../ingresar/login.php");
?>
