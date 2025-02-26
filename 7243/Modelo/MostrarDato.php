<?php
include("../Config/conexion.php");

$consultaa = "SELECT id, precio, stock FROM productos";
$Resultadoa = mysqli_query($conec, $consultaa);

while ($valor = mysqli_fetch_array($Resultadoa)) {
    $precioTotal = $valor['precio'] * $valor['stock'];
    echo "<tr>";
    echo "<td>{$valor['id']}</td>";
    echo "<td>{$valor['precio']}</td>";
    echo "<td>{$valor['stock']}</td>";
    echo "<td class='precio-total'>{$precioTotal}</td>";
    echo "</tr>";
}
?>
