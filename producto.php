<?php
    session_start();
    setcookie("producto");
    include("php/mostrar-producto.php");
?>
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
            <nav class="light-blue lighten-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left">Logo</a>
                    <ul class="right">
                        <li><a href="#"><i class="material-icons left">search</i><span class="hide-on-med-and-down">Búsqueda</span></a></li>
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
    <div class="section"></div>
    <main>
        <!--<div class="container">-->
        <div class="row">
            <div class="col s12 m12 l7"> <!-- contenedor SLider e imagenes-->
                <div class="carousel carousel-slider z-depth-1" data-indicators="true">
                    <div class="carousel-item">
                        <a href="#one!"><img src="<?php echo $_COOKIE['img1'];?>" class="img-responsive"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#two!"><img src="<?php echo $_COOKIE['img2'];?>" class="img-responsive"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#three!"><img src="<?php echo $_COOKIE['img3'];?>" class="img-responsive"></a>
                    </div>
                    <div class="carousel-item">
                        <a  href="#four!"><img src="<?php echo $_COOKIE['img4'];?>" class="img-responsive"></a>
                    </div>
                </div>
                <div class="section"></div>
                <div class="row hide-on-med-and-down"> <!-- contenedor imagenes secundarias -->
                    <div class="col s3 m3 l3">
                            <img src="<?php echo $_COOKIE['img1']?>" alt="" class="responsive-img z-depth-2">
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="<?php echo $_COOKIE['img2'];?>" alt="" class="responsive-img z-depth-2">
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="<?php echo $_COOKIE['img3'];?>" alt="" class="responsive-img z-depth-2">
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="<?php echo $_COOKIE['img4'];?>" alt="" class="responsive-img z-depth-2">
                    </div>
                </div>
            </div> <!-- fin contenedor slider -->

            <div class="col s12 m12 l5"><!-- contenedor descripcion del producto y compra -->
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <b><?php echo $_COOKIE['nombre'];?></b>
                            <p class="descripcion-producto flow-text"><?php echo $_COOKIE['descripcion'];?></p>
                            <div class="left-align valign-wrapper">
                                <b>&nbsp;&nbsp;&nbsp;Precio: </b>
                                <i class="material-icons">attach_money</i>
                                <span class="precio-producto"><?php echo $_COOKIE['precio'];?></span>
                            </div>
                            <form method="POST" action=<?php echo "carro.php?new-producto-id=".$_COOKIE['id'].""; ?> id="formulario-comprar-producto">
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