<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    
    <title>Vista Carro de Compras</title>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="light-blue lighten-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left">Logo</a>
                    <ul class="right">
                        <li><a href="#"><i class="material-icons left">search</i><span class="hide-on-med-and-down">Búsqueda</span></a></li>
                        <li><a href="login.php"><i class="material-icons left">account_circle</i><span class="hide-on-med-and-down">Ingresa</span></a></li>
                        <li><a href="carro.php"><i class="material-icons left">shopping_cart</i><span class="hide-on-med-and-down">Carro</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="grey lighten-5">
        <div class="section"></div>
        <div class="row">
            <div class="col s12 m12 l7">
                <div class="row"> <!-- fila de productos-->
                    <?php 
                        include("php/nuevo-carro.php");
                        include("php/articulos-carro.php");
                    ?>
                </div> <!-- fin fila de productos-->
            </div> <!-- lista de artiuclos -->
            <div class="col s12 m12 l5"><!-- lista de articulos y compra -->
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <ul class="collection with-header">
                                <li class="collection-header"><h4>Artículos</h4></li>
                                <?php
                                    include("php/carro-side.php");
                                ?>
                            </ul>
                            <form method="POST" action="direccion.php" id="formulario-comprar">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                            <i class="material-icons prefix">attach_money</i>
                                            <input disabled id="icon_telephone" type="tel" class="validate">
                                            <label class="black-text" for="icon_telephone">
                                                <?php
                                                    if(isset($total)){
                                                        echo $total;
                                                    }
                                                ?>
                                            </label>
                                            </div>
                                        </div>
                                        <?php 
                                        if(isset($datos)){
                                            for($i=0;$i<count($datos);$i++){
                                                            //<div id="articulo_pago">· <?php echo $datos[$i]['Nombre'];</div><br>
                                                            echo "<input hidden type='text' class='' name='producto-id".$i."' value='".$datos[$i]['id']."'>";
                                                        }
                                        }
                                            ?>
                                        <button class="col s12 center-align waves-effect waves-light btn"type="submit">Continuar</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- fin card-panel -->
                    </div>
                </div>
            </div>  <!-- fin contenedor lista compra -->
        </div>
    </main>
    <footer class="page-footer green lighten-2"> <!-- Footer -->
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Tienda de Juguetes</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 José Natera - Christian Ramos - Rosangela Cortesía
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
    </footer>
</body>
</html>