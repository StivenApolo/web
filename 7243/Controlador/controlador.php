<?php
$valor = $_GET['opcio'];
if($valor == 1){
    include("../Vista/IngresoDeDatos.html");
    
}else 
if($valor == 2){
    include("../Vista/buscardato.html");
    
}else
if($valor == 3){
    include("../Vista/reporte.php");
    
}else
if($valor == 4){
    include("../Vista/MostrarCuantos.php");
    
}else{
    echo "No se ha seleccionado ninguna opción";

}

?>