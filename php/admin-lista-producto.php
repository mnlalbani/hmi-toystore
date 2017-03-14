<?php 
    include_once("conexion.php");
if(!empty($_GET)){
    if(isset($_GET['marca'])){ //Si marca esta definida
        $sql = "SELECT * FROM `producto` WHERE `marca` = '".$_GET['marca']."'"; //Carga todo con esa marca
        $result = $mysqli -> query($sql);
        if($result->num_rows === 0){
                echo "<div class='alert alert-info'>";
                echo "No Existen Productos en Esta Marca.";
                echo "</div>";
        }else{
            while($row = mysqli_fetch_array($result)) {
                echo "  <div class='col s12 m12 l12'>";
                echo "    <div class='card horizontal'>";
                echo "    <div class='card-image'>";
                echo "         <img src='".$row['img1']."' class='small-img responsive-img'>";
                echo "     </div>";
                echo "    <div class='card-stacked'>";
                echo "         <div class='card-content'>";
                echo "         <p class='truncate'>".$row['descripcion']."</p>";
                echo "         </div>";
                echo "         <div class='card-action'>";
                echo "         <a href=''>Ver</a>";
                echo "         <a href=''>Editar</a>";
                echo "         <a href=''>Eliminar</a>";
                echo "         </div>";
                echo "     </div>";
                echo "     </div>";
                echo " </div>";
            }
            $mysqli ->close();
        }
    }
    if(isset($_GET['categoria'])){ //Si categoria esta definida
        $sql = "SELECT * FROM `producto` WHERE `categoria` = '".$_GET['categoria']."'"; //Carga todo con esa marca
        $result = $mysqli -> query($sql);
        if($result->num_rows === 0){
                echo "<div class='alert alert-info'>";
                echo "No Existen Productos en Esta Categoria.";
                echo "</div>";
        }else{
            while($row = mysqli_fetch_array($result)) {
               echo "  <div class='col s12 m12 l12'>";
                echo "    <div class='card horizontal'>";
                echo "    <div class='card-image'>";
                echo "         <img src='".$row['img1']."' class='small-img responsive-img'>";
                echo "     </div>";
                echo "    <div class='card-stacked'>";
                echo "         <div class='card-content'>";
                echo "         <p class='truncate'>".$row['descripcion']."</p>";
                echo "         </div>";
                echo "         <div class='card-action'>";
                echo "         <a href=''>Ver</a>";
                echo "         <a href=''>Editar</a>";
                echo "         <a value='".$row['id']."'>Eliminar</a>";
                echo "         </div>";
                echo "     </div>";
                echo "     </div>";
                echo " </div>";
            }
            $mysqli ->close();
        }
    }
}else{
    $sql = "SELECT * FROM `producto`"; //Carga todos los productos
        $result = $mysqli -> query($sql);
        if($result->num_rows === 0){
                echo "<div class='alert alert-info'>";
                echo "No Existen Productos.";
                echo "</div>";
        }else{
            while($row = mysqli_fetch_array($result)) {
                echo "  <div class='col s12 m12 l12 tarjeta'>";
                echo "    <div class='card horizontal'>";
                echo "    <div class='card-image'>";
                echo "         <img src='".$row['img1']."' class='small-img responsive-img'>";
                echo "     </div>";
                echo "    <div class='card-stacked'>";
                echo "         <div class='card-content'>";
                echo "         <p class='truncate'>".$row['descripcion']."</p>";
                echo "         </div>";
                echo "         <div class='card-action'>";
                echo "         <a class='btn' href='producto.php?id=".$row['id']."'>Ver</a>";
                echo "         <a class='btn' href='editar-producto.php?id=".$row['id']."'>Editar</a>";
                echo "         <a class='btn red eliminarproducto' value='".$row['id']."'>Eliminar</a>";
                echo "         </div>";
                echo "     </div>";
                echo "     </div>";
                echo " </div>";
            }
            $mysqli ->close();
        }
}//Fin si no hay variable definida    