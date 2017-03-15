<?php
    session_start();
    $arreglo_aux = $_SESSION['carrito'];
    $cant_aux = 0;
    foreach($arreglo_aux as &$values){
            echo $cant_aux++;
            echo "<br>";
    }
?>