
<?php 
    include_once("conexion.php");
if(isset($_POST['mostrar'])){
    $sql= "SELECT * FROM `metodos_pago` WHERE `id` = '".$_POST['id']."'";
    $result = $mysqli->query($sql);

    while($a = mysqli_fetch_assoc($result)){
            $data['id'] = $a['id'];
            $data['metodo'] = $a['metodo'];
            $data['termina'] = $a['termina'];
            $data['expira'] = $a['expira'];
            echo json_encode($data);
    }
}
else{
    if(isset($_POST['pago'])){
        $termina = substr($_POST['numero-e'],-3);
        //$expira = substr($_POST['expira'],3);
        $sql="UPDATE `metodos_pago` SET `metodo` = '".$_POST['metodo-e']."', `termina`= '$termina', `expira` = '".$_POST['expira-e']."' WHERE `id` = '".$_POST['id']."'";
        $result = $mysqli ->query($sql);
        header("Location: ../pago-perfil.php");
        //echo $sql;
    }
    
}