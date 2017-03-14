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
            <nav class="light-blue lighten-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left">
                        <img src="images/logo/logo.png" class="logo-img" alt="">
                    </a>
                    <ul class="right">
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
    
        <main> <!-- Seccion del login -->
        <div class="container center-align">
            <div class="section"></div>
            <h5 class="indigo-text">Por favor, ingrese sus datos</h5>
            <div class="section"></div>
            <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                <form class="col s12" method="post" id="registrarUsuario">
                    <input type="text" hidden name="tipo" value="registrar">
                    <div class='row'>
                    <div class='col s12'>
                    </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">person</i>
                            <label for='nombre' class="left-align">Ingresa tu nombre</label>
                            <input class='validate' type='text' name='nombre' id='nombre' required>
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
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">lock</i>
                            <label for='password2' class="left-align" id="labelpass" data-error="Contraseña no coincide">Repite tu contraseña</label>
                            <input class='validate' type='password' name='password2' id='password2'  required disabled>
                        </div>
                        <label style='float: right;'  class="hidden">
                            <a class='pink-text' href='#!'><b>Olvidó su contraseña?</b></a>
                        </label>
                    </div>
                    <br />
                    <center>
                    <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo' id="btn-registrar">Registrar</button>
                    </div>
                    </center>
                </form>
                </div>
            </div>
            <a href="#!">¿Ya posee una cuenta?</a>
            <div class="section"></div> <!-- Separador -->
            <div class="section"></div> <!-- Separador -->
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