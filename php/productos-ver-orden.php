<?php
    include("conexion.php");
    $a = 0;
     foreach($articuloid['articuloid'] as &$values){
        $sqlarticulo = "SELECT * FROM `producto` WHERE `id` = '".$articuloid['articuloid'][$a]."'";
        //echo $sqlarticulo;
        $resultarticulo = $mysqli->query($sqlarticulo);
}	
    $a++;
        $c = 0;
        while($rows = mysqli_fetch_array($resultarticulo)) {
       echo  "<div class='card horizontal hoverable'>";
       echo  "<div class='card-image'>";
       echo "<img src='".$rows['img1'][$c]."'>";
       echo  "</div>";
       echo  "<div class='card-stacked'>";
       echo  "<div class='card-content'>";
       echo  "<p class='truncate'>".$rows['nombre'][$c]."</p>";
       echo  "<p>Precio por unidad: $".$rows['precio'][$c]." </p>";
       echo  "<p>Cantidad: ".$datos[$i]['cantidad']."</p>";
       echo  "</div>";
       echo  "<div class='card-action'>";
       echo  "<a href='producto.php?id=".$rows['id'][$c]."'>".$rows['id'][$c]."</a>";
       echo  "</div>";
       echo  "</div>";
       echo  "</div>";
       //$total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
       $c++;
       echo $articuloid['articuloid'][1];
    
}				
?>