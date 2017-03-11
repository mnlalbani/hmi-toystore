<?php
    session_start();
    $data = array();
    $arreglopago[]= array('pago'=>$_POST['pago']);
    $_SESSION['carro-pago'] = $arreglopago;

    $data['success'] = true;
    $data['respuesta'] = "exito";
    echo json_encode($data);
    
?>