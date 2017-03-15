<?php
    include_once("conexion.php");
    $directorio ="..\images\producto\\";
    $directorioNombre ="images/producto/";
    //var_dump($_POST);
    //var_dump($_FILES);
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
    $sql = "INSERT INTO `producto` (nombre,descripcion,precio,categoria,cantidad,marca,img1,img2,img3,img4)
VALUES ('{$mysqli->real_escape_string($_POST['nombre'])}',
     '{$mysqli->real_escape_string($_POST['descripcion'])}',
     '{$mysqli->real_escape_string($_POST['precio'])}',
     '{$mysqli->real_escape_string($_POST['categoria'])}',
     '{$mysqli->real_escape_string($_POST['cantidad'])}',
     '{$mysqli->real_escape_string($_POST['marca'])}',
     '{$mysqli->real_escape_string($img1)}',
     '{$mysqli->real_escape_string($img2)}',
     '{$mysqli->real_escape_string($img3)}',
     '{$mysqli->real_escape_string($img4)}')";
        $result = $mysqli->query($sql);
        
    //redirección
    $sqlid = "SELECT `id` FROM `producto` ORDER BY `id` DESC LIMIT 1";
    $resultid = $mysqli ->query($sqlid);

    while($row = mysqli_fetch_array($resultid)) {
                    $id = $row['id'];
                }
    header("Location: ../producto.php?id=".$id."");
    //echo $sqlid, $id;
    $mysqli->close();
?>