<?php
	include_once ("conexion.php");
	if(isset($_SESSION['carrito'])){ //si la sesion del carro esta definida
		if(isset($_GET['new-producto-id'])){
                    $id = $_GET['new-producto-id']; //guarda id del producto en variable
					$arreglo=$_SESSION['carrito']; //guarda todo el carro en un arreglo
					$encontro=false;
					$numero=0; //contador de cantidad de producto a agregar
					for($i=0;$i<count($arreglo);$i++){ //busqueda del producto en el carro por id
						if($arreglo[$i]['id']==$_GET['new-producto-id']){
							$encontro=true;
							$numero=$i;
						}
					}
					if($encontro==true){
						if(isset($_POST['cantidad'])){
							$arreglo[$numero]['cantidad'] = $_POST['cantidad'];
							$_SESSION['carrito']=$arreglo;	
						}else{
							$arreglo[$numero]['cantidad']=$arreglo[$numero]['cantidad']+1; //suma uno si encontro el id en el carro
							$_SESSION['carrito']=$arreglo;
						}
					}else{
						$nombre=""; 
						$precio=0;
						$imagen="";
						$sql = "SELECT * FROM `producto` WHERE `id` = $id "; //busca el producto en la bdd por id
						$result = $mysqli->query($sql);
						while($f = mysqli_fetch_assoc($result)) {
							$nombre=$f['nombre'];
							$precio=$f['precio'];
							$descripcion=$f['descripcion'];
							$imagen=$f['img1'];
						}
						$datosNuevos=array('id'=>$_GET['new-producto-id'],
										'nombre'=>$nombre,
										'precio'=>$precio,
										'descripcion'=>$descripcion,
										'img1'=>$imagen,
										'cantidad'=>1);

						array_push($arreglo, $datosNuevos);
						$_SESSION['carrito']=$arreglo;

					}
		}
	}else{ //si carrito no esta iniciado
		if(isset($_GET['new-producto-id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$id = $_GET['new-producto-id'];
			$sql = "SELECT * FROM `producto` WHERE `id` = $id "; //busca el producto en la bdd por id
			$result = $mysqli->query($sql);
			while($f = mysqli_fetch_assoc($result)) {
				$nombre=$f['nombre'];
				$precio=$f['precio'];
				$descripcion=$f['descripcion'];
				$imagen=$f['img1'];
			}
			$aux = 0;
			if(isset($_POST['cantidad'])){
				$aux = $_POST['cantidad'];
			}else{
				$aux = 1;
			}
			$arreglo[]=array('id'=>$_GET['new-producto-id'],
										'nombre'=>$nombre,
										'precio'=>$precio,
                                        'descripcion'=>$descripcion,
										'img1'=>$imagen,
										'cantidad'=>$aux);
			$_SESSION['carrito']=$arreglo;
		}
	}
?>