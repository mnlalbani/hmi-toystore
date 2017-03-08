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
    
    <title>Vista Producto</title>
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
    <div class="section"></div>
    <main>
        <!--<div class="container">-->
        <div class="row">
            <div class="col s12 m12 l7"> <!-- contenedor SLider e imagenes-->
                <div class="carousel carousel-slider z-depth-1" data-indicators="true">
                    <div class="carousel-item">
                        <a href="#one!"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#two!"><img src="http://lorempixel.com/800/400/food/2" class="img-responsive"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#three!"><img src="http://lorempixel.com/800/400/food/3" class="img-responsive"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#four!"><img src="http://lorempixel.com/800/400/food/4" class="img-responsive"></a>
                    </div>
                </div>
                <div class="section"></div>
                <div class="row hide-on-med-and-down"> <!-- contenedor imagenes secundarias -->
                    <div class="col s3 m3 l3">
                            <img src="http://lorempixel.com/800/400/food/2" alt="" class="responsive-img z-depth-2">
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="http://lorempixel.com/800/400/food/2" alt="" class="responsive-img z-depth-2">
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="http://lorempixel.com/800/400/food/2" alt="" class="responsive-img z-depth-2">
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="http://lorempixel.com/800/400/food/2" alt="" class="responsive-img z-depth-2">
                    </div>
                </div>
            </div> <!-- fin contenedor slider -->

            <div class="col s12 m12 l5"><!-- contenedor descripcion del producto y compra -->
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <b>Descripción</b>
                            <p class="descripcion-producto flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum porro in fugit natus quia consectetur autem libero, aliquam blanditiis magni quo odio pariatur, modi ut sit dolore fuga necessitatibus vero.</p>
                            <div class="left-align valign-wrapper">
                                <b>&nbsp;&nbsp;&nbsp;Precio: </b>
                                <i class="material-icons">attach_money</i>
                                <span class="precio-producto"></span>
                            </div>
                            <form method="POST" action="" id="formulario-comprar">
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field ">
                                            <b>Cantidad</b>
                                            <select name="cantidad">
                                                <option value="1" selected> 1</option>
                                                <option value="2"> 2</option>
                                                <option value="3"> 3</option>
                                            </select>
                                        </div>
                                        <button class="col s12 center-align waves-effect waves-light btn"type="submit">Comprar</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- fin card-panel -->
                    </div>
                </div>
            </div>  <!-- fin contenedor descripcion -->
        </div>
    <!--</div>-->
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