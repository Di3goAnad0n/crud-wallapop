<?php
include("conexion.php");

$sql = "SELECT pc.id_producto,
               pc.id_categoria,
               p.titulo,
               c.nombre
        FROM producto_categoria pc
        JOIN producto p
        ON pc.id_producto = p.id_producto
        JOIN categoria c
        ON pc.id_categoria = c.id_categoria";

$resultado = $conexion->query($sql);
?>

<h1>RELACION PRODUCTO - CATEGORIA</h1>

<a href="insertar.php">Nueva relación</a>

<table border="1">

<tr>
    <th>Producto</th>
    <th>Categoria</th>
    <th>Acciones</th>
</tr>

<?php while($fila = $resultado->fetch_assoc()) { ?>

<tr>

<td><?php echo $fila['titulo']; ?></td>

<td><?php echo $fila['nombre']; ?></td>

<td>

<a href="update.php?idp=<?php echo $fila['id_producto']; ?>&idc=<?php echo $fila['id_categoria']; ?>">
Editar
</a>

<a href="delete.php?idp=<?php echo $fila['id_producto']; ?>&idc=<?php echo $fila['id_categoria']; ?>">
Borrar
</a>

</td>

</tr>

<?php } ?>

</table>