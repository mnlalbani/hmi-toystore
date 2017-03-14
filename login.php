<?php
    session_start();
    if(isset($_SESSION['correo'])){
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
    
    <title>Inicio de Sesión</title>
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
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>Perfil</span></a></li>";
                            echo "<li><a href='carro.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Carro''>shopping_cart</i>Carro</a></li>";
                            echo "<li><a href='index.php?logout=true'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Salir'>exit_to_app</i><span class='hide-on-med-and-down'>Salir</span></a></li>";
                            }else{
                            echo "<li class='active'><a href='login.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Ingresa'>account_circle</i><span class='hide-on-med-and-down'>Ingresa</span></a></li>";
                            echo "<li><a href='carro.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Carro''>shopping_cart</i>Carro</a></li>";                                    
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
   
        <main class="grey lighten-5"> <!-- Seccion del login -->
        <div class="row">
            <div class="section">
            </div>
            <div class="col s12 m6 offset-m3 l6 offset-l3" <?php if(!isset($_GET['shop'])){ echo "hidden";} ?>> <!-- oculta si la sesion no esta iniciada y no se viene desde el carro de compras -->
                <ul class="tabs grey lighten-5" > 
                    <div class="row" >
                        <li class="tab col s3 disabled" ><a class="active" href="#test1">Login</a></li>
                        <li class="tab col s3 disabled" ><a href="#test2">Dirección</a></li>
                        <li class="tab col s3 disabled" ><a  href="#test3">Pago</a></li>
                        <li class="tab col s3 disabled" ><a href="#test4">Ordena</a></li>
                    </div>
                </ul>  
            </div>
        </div>
         <div class="container center-align">
            <div class="section"></div>
            <?php 
                if(isset($_GET['error'])){
                    echo "<h5 class='red-text'>Usuario no Registrado</h5>";
                    echo "<a href='registro.php'>¿No posee cuenta aún?</a>";
                }else{
                    echo "<h5 class='indigo-text'>Por favor, ingrese a su cuenta</h5>";
                }
            
            ?>
            <div class="section"></div>
            <div class="container">
                <div class="z-depth-1 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                <form class="col s12" method="post" id="login-form" action="php/login.php">
                    <div class='row'>
                    <div class='col s12'>
                    </div>
                    </div>

                    <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">email</i>
                        <label for='email' class="left-align">Ingresa tu correo</label>
                        <input class='validate' type='email' name='email' id='email' required>
                    </div>
                    </div>

                    <div class='row'>
                    <div class='input-field col s12'>
                        <i class="material-icons prefix">lock</i>
                        <label for='password' class="left-align">Ingresa tu contraseña</label>
                        <input class='validate' type='password' name='password' id='password' required>
                    </div>
                    <label style='float: right;'>
                        <a class='pink-text hidden' href='#!'><b>Olvidó su contraseña?</b></a>
                    </label>
                    </div>
                    <br />
                    <center>
                    <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                    </div>
                    </center>
                </form>
                </div>
            </div>
            <a href="registro.php">¿No posee cuenta aún?</a>
            <div class="section"></div> <!-- Separador -->
            <div class="section"></div> <!-- Separador -->
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