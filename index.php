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
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/materialize.min.css">
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
nav {
    height: 80px;
    line-height: 80px;
}

nav i, nav [class^="mdi-"], nav [class*="mdi-"], nav i.material-icons {
    height: 80px;
    line-height: 80px;
}

nav .button-collapse i {
    height: 80px;
    line-height: 80px;
}

nav .brand-logo { 
    font-size: 1.6rem; 
}

@media only screen and (min-width: 601px){
    nav, nav .nav-wrapper i, nav a.button-collapse, nav a.button-collapse i {
        height:  80px;
        line-height:  80px;
    }
}
    </style>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="light-blue lighten-2">
                <div class="nav-wrapper">
                   <a href="index.php" class="brand-logo left">
                        <img src="images/logo/logo.png" class="responsive-img logo-img" alt="">
                    </a>
                    
                    <ul class="right">
                        <li><form method="GET" action="lista.php">
                                   <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input type="text" id="autocomplete" name="busqueda" class="autocomplete">
          <label for="autocomplete">Búsqueda</label>
        </div>
      </div>
    </div>
  </div>
                            </form>
                        </li>
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>".$_SESSION['nom_usu']."</span></a></li>";
                            echo "<li><a href='carro.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Carro''>shopping_cart</i>Carro</a></li>";
                            echo "<li><a href='index.php?logout=true'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Salir'>exit_to_app</i><span class='hide-on-med-and-down'>Salir</span></a></li>";
                            }else{
                            echo "<li><a href='login.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Ingresa'>account_circle</i><span class='hide-on-med-and-down'>Ingresa</span></a></li>";
                            echo "<li><a href='carro.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Carro''>shopping_cart</i>Carro</a></li>";                                    
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="grey lighten-4">  
    <div style="margin-bottom:10px"></div>
        <div class="row">
            <div class="slider">
                <ul class="slides">
                <li>
                    <img src="images/producto/gam3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                    <h1 class="white-text">Soldados de Plástico Que Tanto Deseas!</h1>
                    <a href="producto.php?id=3" class="light grey-text text-lighten-3"><h3>Compralo Ya!</h3></a>
                    </div>
                </li>
                <li>
                    <img src="images/producto/ca.jpg"> <!-- random image -->
                    <div class="caption left-align">
                    <h1 class="white-text">Figura Capitán América Civil War</h1>
                    <a href="producto.php?id=2" class="light grey-text text-lighten-3"><h3>Compralo Ya!</h3></a>
                    </div>
                </li>
                <li>
                    <img src="images/producto/switch3.jpg"> <!-- random image -->
                    <div class="caption right-align">
                    <h1 class="white-text">Nuevo Nintendo Switch</h1>
                    <a href="producto.php?id=1" class="light grey-text text-lighten-3"><h3>Compralo Ya!</h3></a>
                    </div>
                </li>
                </ul>
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
                    

                    

                    <img src="images/estanteria.svg" width="1326" height="655" border="0" usemap="#map" />

<map name="map">
<!-- #$-:Image map file created by GIMP Image Map plug-in -->
<!-- #$-:GIMP Image Map plug-in by Maurits Rijk -->
<!-- #$-:Please do not edit lines starting with "#$" -->
<!-- #$VERSION:2.3 -->
<!-- #$AUTHOR:Albani -->
<area shape="rect" coords="231,157,434,283" href="lista.php?categoria=mesa"  class="tooltiped" data-tooltip="Juegos de Mesa" data-position="bottom"/>
<area shape="rect" coords="203,287,475,463" href="lista.php?categoria=exterior" />
<area shape="rect" coords="560,125,745,279" href="lista.php?categoria=bebe" />
<area shape="rect" coords="552,288,741,464" href="lista.php?categoria=nina" />
<area shape="rect" coords="879,287,1112,459" href="lista.php?categoria=nino" />
<area shape="rect" coords="890,140,1101,284" href="lista.php?categoria=videojuego" />
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