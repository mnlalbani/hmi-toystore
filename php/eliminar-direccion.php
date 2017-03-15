<?php
    include_once("conexion.php");

    $sql ="DELETE FROM `direcciones` WHERE `id` = '".$_POST['id']."'";
    $result = $mysqli->query($sql);

?>