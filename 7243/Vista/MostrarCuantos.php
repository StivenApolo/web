<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página</title>
    <link rel="stylesheet" href="../Publico/css/banner.css">
    <link rel="stylesheet" href="../Publico/css/keyframes.css">
    <link rel="stylesheet" href="../Publico/css/style.css">
    <link rel="stylesheet" href="../Publico/ext/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Productos: Celulares </h1>
        <h1 class="text-center mb-4">Categoria: Electrónica </h1>
        <div class="table-container">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include ("..\Modelo\MostrarCuanto.php");
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Total de Productos:</strong></td>
                        <td><strong id="totalProductos"></strong></td>
                    </tr>
                </tfoot>
            </table>
            <div class="text-center mt-4">
                <a href="../Index.html" class="btn btn-primary">Regresar a la página principal</a>
            </div>
        </div>
    </div>

    <script>
        // Script para calcular el total de productos sumando el stock
        document.addEventListener("DOMContentLoaded", function () {
            let totalProductos = 0;

            document.querySelectorAll(".stock").forEach(function (element) {
                totalProductos += parseInt(element.innerText);
            });

            document.getElementById("totalProductos").innerText = totalProductos;
        });
    </script>

    <script src="../Publico/ext/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="../Publico/ext/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
