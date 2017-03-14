<?php
    session_start();
    if(!isset($_SESSION['usuarioid'])){
        header("location: index.php");
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
    <title>Método de Pago</title>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="teal lighten-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left">
                        <img src="images/logo/logo.png" class="logo-img" alt="">
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="lista.php"><i class="material-icons left">search</i>Búsqueda</a></li>
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>Perfil</span></a></li>";
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
    <main class="grey lighten-5">
        <div class="section"></div>
        <div class="row">
            <div class="col s12 m6 offset-m3 l6 offset-l3">
                <ul class="tabs grey lighten-5">
                    <div class="row">
                        <li class="tab col s3 disabled" ><a href="#test1">Login</a></li>
                        <li class="tab col s3 disabled" ><a href="#test2">Dirección</a></li>
                        <li class="tab col s3 disabled" ><a class="active" href="#test3">Pago</a></li>
                        <li class="tab col s3 disabled" ><a href="#test4">Ordena</a></li>
                    </div>
                </ul>  
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l7">
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                           <table class="table-responsive bordered highlight">
                               <thead>
                                   <tr>
                                       <h5 class="flow-text">Seleccione un Método de Pago</h5>
                                   </tr>
                                   <tr>
                                       <td>Nombre</td>
                                       <td>Termina en</td>
                                       <td>Expira en</td>
                                   </tr>
                                </tr>  
                               </thead>
                               <tbody>
                                   <form action="">
                                       <?php
                                            include("php/lista-pago.php");
                                        ?>
                                   </form>  
                               </tbody>
                           </table>
                           <br>
                           <a href="pago-perfil.php?redirect=true" class="">Agregar otro Método</a>
                        </div> <!-- fin card-panel -->
                    </div>
                </div>
            </div> <!-- lista de metodos de pago -->
            <div class="col s12 m12 l5"><!-- lista de  compra -->
                <div class="row">
                    <div class="col s12">
                        <blockquote cite="" class="">
                            <h5 class="flow-text">Pulse continuar para revisar su orden antes de finalizar.</h5>
                        </blockquote>
                        <div class="section"></div>
                        <div class="card-panel">
                            <form method="POST" action="" id="formulario-comprar-pago">
                                <div class="row">
                                    <div class="col s12">
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