<?php
    session_start();
    if(!isset($_SESSION['usuarioid'])){
        header("location: index.php");
    }
    include("php/ver-orden.php");
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
    
    <title>Verificar Orden</title>
</head>
<body>
    <header>
        <div class="navbar-fixed"> <!-- Barra de Navegación -->
            <nav class="yellow darken-2">
                <div class="nav-wrapper">
                    <a href="index.php" class="brand-logo left">
                        <img src="images/logo/logo.png" class="logo-img" alt="">
                    </a>
                    <ul class="right">
                        <li><form method="GET" action="lista.php">
                                   <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input type="text" id="autocomplete"  name="busqueda" class="autocomplete">
          <label for="autocomplete">Búsqueda</label>
        </div>
      </div>
    </div>
  </div>
                            </form>
                        </li>
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li class='active'><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>".$_SESSION['nom_usu']."</span></a></li>";
                            echo "<li><a href='carro.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Carro''>shopping_cart</i>Carro</a></li>";
                            echo "<li><a href='index.php?logout=true'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Salir'>exit_to_app</i><span class='hide-on-med-and-down'>Salir</span></a></li>";
                            }else{
                            echo "<li><a href='login.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Ingresa'>account_circle</i><span class='hide-on-med-and-down'>Ingresa</span></a></li>";
                            echo "<li class='active'><a href='carro.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Carro''>shopping_cart</i>Carro</a></li>";                                    
                            }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main class="grey lighten-5">
        <div class="section"></div>
        <div class="row"> <!-- flujo de actividad -->
            <div class="col s12 m6 offset-m3 l6 offset-l4">
                <ul class="tabs grey lighten-5">
                    <div class="row">
                        <li class="tab col s3 disabled" ><a href="#test1">Pagos</a></li>
                        <li class="tab col s3 disabled" ><a href="#test2">Direcciónes</a></li>
                        <li class="tab col s3 disabled " ><a class="active" href="#test4">Ver Orden</a></li>
                    </div>
                </ul>  
            </div>
        </div><!-- fin flujo de actividad -->
        <div class="row">
            <div class="col s12 m12 l7">
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel"> <!-- panel de metodo de pago y direccion -->
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <h5 class="flow-text">Revisa tu compra</h5>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <h6>Dirección</h6>
                                            <blockquote cite="">
                                               <span class="flow-text">
                                                    <?php
                                                       echo $_GET['direccionEnvio'];
                                                     ?>
                                                </span>
                                               <br>
                                            </blockquote>
                                        </td>
                                        <td>
                                            <h6>Número de Tarjeta</h6>
                                            <blockquote cite="">
                                                <span class="flow-text">···
                                                    <?php
                                                        echo $_GET['metodoPago'];
                                                     ?>
                                                </span>
                                               <br>
                                            </blockquote>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- fin panel metodo de pago y direccion -->
                    </div>
                    <div class="col s12">
                        <div class="card-panel"> <!-- panel articulos -->
                            <table class="table-responsive">
                                <thead>
                                    <tr>
                                        <h5 class="flow-text">Artículos</h5>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                           <?php
                                            include("php/productos-ver-orden.php");
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- fin panel metodo de pago y direccion -->
                    </div>
                </div>
            </div> <!-- lista de artiuclos -->
            <div class="col s12 m12 l5"><!-- lista de articulos y compra -->
                <div class="card">
                    <div class="card-content">
                        <table class="table-responsive">
                            <thead>
                                <tr>
                                    <h5 class="flow-text">Resumen de la orden</h5>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Producto (s)</td>
                                    <td><span>$<?php echo $sum = ($preciototal);?></span></td>
                                </tr>
                                <tr>
                                    <td>Envío y manejo</td>
                                    <td><span>$10</span></td>
                                </tr>
                                <tr>
                                    <td>Total antes de impuestos</td>
                                    <td><span>$<?php echo $sum+10;?></span></td>
                                </tr>
                                <tr>
                                    <td>Impuesto estimado</td>
                                    <td><span>10.00%</span></td>
                                </tr>
                                <tr>
                                    <td>Total a pagar</td>
                                    <td><span>$<?php echo $_GET['preciototal']; ?></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-action">
                        <form action="" id="formulario-checkout" method="POST">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <input type="text" hidden name="vaciar" value="true">
                                    <a class="col s12 m12 l12 waves-effect waves-light btn" href="orden-perfil.php">Volver a las Ordenes</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>  <!-- fin contenedor lista compra -->
        </div>
    </main>
    <footer class="page-footer yellow darken-2"> <!-- Footer -->
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
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>