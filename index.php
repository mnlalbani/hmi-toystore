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
.social-icon{
    width: 30px;
    height: 30px;
    margin-right: 5px;
}
    </style>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="light-blue lighten-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left">
                        <img src="images/logo/logo.svg" class="responsive-img" alt="" style="width:64px; height:64px">
                    </a>
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
    <div style="margin-bottom:10px"></div>
        <div class="row">
            <div class="carousel carousel-slider z-depth-1 hide-on-med-and-down" data-indicators="true" style="height:300px">
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
        <div class="row z-depth-1">
                <a href="lista.php?categoria=nino" class="valign-wrapper col s6 m6 l2  light-blue lighten-2 index-category-link white-text"><h5 class="valign" style="margin: 0 auto">Niños</h5></a>
                <a href="lista.php?categoria=nina" class="valign-wrapper col s6 m6 l2 light-blue lighten-2 index-category-link white-text"><h5 class="valign" style="margin: 0 auto">Niñas</h5></a>
                <a href="lista.php?categoria=bebe" class="valign-wrapper col s6 m6 l2 light-blue lighten-2 index-category-link white-text"><h5 class="valign" style="margin: 0 auto">Bebés</h5></a>
                <a href="lista.php?categoria=exterior" class="valign-wrapper col s6 m6 l2 light-blue lighten-2 index-category-link white-text"><h5 class="valign" style="margin: 0 auto">Exterior</h5></a>
                <a href="lista.php?categoria=videojuego" class="valign-wrapper col s6 m6 l2 light-blue lighten-2 index-category-link white-text"><h5 class="valign" style="margin: 0 auto">Videojuegos</h5></a>
                <a href="lista.php?categoria=mesa" class="valign-wrapper col s6 m6 l2 light-blue lighten-2 index-category-link white-text"><h5 class="valign" style="margin: 0 auto">Juegos de Mesa</h5></a>
                
                <div class="col l12 hide-on-med-and-down">
                    <img src="images/categoria.jpg" width="1300" height="480" border="0" class="" alt="" usemap="#map" >
                    <!--<img src="categoria.xcf" width="1300" height="480" border="0" />-->

                    <map name="map">
                        <!-- #$-:Image map file created by GIMP Image Map plug-in -->
                        <!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
                        <!-- #$-:Please do not edit lines starting with "#$" -->
                        <!-- #$VERSION:2.3 -->
                        <!-- #$AUTHOR:Albani -->
                        <area shape="rect" coords="287,50,465,223" alt="videojuego" target="videojuego" href="videojuego" />
                        <area shape="rect" coords="691,140,813,342" alt="bebe" target="bebe" href="bebe" />
                        <area shape="rect" coords="59,232,349,475" alt="exterior" target="exterior" href="exterior" />
                        <area shape="rect" coords="358,343,577,460" alt="mesa" target="mesa" href="mesa" />
                        <area shape="rect" coords="1054,224,1342,458" alt="nina" target="nina" href="nina" />
                        <area shape="rect" coords="824,222,1036,460" alt="nino" target="nino" href="nino" />
                    </map>
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
    <footer class="page-footer light-blue lighten-2"> <!-- Footer -->
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
            © 2017 | José Natera - Christian Ramos - Rosangela Cortesía - Jesús Cordova
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/facebook.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/twitter.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/instagram.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/google.png" alt="" class="social-icon"></a>
            </div>
          </div>
    </footer>
    <script type="text/javascript" src="js/main.js"></script>
        
</body>
</html>