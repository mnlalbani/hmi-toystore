<?php
    include_once("conexion.php");
    var_dump($_POST);
    $sqlventa = "INSERT INTO `venta` (preciototal,direccionEnvio,metodoPago,usuarioid) 
        VALUES('{$mysqli->real_escape_string($_POST['preciototal'])}',
            '{$mysqli->real_escape_string($_POST['direccion'])}',
            '{$mysqli->real_escape_string($_POST['metodopago'])}',
            '{$mysqli->real_escape_string($_POST['usuarioid'])}')";      
    $insertventa = $mysqli->query($sqlventa);

    $sqlidventa ="SELECT `id` FROM `venta` ORDER BY `id` DESC LIMIT 1";
    $resultidventa = $mysqli->query($sqlidventa);

    while($row = mysqli_fetch_array($resultidventa)) {
                $idventa = $row['id'];
    }
    

    $articulos = $_POST['articuloid'];
    $cantidad = $_POST['articulocantidad'];
    $cont = 0;
    foreach($_POST['articuloid'] as &$values){
        $sqlorden = "INSERT INTO `orden` (usuarioid,articuloid,articulocantidad,ventaid) 
            VALUES('{$mysqli->real_escape_string($_POST['usuarioid'])}','".$articulos[$cont]."','".$cantidad[$cont]."','".$idventa."')";
        $insertorden = $mysqli->query($sqlorden);
        $cont++;
    }
?>