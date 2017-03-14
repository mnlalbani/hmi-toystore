<?php
    include_once("conexion.php");
    $sql = "DELETE FROM `producto` WHERE `id` = ".$_POST['id']."";
    $result = $mysqli -> query($sql);
    $mysqli->close();

?>