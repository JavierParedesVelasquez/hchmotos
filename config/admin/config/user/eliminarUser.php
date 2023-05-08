<?php
include "../conexion2.php";

$id = $_REQUEST['id_cliente'];

$sql = "DELETE  FROM cliente WHERE id_cliente = $id";

$resultado = $conexion->query($sql);

if($resultado){
    header('Location: ../../user.php');
}else{
    echo "No se elimino el dato";
}

?>