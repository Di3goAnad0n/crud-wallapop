<?php
include("conexion.php");

$idp = $_GET['idp'];
$idc = $_GET['idc'];

$sql = "DELETE FROM producto_categoria
        WHERE id_producto=$idp
        AND id_categoria=$idc";

$conexion->query($sql);

header("Location:index.php");
?>