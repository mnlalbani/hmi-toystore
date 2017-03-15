<?php
    include_once("conexion.php");

    $sql = "SELECT `cantidad` FROM `producto` WHERE `id` = '".$_GET['id']."'";
    $result = $mysqli ->query($sql);
echo "<select name='cantidad'>";
    while($row = mysqli_fetch_array($result)) {
        $cantidad = $row['cantidad'];
    }
    for($i=1; $i<=$cantidad;$i++){
        echo "<option value='".$i."'>".$i."</option>";
    }
echo "</select>";