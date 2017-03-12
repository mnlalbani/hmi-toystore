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
    <!-- local materialize files 
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/materialize.min.css">
    -->
    <meta charset="UTF-8">
    <title>Vista Lista de Articulos</title>
    <style>
        footer {
      padding-left: 300px;
        }

    @media only screen and (max-width : 992px) {
        footer {
        padding-left: 0;
      }
    }
    </style>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="light-blue lighten-2">
                <div class="nav-wrapper">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                    <a href="index.php" class="brand-logo">Logo</a>
                    <ul class="right">
                        <li><a href="#"><i class="material-icons left">search</i></a></li>
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>Perfil</span></a></li>";
                            echo "<li><a href='index.php?logout=true'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Salir'>exit_to_app</i><span class='hide-on-med-and-down'>Salir</span></a></li>";
                            }else{
                            echo "<li><a href='login.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Ingresa'>account_circle</i><span class='hide-on-med-and-down'>Ingresa</span></a></li>";    
                            }
                        ?>
                        <li><a href="carro.php"><i class="material-icons left">shopping_cart</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="grey lighten-5">
        <div class="row">
            <div class="col s3 m0 l3"> <!-- Side nav -->
                <ul id="slide-out" class="side-nav fixed collection with-header">
                    <a href="lista.php" class="collection-item">Ver todo</a>
                    <li class="collection-header collection-header">Categorias</li>
                    <a href="lista.php?categoria=nino" class="collection-item">Niños</a>
                    <a href="lista.php?categoria=nina" class="collection-item">Niñas</a>
                    <a href="lista.php?categoria=bebes" class="collection-item">Bebés</a>
                    <a href="lista.php?categoria=exterior" class="collection-item">Exterior</a>
                    <a href="lista.php?categoria=videojuego" class="collection-item">Videojuegos</a>
                    <li class="collection-header">Marcas</li>
                    <a href="lista.php?marca=fisher-price" class="collection-item">Fisher Price</a>
                    <a href="lista.php?marca=disney" class="collection-item">Disney</a>
                    <a href="lista.php?marca=lego" class="collection-item">LEGO</a>
                    <a href="lista.php?marca=nintendo" class="collection-item">Nintendo</a>
                    <a href="lista.php?marca=marvel" class="collection-item">Marvel</a>
                    <a href="" class="collection-item">Star Wars</a>
                    <li class="collection-header">Precios</li>
                    <li class="collection-item"></li>
                </ul>
            </div>
            <div class="col s12 m12 l9"> <!-- contenido principal -->
                <div class="">
                    <div class="section"></div>
                    <div class="row"> <!-- primera fila -->
                        <?php 
                            include("php/lista-producto.php");
                        ?>
                </div>
                <div class="row">
                    <div class="col s9 offset-s2 m8 offset-m4 l18 offset-l4">
                         <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>
                    </div>
                </div> 
            </div><!-- fin contenido principal -->           
        </div>     
    </main>
    <footer class="page-footer light-blue lighten-2"> <!-- Footer -->
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