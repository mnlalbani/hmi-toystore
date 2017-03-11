<?php
    session_start();
    $data = array();
    $arregloDireccion[]= array('direccion'=>$_POST['direccion'], 'envio' => $_POST['tipoEnvio']);
    $_SESSION['carro-direccion'] = $arregloDireccion;

    $data['success'] = true;
    $data['respuesta'] = "exito";
    echo json_encode($data);
    
?>