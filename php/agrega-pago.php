<?php
    session_start();
    include("conexion.php");
    var_dump($_POST);

    $userid = $_SESSION['usuarioid'];
    $termina = substr($_POST['numero'],-3);
    $expira = substr($_POST['expira'],3);
    $sqlinsertapago = "INSERT INTO `metodos_pago` (usuarioid,termina,expira)
    VALUES('{$mysqli->real_escape_string($userid)}',
    '{$mysqli->real_escape_string($termina)}',
    '{$mysqli->real_escape_string($expira)}')";

    $insertpagonuevo = $mysqli->query($sqlinsertapago);
    //echo $sqlinsertapago;
    header("location: ../pago-perfil.php");

    $mysqli->close();

?>