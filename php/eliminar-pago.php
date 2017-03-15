<?php
    include_once("conexion.php");

    $sql ="DELETE FROM `metodos_pago` WHERE `id` = '".$_POST['id']."'";
    $result = $mysqli->query($sql);

    
?>