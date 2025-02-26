<?php
include("../Config/conexion.php");
//Buscar productos por su nombre y categoria con su stock mayor a 10
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$consulta="SELECT * FROM productos WHERE nombre='$nombre' AND categoria='$categoria' AND stock>10";
$Resultado=mysqli_query($conec, $consulta);

while ($valor=mysqli_fetch_array($Resultado)){
?>

<tr>
    <td><?php echo $valor['id']?></td>
    <td><?php echo $valor['nombre']?></td>
    <td><?php echo $valor['categoria']?></td>
    <td><?php echo $valor['precio']?></td>
    <td><?php echo $valor['stock']?></td>
    
</tr>

<?php
}


?>