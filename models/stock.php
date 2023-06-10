<?php
include("../conexion/conectar.php");
$conexion = conectar();

$consultaStock = mysqli_query($conexion, "SELECT MAX(stock), nombre FROM inventario");
$resultadoStock = mysqli_fetch_assoc($consultaStock);

$stock = $resultadoStock['MAX(stock)'];
$nombre = $resultadoStock['nombre'];

mysqli_close($conexion);

$response = "El producto con Stock mas alto es  " . $nombre . " con " . $stock . " unidades.";

echo $response;
?>
