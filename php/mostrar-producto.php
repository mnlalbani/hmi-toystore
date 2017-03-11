<?php
include_once("conexion.php");
if(isset($_GET['id'])){
    $sql = "SELECT * FROM `producto` WHERE `id` = '".$_GET['id']."'"; //Carga todo con esa marca
        $result = $mysqli -> query($sql);
        while($row = mysqli_fetch_array($result)) {
               $_COOKIE['img1'] = $row['img1'];
               $_COOKIE['img2'] = $row['img2'];
               $_COOKIE['img3'] = $row['img3'];
               $_COOKIE['img4'] = $row['img4'];
               $_COOKIE['precio'] = $row['precio'];
               $_COOKIE['nombre'] = $row['nombre'];
               $_COOKIE['descripcion'] = $row['descripcion'];
        }
}else{
    header("location: lista.php");
}

?>