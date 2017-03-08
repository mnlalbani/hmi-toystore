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
    
    <title>Vista Carro de Compras</title>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav>
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo">Logo</a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#"><i class="material-icons left">search</i>Búsqueda</a></li>
                        <li><a href="login.php"><i class="material-icons left">account_circle</i>Ingresa</a></li>
                        <li><a href="carro.php"><i class="material-icons left">shopping_cart</i>Carro</a></li>
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
                               </thead>
                               <tbody>
                                   <form action="">
                                        <tr> <!-- Fila de tabla pago -->
                                            <td>
                                                    <p>
                                                        <input class="with-gap" name="group3" type="radio" id="test1"  />
                                                        <label for="test1">LOGO</label>
                                                    </p>
                                            </td>
                                            <td>
                                                <p class="card-number">Termina en</p>
                                            </td>
                                            <td>
                                                <p class="card-expire">Expira el</p>
                                            </td>
                                        </tr><!-- fin fila tabla pago -->
                                        <tr> <!-- Fila de tabla pago -->
                                            <td>
                                                    <p>
                                                        <input class="with-gap" name="group3" type="radio" id="test2"  />
                                                        <label for="test2"><img src="" alt="">LOGO</label>
                                                    </p>
                                            </td>
                                            <td>
                                                <p class="card-number">Termina en</p>
                                            </td>
                                            <td>
                                                <p class="card-expire">Expira el</p>
                                            </td>
                                        </tr><!-- fin fila tabla pago -->
                                        <tr> <!-- Fila de tabla pago -->
                                            <td>
                                                    <p>
                                                        <input class="with-gap" name="group3" type="radio" id="test3"  />
                                                        <label for="test3"><img src="" alt="">LOGO</label>
                                                    </p>
                                            </td>
                                            <td>
                                                <p class="card-number">Termina en</p>
                                            </td>
                                            <td>
                                                <p class="card-expire">Expira el</p>
                                            </td>
                                        </tr><!-- fin fila tabla pago -->
                                        <tr> <!-- Fila de tabla pago -->
                                            <td>
                                                    <p>
                                                        <input class="with-gap" name="group3" type="radio" id="test4"  />
                                                        <label for="test4"><img src="" alt="">LOGO</label>
                                                    </p>
                                            </td>
                                            <td>
                                                <p class="card-number">Termina en</p>
                                            </td>
                                            <td>
                                                <p class="card-expire">Expira el</p>
                                            </td>
                                        </tr><!-- fin fila tabla pago -->
                                   </form>  
                               </tbody>
                           </table>
                           <br>
                           <a href="#" class="">Agregar otro Método</a>
                        </div> <!-- fin card-panel -->
                    </div>
                </div>
            </div> <!-- lista de artiuclos -->
            <div class="col s12 m12 l5"><!-- lista de articulos y compra -->
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <form method="POST" action="" id="formulario-comprar">
                                <div class="row">
                                    <div class="col s12">
                                        <button class="col s12 center-align waves-effect waves-light btn"type="submit">Continuar</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- fin card-panel -->
                        <div class="section"></div>
                        <blockquote cite="" class="">
                            <h5 class="flow-text">Puede revisar su orden antes de finalizar.</h5>
                        </blockquote>
                    </div>
                </div>
            </div>  <!-- fin contenedor lista compra -->
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