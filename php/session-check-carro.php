<?php
$data = array();
 session_start();
    if(isset($_SESSION['usuarioid'])){
        $data['success'] = true;
        //$data['response'] = "redirect";
        echo json_encode($data);
    }else{
        $data['success'] = false;
        //$data['response'] = "redirect";
        echo json_encode($data);
    }