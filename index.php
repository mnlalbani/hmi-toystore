<?php
    session_start();
    if(isset($_GET['logout'])){
        session_unset();
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    
    <meta charset="UTF-8">
    
    <title>Inicio Juguetería</title>
    <style>
        .nav-wrapper .input-field input[type=search] {
  height: 64px;
}
.nav-wrapper input[type="search"]:focus {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
}
.input-field label {
  max-height: 64px;
}
.nav-wrapper input[type="search"]:focus ~ .label-icon.active {
  position: fixed;
  left: 10px;
}
.nav-wrapper input[type="search"]:focus ~ .closed {
  position: fixed;
  right: 10px;
}
    </style>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="light-blue lighten-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left">Logo</a>
                    <ul class="right">
                        <li>
                            <form>
                                <div class="input-field">
                                    <input id="search" type="search" placeholder="Búsqueda">
                                    <label class="label-icon" for="search"><i class="material-icons left tooltipped" data-position="bottom" data-delay="50" data-tooltip="Ingresa">search</i></label>
                                    <i class="material-icons">close</i>
                                </div>
                            </form>
                        </li>
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>Perfil</span></a></li>";
                            echo "<li><a href='index.php?logout=true'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Salir'>exit_to_app</i><span class='hide-on-med-and-down'>Salir</span></a></li>";
                            }else{
                            echo "<li><a href='login.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Ingresa'>account_circle</i><span class='hide-on-med-and-down'>Ingresa</span></a></li>";    
                            }
                        ?>
                        <li><a href="carro.php"><i class="material-icons left tooltipped" data-position="bottom" data-delay="50" data-tooltip="Carro de Compras">shopping_cart</i><span class="hide-on-med-and-down">Carro</span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="grey lighten-4">  
        <div class="row">
            <div class="carousel carousel-slider z-depth-1" data-indicators="true">
                    <div class="carousel-item">
                        <a href="#one!"><img src="images/toy-store-1.jpg" class="responsive-img"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#two!"><img src="images/toy-store-1.jpg" class="responsive-img"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#three!"><img src="images/toy-store-3.jpg" class="responsive-img"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#four!"><img src="images/toy-store-4.jpg" class="responsive-img"></a>
                    </div>
            </div>
        </div>
        <div class="row">
            <div class="categoria m11 l11 hide-on-small-only">
                <img src="images/NOA_8879.jpg" class="responsive-img" alt="">
            </div>
        </div>
        <div class="row"> 
            <div class="col s12 m12 l6"><!-- destacados -->
                <div class="card-panel grey lighten-5">
                    <div class="row">
                        <h3 class="grey-text text-darken-3">Destacados</h3>
                        <?php 
                            include_once("php/index-destacados.php");
                        ?>
                    </div>
                </div>
            </div>
            <div class="col s12 m12 l6"> <!-- nuevos -->
                <div class="card-panel grey lighten-5">
                    <div class="row">
                        <h3 class="grey-text text-darken-3">Nuevo</h3>
                        <?php 
                            include_once("php/index-nuevos.php");
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="page-footer light-blue lighten-2">
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
    <script type="text/javascript" src="js/main.js"></script>
        
</body>
</html>