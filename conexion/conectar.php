<?php
function conectar(){
    $server = 'localhost';
    $usuario = 'root';
    $contraseña = '';
    $bd = 'cafeteria';

    $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die("Error en la conexion");
    return $conexion;
}
?>