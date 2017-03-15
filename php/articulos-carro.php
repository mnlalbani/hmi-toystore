<?php
//var_dump($_SESSION['carrito']);
    $total=0;
    if(isset($_SESSION['carrito'])){
    $datos=$_SESSION['carrito'];    
    $total=0;
    echo "<h5 class='flow-text col offset-s1'>Artículos en el Carrito</h5>";
    for($i=0;$i<count($datos);$i++){
        $actual = $_SESSION['carrito'][$i];

        //<div id="articulo_pago">· <?php echo $datos[$i]['Nombre'];</div><br>
        echo "<div class='col s12 m12 l12'>";
        echo "<div class='card horizontal'>";
        echo "<div class='card-image'>";
        echo "<img src='".$datos[$i]['img1']."'>";
        echo "</div>";
        echo "<div class='card-stacked'>";
        echo "<div class='card-content'>";
        echo "<p>".$datos[$i]['descripcion']."</p>";
        echo "<p>Precio por unidad: $".$datos[$i]['precio']."</p>";
        echo "<p>Cantidad Seleccionada: ".$datos[$i]['cantidad']."</p>";
        echo "</div>";
        echo "<div class='card-action'>";
        echo "<a href='producto.php?id=".$datos[$i]['id']."'>".$datos[$i]['nombre']."</a>";
        echo "<a href='producto.php?id=".$datos[$i]['id']."'><i data-position='top' data-delay='50' data-tooltip='Disminuir Cantidad' class='tooltiped material-icons'>remove_circle</i></a>";
        echo "<a href='carro.php?new-producto-id=".$datos[$i]['id']."'><i data-position='top' data-delay='50' data-tooltip='Aumentar Cantidad' class='tooltiped material-icons'>add_circle</i></a>";
        echo "<a href='carro.php?detele=".$datos[$i]['id']."' ><i data-position='top' data-delay='50' data-tooltip='Eliminar del Carro'class='tooltiped material-icons'>remove_shopping_cart</i></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        //$total=($datos[$i]['cantidad']*$datos[$i]['precio'])+$total;
    }
        
    }else{
        echo '<blockquote class="col s12 m12 l12 offset-l3">
                <span><h5>No has añadido ningún producto aún.</h5></span>
                <br>
                <a href="lista.php">Revisa nuestra lista de artículos</a>
            </blockquote>';
    }
    //echo '<div id="etiqueta">Total: Bs. '.$total.'</div>';
					
?>