<?php
    $total=0;
    if(isset($_SESSION['carrito'])){
    $datos=$_SESSION['carrito'];    
    $total=0;
    for($i=0;$i<count($datos);$i++){
       echo  "<div class='card horizontal hoverable'>";
       echo  "<div class='card-image'>";
       echo "<img src='".$datos[$i]['img1']."'>";
       echo  "</div>";
       echo  "<div class='card-stacked'>";
       echo  "<div class='card-content'>";
       echo  "<p class='truncate'>".$datos[$i]['nombre']."</p>";
       echo  "<p>Precio por unidad: $".$datos[$i]['precio']." </p>";
       echo  "<p>Cantidad: ".$datos[$i]['cantidad']."</p>";
       echo  "</div>";
       echo  "<div class='card-action'>";
       echo  "<a href='producto.php?id=".$datos[$i]['id']."'>".$datos[$i]['nombre']."</a>";
       echo  "</div>";
       echo  "</div>";
       echo  "</div>";
       $total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
    }	
}				
?>