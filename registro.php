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
    
    <title>Inicio de Sesión</title>
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
                            <input class='validate' type='text' name='nombre' id='nombre'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">email</i>
                            <label for='email' class="left-align">Ingresa tu correo</label>
                            <input class='validate' type='email' name='email' id='email'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">lock</i>
                            <label for='password' class="left-align">Ingresa tu contraseña</label>
                            <input class='validate' type='password' name='password' id='password'>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class="material-icons prefix">lock</i>
                            <label for='password2' class="left-align">Repite tu contraseña</label>
                            <input class='validate' type='password' name='password2' id='password2'>
                        </div>
                        <label style='float: right;'  class="hidden">
                            <a class='pink-text' href='#!'><b>Olvidó su contraseña?</b></a>
                        </label>
                    </div>
                    <br />
                    <center>
                    <div class='row'>
                        <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Registrar</button>
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
    
    <footer class="page-footer"> <!-- Footer -->
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