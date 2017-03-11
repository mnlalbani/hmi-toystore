<?php
    include_once("conexion.php");

    $sql = "SELECT * FROM `direcciones` WHERE `usuarioid` = '".$_SESSION['usuarioid']."'";
    $result= $mysqli->query($sql);
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
            echo " <tr> <!-- Fila de tabla pago -->";
            echo "                              <td>";
            echo "                                      <p>";
            echo "                                          <input class='with-gap' name='group3' type='radio' id='".$i."'  />";
            echo "                                          <label for='".$i."'></label>";
            echo "                                      </p>";
            echo "                             </td>";
            echo "                             <td>";
            echo "                                 <p class='card-number'>".$row['direccionEnvio']."</p>";
            echo "                             </td>";
            echo "                         </tr>echo ";
            $i++;
        }
    $mysqli->close();
?>