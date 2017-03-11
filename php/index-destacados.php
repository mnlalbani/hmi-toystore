<?php
include_once("conexion.php");

$sql = "SELECT * FROM `producto` LIMIT 2"; //Carga todo con esa marca
        $result = $mysqli -> query($sql);
        while($row = mysqli_fetch_array($result)) {
               echo "<div class='col s12 m6 l6'>";
               echo "              <div class='card hoverable light-blue'>";
               echo "                 <div class='card-image'>";
               echo "                     <a href='producto.php'><img src='".$row['img1']."' class='responsive-img'></a>";
               echo "                     <a href='carro.php?new-producto-id=".$row['id']."' class='hoverable btn-floating halfway-fab waves-effect waves-light orange accent-3 tooltipped' data-position='top' data-delay='50' data-tooltip='Agregar al carrito'><i class='material-icons'>add</i></a>";
               echo "                 </div>";
               echo "                 <div class='card-content'>";
               echo "                     <a class='card-title white-text flow-text' href='producto.php?id=".$row['id']."'>".$row['nombre']."</a>";
               echo "                     <p class='truncate white-text'>".$row['descripcion']."</p>";
               echo "                 </div>";
               echo "             </div>";
               echo "         </div>";
        }
?>