<?php
    include_once("conexion.php");
    $busqueda = $_POST['nombre'];
    $sql = "SELECT * FROM `producto` WHERE `nombre` LIKE %$busqueda%";
    $result = $mysqli-> query($sql);
    $mysqli ->close();
?>