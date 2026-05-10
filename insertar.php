<?php
include("conexion.php");

if($_POST){

$idp = $_POST['id_producto'];
$idc = $_POST['id_categoria'];

$sql = "INSERT INTO producto_categoria
        VALUES($idp,$idc)";

$conexion->query($sql);

header("Location:index.php");
}

$productos = $conexion->query("SELECT * FROM producto");
$categorias = $conexion->query("SELECT * FROM categoria");
?>

<h1>Nueva Relación</h1>

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

<input type="submit" value="Guardar">

</form>