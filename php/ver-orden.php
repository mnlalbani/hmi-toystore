<?php
    include_once("conexion.php");
    $sql ="SELECT * FROM `orden` WHERE `ventaid` = '".$_GET['id']."'";
    $result = $mysqli ->query($sql);
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
        echo $articuloid['articuloid'][$i] = $row['articuloid'];
        $i++;
    }