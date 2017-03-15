
<?php 
    include_once("conexion.php");
if(isset($_POST['mostrar'])){
    $sql= "SELECT * FROM `direcciones` WHERE `id` = '".$_POST['id']."'";
    $result = $mysqli->query($sql);

    while($a = mysqli_fetch_assoc($result)){
            $data['id'] = $a['id'];
            $data['direccion'] = $a['direccionEnvio'];
            echo json_encode($data);
    }
}
else{
    if(isset($_POST['direccion'])){
        $sql="UPDATE `direcciones` SET `direccionEnvio` = '".$_POST['direccionEnvio']."' WHERE `id` = '".$_POST['id']."'";
        $result = $mysqli ->query($sql);
        header("Location: ../direcciones-perfil.php");
    }
    
}