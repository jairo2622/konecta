<?php
    include("../conexion/conectar.php");
    $conexion=conectar();

    $id = uniqid();
    $nombre = $_POST['nombre'];
    $referencia=$_POST['referencia'];
    $precio = $_POST['precio'];
    $peso = $_POST['peso'];
    $categoria = $_POST['categoria'];
    $stock = $_POST['stock'];
    $fecha = date('Y-m-d H:i:s');

    $insertar = "INSERT INTO inventario values('$id','$nombre','$referencia','$precio','$peso','$categoria','$stock','$fecha')";
    $resultado = mysqli_query($conexion, $insertar) or die("Error en la insercion");
    mysqli_close($conexion);
    
    echo "<script>alert('Producto Registrado!')</script>";
    echo "<script> setTimeout(\"location.href='../views/index.php'\",200)</script>";
?>