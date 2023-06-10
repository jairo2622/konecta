<?php
include("../conexion/conectar.php");
$conexion = conectar();

$id = $_POST['id'];
$stock = $_POST['stock'];

$consulta = mysqli_query($conexion, "SELECT stock FROM inventario WHERE id='$id'") or die("Error en la consulta");
$registro = mysqli_fetch_assoc($consulta);
$stockActual = $registro['stock'];

if ($stockActual == 0) {
    echo "<script>alert('No se puede realizar la compra debido a que el stock del producto es 0')</script>";
    echo "<script> setTimeout(\"location.href='../views/index.php'\",200)</script>";
}elseif ($stockActual<$stock) {
    echo "<script>alert('No se puede realizar la compra debido a que el stock del producto menor al numero requerido al de la compra, intenta comprando una menor cantidad')</script>";
    echo "<script> setTimeout(\"location.href='../views/ventas.php'\",200)</script>";
} else {
    $nuevoStock = $stockActual - $stock;

    $consulta2 = mysqli_query($conexion, "UPDATE inventario SET stock='$nuevoStock' WHERE id='$id'") or die("Error al comprar");

    mysqli_close($conexion);

    echo "<script>alert('Compra realizada!')</script>";
    echo "<script> setTimeout(\"location.href='../views/index.php'\",200)</script>";
}
