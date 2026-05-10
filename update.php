<?php
include("conexion.php");

$idp = $_GET['idp'];
$idc = $_GET['idc'];

if($_POST){

$nuevo_producto = $_POST['id_producto'];
$nueva_categoria = $_POST['id_categoria'];

$sql = "UPDATE producto_categoria
SET id_producto=$nuevo_producto,
    id_categoria=$nueva_categoria
WHERE id_producto=$idp
AND id_categoria=$idc";

$conexion->query($sql);

header("Location:index.php");
}

$productos = $conexion->query("SELECT * FROM producto");
$categorias = $conexion->query("SELECT * FROM categoria");
?>

<h1>Editar Relación</h1>

<form method="POST">

Producto:

<select name="id_producto">

<?php while($p = $productos->fetch_assoc()) { ?>

<option value="<?php echo $p['id_producto']; ?>">

<?php echo $p['titulo']; ?>

</option>

<?php } ?>

</select>

<br><br>

Categoria:

<select name="id_categoria">

<?php while($c = $categorias->fetch_assoc()) { ?>

<option value="<?php echo $c['id_categoria']; ?>">

<?php echo $c['nombre']; ?>

</option>

<?php } ?>

</select>

<br><br>

<input type="submit" value="Actualizar">

</form>