<?php
include("../Config/conexion.php");
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$consulta="SELECT * FROM productos WHERE nombre='$nombre' AND categoria='$categoria' AND stock>10";
$Resultado=mysqli_query($conec, $consulta);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Pagina</title>
    <link rel="stylesheet" href="../Publico/css/banner.css">
    <link rel="stylesheet" href="../Publico/css/keyframes.css">
    <link rel="stylesheet" href="../Publico/css/style.css">
    <link rel="stylesheet" href="../Publico/ext/bootstrap/css/bootstrap.min.css">

</head>
<body>
<div class="container">
        <div class="table-container">
            <h1 class="text-center mb-4">Producto</h1>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>Categoria</th>
                        <th>Precio</th>
                        <th>Stock</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($valor = mysqli_fetch_array($Resultado)) {
                        echo "<tr>";
                        echo "<td>{$valor['id']}</td>";
                        echo "<td>{$valor['nombre']}</td>";
                        echo "<td>{$valor['categoria']}</td>";
                        echo "<td>{$valor['precio']}</td>";
                        echo "<td>{$valor['stock']}</td>";
                        echo "</tr>";
                    }
                    ?>  
                </tbody>
            </table>
        </div>
    </div>


   </section>
<script src="ext/bootstrap/js/jquery-3.2.1.min.js"></script>
<script src="ext/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>