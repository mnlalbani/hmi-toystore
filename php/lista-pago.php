<?php
    include_once("conexion.php");

    $sql = "SELECT * FROM `metodos_pago` WHERE `usuarioid` = '".$_SESSION['usuarioid']."'";
    $result= $mysqli->query($sql);
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
                echo "<tr> <!-- Fila de tabla pago -->";
                echo "                            <td>";
                echo "                                    <p>";
                echo "                                        <input class='with-gap' name='group3' type='radio' id='".$i."'  />";
                echo "                                        <label for='".$i."'>".$row['metodo']."</label>";
                echo "                                    </p>";
                echo "                            </td>";
                echo "                            <td>";
                echo "                                <p class='card-number'>".$row['termina']."</p>";
                echo "                            </td>";
                echo "                            <td>";
                echo "                                <p class='card-expire'>".$row['expira']."</p>";
                echo "                            </td>";
                echo "                        </tr>";
            $i++;
        }
    $mysqli->close();
?>