<?php
    include("../conexion/conectar.php");
    $conexion = conectar();

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $referencia = $_POST['referencia'];
    $precio = $_POST['precio'];
    $peso = $_POST['peso'];
    $categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    $fecha = date('Y-m-d H:i:s');

    mysqli_query($conexion, "UPDATE inventario SET nombre='$nombre', referencia='$referencia', precio='$precio', peso='$peso', categoria='$categoria', stock='$stock', fecha='$fecha' WHERE id='$id'") or die("Error al actualizar");
    mysqli_close($conexion);

    echo "<script>alert('Producto Actualizado!')</script>";
    echo "<script> setTimeout(\"location.href='../views/index.php'\",200)</script>";
?>
