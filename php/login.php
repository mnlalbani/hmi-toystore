<?php 
	$data = array(); //Arreglo para el paso de mensajes de errores y validaciones
    session_start(); //Crea o resume una sesión ya iniciada

  if (! empty($_POST)) { //Verifica si la variable POST está vacía
    include_once("conexion.php");  //se llama al archivo con la conexión a la base de datos
    $correo = $_POST['email']; //se guarda el valor del correo envíado desde el formulario del login en una variable
    $password = $_POST['password']; //se guarda el valor de la contraseña envíado desde el formulario del login en una variable
    
    $sql = "SELECT * FROM `sesion` WHERE `email` = '$correo' AND `password` = '$password'"; // Se selecciona todo desde la tabla sesion donde el correo y la contraseña coincidan
    $result = $mysqli->query($sql); //se hace la consulta
    $a = mysqli_num_rows($result); //se verifica el numero de resultados
	    if ($a > 0) { //si el numero de resultados es mayor a 0, el usuario existe
		$sqlusuario = "SELECT `nombre` FROM `usuario` WHERE `email` = '$correo'"; //Se selecciona el nombre desde la tabla usuario donde el email coincida
		$resultnombre = $mysqli->query($sqlusuario); //se hace la consulta
		while($b = mysqli_fetch_assoc($resultnombre)){//ciclo para la carga de datos de la consulta en la tabla usuario en la variable session, la variable $b es un arreglo creado en esta linea que posee todos los resultados de la consulta, while($b) se usa para iterar en cada una de las posiciones de este arreglo
		    	$_SESSION['nom_usu'] = $b['nombre']; //en la variable session en posicion 'nom_usu' se guarda el nombre traido desde la tabla usuario
		  	}  //finaliza el ciclo consulta en tabla usuario
		while($a = mysqli_fetch_assoc($result)){ //ciclo para carga de datos desde la tabla sesion a la variable session, la variable $a es un arreglo creado en esta linea que posee todos los resultados de la consulta, while($a) se usa para iterar en cada una de las posiciones de este arreglo
			$_SESSION['correo'] = $correo; //se guarda el valor del correo
			$_SESSION['usuarioid'] = $a['usuarioid']; //se guarda el id del usuario (en este caso la tabla sesion posee el id del usuario, el mismo valor que posee en la tabla usuario)
			$_SESSION['tipo'] = $a['tipo']; //carga el tipo de usuario en la variable session
	      		}//fin carga de datos desde tabla sesion
		      
			  $data['success'] = true; //valor bandera true se pasa al arreglo data 
			  $data['tipo']= $a['tipo']; //se guarda el valor del tipo de usuario en data
			  header("location: ../index.php"); //se redirecciona al index una vez logeado
			  echo json_encode($data); //paso de mensajes al archivo javascript (se usa para palidaciones y muestra de mensajes por parte del archivo javascript)
		    }//fin del condicional si $a > 0
    else{ //si $a es menor a 0, no existe el usuario
        $data['success'] = false; //valor bandera false
        $data['error'] = "Usuario no registrado"; //mensaje de error se guarda en data
        header("location: ../login.php?error=true"); //se redirecciona al formulario de login con l varible de error (?error=true) para muestra de mensaje en en formulario
        echo json_encode($data); //se pasa el arreglo data al archivo javascript
    }
  }//fin si post está vacío
  ?>
