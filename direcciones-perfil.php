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
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	
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
                                            <div id="editar-direccion-modal" class="modal">
                                                <div class="modal-content">
                                                <h5 class="flow-text">Edita La Direccion</h5>
                                                    <div class="row">
                                                    <form class="col s12" method="POST" action="php/editar-direccion.php">
                                                    <input type="text" name="direccion" hidden value="true">
                                                    <input type="text" name="id" hidden class="id-direccion">
                                                    <div class="row"> 
                                                        <div class="input-field col s12">
                                                        <textarea id="direccionEnvio" class="materialize-textarea direccionEditar" name="direccionEnvio"></textarea>
                                                        </div>
                                                    </div>
                                                    <button class="btn waves-effect waves-light col s2" type="submit">Editar</button>
                                                    </form>
                                                </div>
                                                </div>
                                            </div>
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
          <input type="text" id="autocomplete" name="busqueda"  class="autocomplete">
          <label for="autocomplete">Búsqueda</label>
        </div>
      </div>
    </div>
  </div>
                            </form>
                        </li>
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li  class='active'><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>".$_SESSION['nom_usu']."</span></a></li>";
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
        <div class="section">
            
        </div>
        <div class="row"> <!-- flujo de actividad -->
            <div class="col s12 m6 offset-m3 l6 offset-l4">
                <ul class="tabs grey lighten-5">
                    <div class="row">
                        <li class="tab col s3 disabled" ><a href="#test1">Pagos</a></li>
                        <li class="tab col s3 disabled" ><a  class="active"  href="#test2">Direcciones</a></li>
                        <li class="tab col s3 disabled " ><a  href="#test4">Ver Orden</a></li>
                    </div>
                </ul>  
            </div>
        </div><!-- fin flujo de actividad -->
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
                        <div class="card-panel">
                           <table class="table-responsive bordered highlight">
                               <thead>
                                   <tr>
                                       <h5 class="flow-text">Tus Direcciones de Envío</h5>
                                   </tr>
                                </tr>  
                               </thead>
                               <tbody>
                                   
                                       <?php
                                            include("php/lista-direcciones.php");
                                        ?>
                               </tbody>
                            </table>
                           <br>
                            <ul class="collapsible hoverable" data-collapsible="accordion">
                                <li>
                                    <div class="collapsible-header"><i class="material-icons">add</i>Agrega Otra Dirección</div>
                                    <div class="collapsible-body">
                                        <div class="row">
                                            <?php if(isset($_GET['redirect'])){
                                               echo "<form class='col s12' method='POST' action='php/agrega-direccion.php?carrito=true' id='formulario-agregar-direccion'>";
                                            }else{
                                                echo "<form class='col s12' method='POST' action='php/agrega-direccion.php' id='formulario-agregar-direccion'>";
                                            }
                                            ?>
                                            <div class="row">
                                                <div class="row">
                                                    <form class="col s12">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                        <textarea id="textarea1" class="materialize-textarea" name="direccionEnvio"></textarea>
                                                        <label for="textarea1">Textarea</label>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                                <button class="btn waves-effect waves-light col s2" type="submit">Agregar
                                                    <i class="material-icons right">add</i>
                                                </button>
                                            </div>
                                             
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div> <!-- fin card-panel -->
                    </div>
                </div>
            </div> <!-- lista de opciones -->   
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
            © 2017 José Natera - Christian Ramos - Rosangela Cortesía - Jesús Cordova
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