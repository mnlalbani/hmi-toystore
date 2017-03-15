<?php
    include_once("conexion.php");

    $sql = "SELECT * FROM `metodos_pago` WHERE `usuarioid` = '".$_SESSION['usuarioid']."'";
    $result= $mysqli->query($sql);
    $i = 0;
    while($row = mysqli_fetch_array($result)) {
                echo "<tr class='fila-pago'> <!-- Fila de tabla pago -->";
                echo "                            <td>";
                echo "                                    <p>";
                echo "                                        <input class='with-gap' name='pago' type='radio' id='".$i."'  value='".$row['termina']."' required checked/>";
                echo "                                        <label for='".$i."'>".$row['metodo']."</label>";
                echo "                                    </p>";
                echo "                            </td>";
                echo "                            <td>";
                echo "                                <p class='card-number'>".$row['termina']."</p>";
                echo "                            </td>";
                echo "                            <td>";
                echo "                                <p class='card-expire'>".$row['expira']."</p>";
                echo "                            </td>";
                echo "                             <td>";
            echo "<a class='editar-pago btn ' value='".$row['id']."'>Editar</a>";
            echo "                             </td>";
            echo "                             <td>";
            echo "<a class='eliminar-pago btn red' value='".$row['id']."'>Eliminar</a>";
            echo "                             </td>";
                echo "                        </tr>";
            $i++;
        }
    $mysqli->close();
?>