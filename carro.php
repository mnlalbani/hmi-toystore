<?php 
    session_start();
    //var_dump($_SESSION['carrito']);
    if(isset($_GET['vaciar'])){
        unset($_SESSION['carrito']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    
    <title>Vista Carro de Compras</title>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="teal lighten-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left">
                        <img src="images/logo/logo.png" class="responsive-img logo-img" alt="">
                    </a>
                    <ul class="right">
                        <li><a href="lista.php"><i class="material-icons left">search</i><span class="hide-on-med-and-down">Búsqueda</span></a></li>
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>Perfil</span></a></li>";
                            echo "<li><a href='index.php?logout=true'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Salir'>exit_to_app</i><span class='hide-on-med-and-down'>Salir</span></a></li>";
                            }else{
                            echo "<li><a href='login.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Ingresa'>account_circle</i><span class='hide-on-med-and-down'>Ingresa</span></a></li>";    
                            }
                        ?>
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
                            <form method="POST" action="" id="formulario-comprar-carro">
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
                                        <button <?php //if(!isset($_SESSION['usuarioid'])){ echo "disabled"; } ?> class="col s12 center-align waves-effect waves-light btn"type="submit">Continuar</button>
                                    </div>
                                </div>
                            </form>
                            <div class="section"></div>
                            
                        </div> <!-- fin card-panel -->
                        <a class="col offset-s4"href="carro.php?vaciar=true">Vaciar el Carro de Compras</a>
                    </div>
                </div>
            </div>  <!-- fin contenedor lista compra -->
        </div>
    </main>
    <footer class="page-footer teal lighten-2"> <!-- Footer -->
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">El Rincón Del Juego</h5>
                <p class="grey-text text-lighten-4">Más Juguetes, Más Diversión</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Enlaces</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Tu Cuenta</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Tus Ordenes</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Escríbenos</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Ayuda</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 José Natera - Christian Ramos - Rosangela Cortesía -Jesús Cordova
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/facebook.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/twitter.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/instagram.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/google.png" alt="" class="social-icon"></a>
            </div>
          </div>
    </footer>
</body>
</html>