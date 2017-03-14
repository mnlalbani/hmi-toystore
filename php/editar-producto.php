<?php
    include_once("conexion.php");
    $directorio ="..\images\producto\\";
    $directorioNombre ="images/producto/";
    var_dump($_POST);
    var_dump($_FILES);
    //Mover Imágenes
    move_uploaded_file($_FILES['img1']['tmp_name'], $directorio.$_FILES['img1']['name']);
    move_uploaded_file($_FILES['img2']['tmp_name'], $directorio.$_FILES['img2']['name']);
    move_uploaded_file($_FILES['img3']['tmp_name'], $directorio.$_FILES['img3']['name']);
    move_uploaded_file($_FILES['img4']['tmp_name'], $directorio.$_FILES['img4']['name']);
    //Guardar Imágenes en variables
    $img1 = $directorioNombre.$_FILES['img1']['name'];
    $img2 = $directorioNombre.$_FILES['img2']['name'];
    $img3 = $directorioNombre.$_FILES['img3']['name'];
    $img4 = $directorioNombre.$_FILES['img4']['name'];
    //sql
    $sql = "UPDATE `producto` SET `nombre` = '".$_POST['nombre']."', `descripcion` = '".$_POST['descripcion']."', `precio` = '".$_POST['precio']."', `categoria` = '".$_POST['categoria']."', `cantidad` = '".$_POST['cantidad']."', `marca` = '".$_POST['marca']."', `img1` = '$img1', `img2` = '$img2', `img3` = '$img3', `img4` = '$img4' WHERE `id` = '".$_POST['id']."'";
    $result = $mysqli->query($sql);
    $mysqli->close();
    //redirección
    header("Location: ../editar-producto.php?id=".$_POST['id']."");

?>