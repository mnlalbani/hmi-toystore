<?php
    session_start();
    if(!isset($_SESSION['usuarioid'])){
        header("location: index.php");
    }
    include("php/perfil-usuario.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    
    <title>Dirección de Envío</title>
    <style>
        .profile-option-icon{
            width: 100px;
            height: 100px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="amber lighten-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo">Logo</a>
                    <ul class="right">
                        <li><a href="#" ><i class="material-icons left">search</i><span class="hide-on-med-and-down">Busqueda</span></a></li>
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
            <div class="col s12 m12 l5 right"><!-- Bienvenido -->
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <form method="POST" action="" id="formulario-comprar-direcciones">
                                <div class="row">
                                    <div class="col s12">
                                        <blockquote cite="" class="">
                            <h5><?php echo "Bienvenido, ".$_SESSION['nombreusuario'].""; ?> </h5>
                            <ul>
                                <li>
                                    <a href="direcciones-perfil.php">Gestiona tus direcciones de envío</a>
                                </li>
                                <li>
                                    <a href="pago-perfil.php">Gestiona tus métodos de pago</a>
                                </li>
                            </ul>
                        </blockquote>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- fin card-panel -->
                        
                    </div>
                </div>
            </div>  <!-- fin Bienvenido -->
            <div class="col s12 m12 l7 left"> <!--lista de opciones -->
                <div class="row">
                    <div class="col s12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="images/profile/bag.png" class="profile-option-icon">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                <h5 class="flow-text">Ordenes</h5>
                                </div>
                                <div class="card-action">
                                <a href="orden-perfil.php">Revisa Tus Ordenes</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="images/profile/direccion.png" class="profile-option-icon">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                <h5 class="flow-text">Direcciones de Envío</h5>
                                </div>
                                <div class="card-action">
                                <a href="direcciones-perfil.php">Gestiona Tus Direcciones de Envío</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col s12">
                        <div class="card horizontal">
                            <div class="card-image">
                                <img src="images/profile/wallet.png" class="profile-option-icon">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                <h5 class="flow-text">Métodos de Pago</h5>
                                </div>
                                <div class="card-action">
                                <a href="pago-perfil.php">Gestiona Tus Métodos de Pago</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- lista de opciones -->
            
        </div>
    </main>
    <footer class="page-footer amber lighten-2"> <!-- Footer -->
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
            © 2017 José Natera - Christian Ramos - Rosangela Cortesía - Jesús Cordova
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/facebook.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/twitter.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/instagram.png" alt="" class="social-icon"></a>
            <a class="grey-text text-lighten-4 right" href="#!"><img src="images/social/google.png" alt="" class="social-icon"></a>
            </div>
          </div>
    </footer>
</body>
</html>