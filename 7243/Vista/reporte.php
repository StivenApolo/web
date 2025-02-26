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
        <h1 class="text-center mb-4">Datos de productos</h1>
        <div class="table-container">
            <table class="table table-bordered table-striped">

                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Precio Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include ("..\Modelo\MostrarDato.php");
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3" class="text-right"><strong>Total General:</strong></td>
                        <td><strong id="totalGeneral"></strong></td>
                    </tr>
                </tfoot>
            </table>
            <div class="text-center mt-4">
                <a href="../Index.html" class="btn btn-primary">Regresar a la página principal</a>
            </div>
        </div>
    </div>

    <script>
        // Script para calcular el total general dinámicamente
        document.addEventListener("DOMContentLoaded", function () {
            let totalGeneral = 0;
            document.querySelectorAll(".precio-total").forEach(function (element) {
                totalGeneral += parseFloat(element.innerText);
            });
            document.getElementById("totalGeneral").innerText = totalGeneral.toFixed(2);
        });
    </script>

    <script src="../Publico/ext/bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="../Publico/ext/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
