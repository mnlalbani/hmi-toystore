<?php
    include_once("conexion.php");
    $sqlnombre = "SELECT `nombre` FROM `usuario` WHERE `id` = '".$_SESSION['usuarioid']."'";
    $resultnombre = $mysqli ->query($sqlnombre);

    $a = mysqli_num_rows($resultnombre);
    if ($a > 0) {
      while($a = mysqli_fetch_assoc($resultnombre)){
        $_SESSION['nombreusuario'] = $a['nombre'];
      }
    }