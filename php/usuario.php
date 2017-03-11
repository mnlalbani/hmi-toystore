<?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    include_once("conexion.php");
    $data = array();
    if(isset($_POST['tipo'])){
        if($_POST['tipo'] == 'registrar'){
            if(isset($_POST['email'])){//Si email está definido
        $sql = "SELECT * FROM `usuario` WHERE `email` = '".$_POST['email']."'"; 
        $result = $mysqli ->query($sql);
        $a = mysqli_num_rows($result); //consulta existencia de la cedula en la base de datos
        if($a > 0){//Si el usuario existe
            $data['success'] = false;
            $data['respuesta'] = "El usuario ya existe";
            echo json_encode($data);
        }//Fin usuario Existe
        else{//El usuario no existe
            $sqlusuario = "INSERT INTO `usuario`(nombre,email)
            VALUES('{$mysqli->real_escape_string($_POST['nombre'])}',
                    '{$mysqli->real_escape_string($_POST['email'])}')";
            $insertusuario = $mysqli->query($sqlusuario);//Ingresa los datos del usuario
            if(!$insertusuario){ //Si ocurrio un error al ingresar los datos
                $data['success'] = false;
                $data['respuesta'] = "Ocurrio un error al registrar datos  del usuario";
                $data['sql'] = $sqlusuario;
                echo json_encode($data);
            }else{ //Si el registro fue exitoso se registra el horario
                $sqlSesion = "INSERT INTO `sesion` (email,password) VALUES('{$mysqli->real_escape_string($_POST['email'])}','{$mysqli->real_escape_string($_POST['password'])}')";
                    $insertSesion = $mysqli ->query($sqlSesion);
                    if(!$insertSesion){
                        $data['success'] = false;
                        $data['respuesta'] = "Ocurrio un error al registrar sesion del usuario";
                        $data['sql'] = $sqlSesion;
                        echo json_encode($data);
                    }//Fin sesion no registrada
                    else{
                        $data['success'] = true;
                        $data['respuesta'] = "Usuario registrado exitosamente";
                        echo json_encode($data);
                    }//Fin registro exitoso
                }//Fin registro sesion
        }//Fin usuario no existe
        $mysqli -> close();
    }//Fin email definida
    else{ //emial no definida
        echo "email NO DEFINIDA";
    }
        }   
    } 
?>