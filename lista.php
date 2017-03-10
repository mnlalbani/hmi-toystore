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
            <nav class="blue">
                <div class="nav-wrapper">
                    <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul class="right">
                        <li><a href="#"><i class="material-icons left">search</i></a></li>
                        <li><a href="login.php"><i class="material-icons left">account_circle</i></a></li>
                        <li><a href="carro.php"><i class="material-icons left">shopping_cart</i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="grey lighten-5">
        <div class="row">
            <div class="col s3 m0 l3"> <!-- Side nav -->
                <ul id="slide-out" class="side-nav fixed">
                    <li>
                        <nav>
                            <div class="nav-wrapper">
                                <a href="index.php" class="brand-logo">Logo</a>
                            </div>
                        </nav>
                    </li>
                    <li><a href="#!">Filtro</a></li>
                    <li><a href="#!">Filtro</a></li>
                    <hr>
                    <li><a href="#!">Filtro</a></li>
                    <li><a href="#!">Filtro</a></li>
                    <hr>
                    <li><a href="#!">Filtro</a></li>
                </ul>
            </div>
            <div class="col s12 m12 l9"> <!-- contenido principal -->
                <div class="">
                    <div class="section"></div>
                    <div class="row"> <!-- primera fila -->
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m4 l3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <a href="producto.php"><img src="http://lorempixel.com/800/400/food/1" class="img-responsive"></a>
                                    <a href="carro.php" class="hoverable btn-floating halfway-fab waves-effect waves-light red tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar al carrito"><i class="material-icons">add</i></a>
                                </div>
                                <div class="card-content">
                                    <a class="card-title" href="producto.php">Producto</a>
                                    <p class="truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum id, in earum rerum facere porro explicabo voluptas nisi fugiat ab impedit nulla quas dolorem. Quaerat error laborum ipsa aliquid tenetur?.</p>
                                </div>
                            </div>
                        </div>
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
    <footer class="page-footer blue"> <!-- Footer -->
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