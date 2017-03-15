<?php
    include_once("conexion.php");

    $sql = "SELECT * FROM `venta` WHERE `usuarioid` = '".$_SESSION['usuarioid']."' ORDER BY `id` DESC";
    $result= $mysqli->query($sql);
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
                echo "<tr> <!-- Fila de tabla pago -->";
                echo "                            <td>";
                echo "                                    <p>";
                echo "En Espera Por Revisión";
                echo "                                    </p>";
                echo "                            </td>";
                echo "                            <td>";
                echo "                                <p class='card-number'>".$row['direccionEnvio']."</p>";
                echo "                            </td>";
                echo "                            <td>";
                echo "                                <p class='card-expire'>".$row['metodoPago']."</p>";
                echo "                            </td>";
                echo "                            <td>";
                echo "                                <p class='card-expire'>$".$row['preciototal']."</p>";
                echo "                            </td>";
                echo "                            <td>";
                echo "                                <a href='ver-orden-perfil?id=".$row['id']."&metodoPago=".$row['metodoPago']."&direccionEnvio=".$row['direccionEnvio']."&preciototal=".$row['preciototal']."'>Ver</a>";
                echo "                            </td>";
                echo "                        </tr>";
            $i++;
        }
    $mysqli->close();
?>