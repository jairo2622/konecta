<?php
include("../conexion/conectar.php");
$conexion = conectar();

$id = $_POST['id'];

$eliminar = "DELETE FROM inventario WHERE id = '$id'";
$resultado = mysqli_query($conexion, $eliminar) or die("Error al eliminar");

mysqli_close($conexion);
?>
