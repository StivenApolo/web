<?php

include("../Config/conexion.php");
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];
$stock=$_POST['stock'];
$consulta="INSERT INTO productos (nombre, categoria, precio, stock) VALUES ('$nombre', '$categoria', '$precio', '$stock')";

$Resultado=mysqli_query($conec, $consulta);
header("Location: ../index.html");
exit;
?>