<?php
include "../conexion2.php";

$id = $_REQUEST['id_producto'];

$sql = "DELETE  FROM producto WHERE id_producto = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../producto.php');
}else{
    echo "No se elimino el dato";
}

?>