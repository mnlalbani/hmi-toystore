<?php
    $total=0;
    if(isset($_SESSION['carrito'])){
    $datos=$_SESSION['carrito'];    
    $total=0;
    for($i=0;$i<count($datos);$i++){


        //<div id="articulo_pago">· <?php echo $datos[$i]['Nombre'];</div><br>
        echo "<div class='col s12 m12 l12'>";
        echo "<div class='card horizontal'>";
        echo "<div class='card-image'>";
        echo "<img src='".$datos[$i]['img1']."'>";
        echo "</div>";
        echo "<div class='card-stacked'>";
        echo "<div class='card-content'>";
        echo "<p>Descripción del Producto</p>";
        echo "</div>";
        echo "<div class='card-action'>";
        echo "<a href='producto.php?id=".$datos[$i]['id']."'>".$datos[$i]['nombre']."</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        //$total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
    }
        
    }else{
        echo '<br><br><br><center><h4>No has añadido ningun producto</h4></center>';
    }
    //echo '<div id="etiqueta">Total: Bs. '.$total.'</div>';
					
?>