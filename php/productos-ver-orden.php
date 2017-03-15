<?php
    include("conexion.php");
    $a = 0;
    //var_dump($_COOKIE);
    $cantidadtotal = 0;
    $preciototal = 0;
     foreach($articuloid['articuloid'] as &$values){
        $sqlarticulo = "SELECT * FROM `producto` WHERE `id` = '".$articuloid['articuloid'][$a]."'";
        $a++;
        //echo $sqlarticulo;
        $resultarticulo = $mysqli->query($sqlarticulo);
    
    
        $c = 0;
        while($rows = mysqli_fetch_array($resultarticulo)) {
       echo  "<div class='card horizontal hoverable'>";
       echo  "<div class='card-image'>";
       echo "<img src='".$rows['img1']."'>";
       echo  "</div>";
       echo  "<div class='card-stacked'>";
       echo  "<div class='card-content'>";
       echo  "<p class='truncate'>".$rows['nombre']."</p>";
       echo  "<p>Precio por unidad: $".$rows['precio']." </p>";
       echo  "<p>Cantidad: ".$_COOKIE['cantidadarti'][$a-1]."</p>";
       echo  "</div>";
       echo  "<div class='card-action'>";
       echo  "<a href='producto.php?id=".$rows['id']."'>".$rows['nombre']."</a>";
       echo  "</div>";
       echo  "</div>";
       echo  "</div>";
       $preciototal = $rows['precio']+$preciototal;
       $c++;
       
       
       
      // echo $sqlarticulo;
    }
    
    $cantidadtotal = $_COOKIE['cantidadarti'][$a-1]+$_COOKIE['cantidadarti'][$a-1]+1;
     }		
     $preciodefinitivo = $preciototal*$cantidadtotal;	
?>