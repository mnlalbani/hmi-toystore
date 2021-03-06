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
               echo "<div class='col s6 m4 l3'>";
               echo     "<div class='card hoverable'>";
               echo         "<div class='card-image'>";
               echo             "<a href='producto.php?id=".$row['id']."''><img src='".$row['img1']."' class='img-responsive'></a>";
               echo             "<a href='carro.php?new-producto-id=".$row['id']."'' class='hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped' data-position='top' data-delay='50' data-tooltip='Agregar al carrito'><i class='material-icons'>add</i></a>";
               echo         "</div>";
               echo         "<div class='card-content'>";
               echo             "<a class='card-title' href='producto.php?id=".$row['id']."'>".$row['nombre']."</a>";
               echo             "<p class='truncate'>".$row['descripcion']."</p>";
               echo         "</div>";
               echo     "</div>";
               echo "</div>";
            }
            $mysqli ->close();
        }
    }
    if(isset($_GET['categoria'])){ //Si categoria esta definida
        $sql = "SELECT * FROM `producto` WHERE `categoria` LIKE  '".$_GET['categoria']."'"; //Carga todo con esa marca
        $result = $mysqli -> query($sql);
        if($result->num_rows === 0){
                echo "<div class='alert alert-info'>";
                echo "No Existen Productos en Esta Categoria.";
                echo "</div>";
        }else{
            while($row = mysqli_fetch_array($result)) {
               echo "<div class='col s6 m4 l3'>";
               echo     "<div class='card hoverable'>";
               echo         "<div class='card-image'>";
               echo             "<a href='producto.php?id=".$row['id']."''><img src='".$row['img1']."' class='img-responsive'></a>";
               echo             "<a href='carro.php?new-producto-id=".$row['id']."'' class='hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped' data-position='top' data-delay='50' data-tooltip='Agregar al carrito'><i class='material-icons'>add</i></a>";
               echo         "</div>";
               echo         "<div class='card-content'>";
               echo             "<a class='card-title' href='producto.php?id=".$row['id']."'>".$row['nombre']."</a>";
               echo             "<p class='truncate'>".$row['descripcion']."</p>";
               echo         "</div>";
               echo     "</div>";
               echo "</div>";
            }
            $mysqli ->close();
        }
    }
    if(isset($_GET['busqueda'])){
         $busqueda= $_GET['busqueda'];
    $sql = "SELECT * FROM `producto` WHERE `nombre` LIKE '%".$busqueda."%' OR `marca` LIKE '%".$busqueda."%' OR `categoria` LIKE '%".$busqueda."%'"; //Carga todo con esa marca
    //echo $sql;
        $result = $mysqli -> query($sql);
        if($result->num_rows === 0){
                echo "<div class='alert alert-info col s12 offset-s2'>";
                echo "<h5 class='flow-text'>No Existen Productos con los parámetros especificados.</h5>";
                echo "</div>";
        }else{
            while($row = mysqli_fetch_array($result)) {
               echo "<div class='col s6 m4 l3'>";
               echo     "<div class='card hoverable'>";
               echo         "<div class='card-image'>";
               echo             "<a href='producto.php?id=".$row['id']."''><img src='".$row['img1']."' class='img-responsive'></a>";
               echo             "<a href='carro.php?new-producto-id=".$row['id']."'' class='hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped' data-position='top' data-delay='50' data-tooltip='Agregar al carrito'><i class='material-icons'>add</i></a>";
               echo         "</div>";
               echo         "<div class='card-content'>";
               echo             "<a class='card-title' href='producto.php?id=".$row['id']."'>".$row['nombre']."</a>";
               echo             "<p class='truncate'>".$row['descripcion']."</p>";
               echo         "</div>";
               echo     "</div>";
               echo "</div>";
            }
            $mysqli ->close();
        }
    }
}else{
    
    $sql = "SELECT * FROM `producto`";
    //echo $sql;
        $result = $mysqli -> query($sql);
        if($result->num_rows === 0){
                echo "<div class='alert alert-info'>";
                echo "No Existen Productos.";
                echo "</div>";
        }else{
            while($row = mysqli_fetch_array($result)) {
               echo "<div class='col s6 m4 l3'>";
               echo     "<div class='card hoverable'>";
               echo         "<div class='card-image'>";
               echo             "<a href='producto.php?id=".$row['id']."''><img src='".$row['img1']."' class='img-responsive'></a>";
               echo             "<a href='carro.php?new-producto-id=".$row['id']."'' class='hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped' data-position='top' data-delay='50' data-tooltip='Agregar al carrito'><i class='material-icons'>add</i></a>";
               echo         "</div>";
               echo         "<div class='card-content'>";
               echo             "<a class='card-title' href='producto.php?id=".$row['id']."'>".$row['nombre']."</a>";
               echo             "<p class='truncate'>".$row['descripcion']."</p>";
               echo         "</div>";
               echo     "</div>";
               echo "</div>";
            }
            $mysqli ->close();
        }
}//Fin si no hay variable definida    