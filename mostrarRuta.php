<?php
$hostname_localhost = "localhost";
$database_localhost = "id";
$username_localhost = "root";
$password_localhost = "12345";

$datos = array();

$conexion = mysqli_connect($hostname_localhost, $username_localhost, $password_localhost, $database_localhost);
$consulta = "select * from ruta";
$resultado = mysqli_query($conexion, $consulta);

while ($row = mysqli_fetch_row($resultado)) {
    $datos[] = $row;
}
echo json_encode($datos);
mysqli_close($conexion);