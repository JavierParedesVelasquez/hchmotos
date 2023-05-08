<?php
include "../conexion2.php";

$id = $_REQUEST['id_admin'];

$sql = "DELETE  FROM admin WHERE id_admin = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../admin.php');
}else{
    echo "No se elimino el dato";
}

?>