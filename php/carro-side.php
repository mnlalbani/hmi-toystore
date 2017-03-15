<?php
    $total=0;
    if(isset($_SESSION['carrito'])){
    $datos=$_SESSION['carrito'];    
    $total=0;
    for($i=0;$i<count($datos);$i++){
        //<div id="articulo_pago">· <?php echo $datos[$i]['Nombre'];</div><br>
        echo "<li class='collection-item avatar'>";
        echo "<i class='material-icons circle'>shopping_basket</i>";
        echo "<span class='title'>Nombre: ".$datos[$i]['nombre']."</span>";
        echo "<p>Precio: $".$datos[$i]['precio']."<br>";
        echo "Cantidad: ".$datos[$i]['cantidad']."";
        echo "</p>";
        echo "<a href='#!' class='secondary-content'><i class='material-icons'>attach_money</i>".$datos[$i]['cantidad']*$datos[$i]['precio']."</a>";
        echo "</li>";
        $total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
    }
    //echo '<div id="etiqueta">Total: Bs. '.$total.'</div>';
    }				
?>