<?php
include("../Config/conexion.php");

// Filtrar solo productos que sean "Celular" en la categoría "Electrónica"
$consulta = "SELECT id, nombre, precio, stock FROM productos WHERE nombre = 'Celular' AND categoria = '1'";
$resultado = mysqli_query($conec, $consulta);

while ($valor = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>{$valor['id']}</td>";
    echo "<td>{$valor['nombre']}</td>";
    echo "<td>{$valor['precio']}</td>";
    echo "<td class='stock'>{$valor['stock']}</td>";
    echo "</tr>";
}
?>
