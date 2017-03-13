<?php
    session_start();
    include("conexion.php");
    var_dump($_POST);

    $userid = $_SESSION['usuarioid'];

    $sqlinsertadireccion= "INSERT INTO `direcciones` (usuarioid,direccionEnvio)
    VALUES('{$mysqli->real_escape_string($userid)}',
    '{$mysqli->real_escape_string($_POST['direccionEnvio'])}')";

    $insertadireccionnueva = $mysqli->query($sqlinsertadireccion);
    //echo $sqlinsertadireccion;
    header("location: ../direcciones-perfil.php");

    $mysqli->close();

?>