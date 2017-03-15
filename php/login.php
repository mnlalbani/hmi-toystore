<?php 
    $errors = array();
	$data = array();
    session_start();

  if (! empty($_POST)) {
    include_once("conexion.php"); 
    $correo = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM `sesion` WHERE `email` = '$correo' AND `password` = '$password'";
    $result = $mysqli->query($sql);
    $a = mysqli_num_rows($result);
    if ($a > 0) {
          $sqlusuario = "SELECT `nombre` FROM `usuario` WHERE `email` = '$correo'";
          $resultnombre = $mysqli->query($sqlusuario);
          while($b = mysqli_fetch_assoc($resultnombre)){
            $_SESSION['nom_usu'] = $b['nombre'];
          }    
      while($a = mysqli_fetch_assoc($result)){
        $_SESSION['correo'] = $correo;
        $_SESSION['usuarioid'] = $a['usuarioid'];
        $_SESSION['tipo'] = $a['tipo'];
        
      }
      if($_)
          $data['success'] = true;
          $data['tipo']= $a['tipo'];
          header("location: ../index.php");
          echo json_encode($data);
    }
    else{
        $data['success'] = false;
        $data['error'] = "Usuario no registrado";
        header("location: ../login.php?error=true");
        echo json_encode($data);
    }
  }
  ?>