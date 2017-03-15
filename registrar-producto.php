<?php
    session_start();
    setcookie("producto");
    //include("php/mostrar-producto.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
    <script src="js/materialize.min.js"></script>
    <link rel="stylesheet" href="css/materialize.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    
    <title>Publicar Producto</title>
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
                        <li><form method="GET" action="lista.php">
                                   <div class="row">
    <div class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">search</i>
          <input type="text" id="autocomplete" class="autocomplete">
          <label for="autocomplete">Búsqueda</label>
        </div>
      </div>
    </div>
  </div>
                            </form>
                        </li>
                        <?php
                            if(isset($_SESSION['correo'])){
                            echo "<li><a href='perfil.php'><i class='material-icons left tooltipped' data-position='bottom' data-delay='50' data-tooltip='Perfil'>account_circle</i><span class='hide-on-med-and-down'>".$_SESSION['nom_usu']."</span></a></li>";
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
    <div class="section"></div>
    <main>
        
        <form method="POST" enctype="multipart/form-data" action="php/registrar-producto.php" id="">
        
        <!--<div class="container">-->
        <div class="row">
            <div class="col s12 m12 l7"> <!-- contenedor SLider e imagenes-->
                <div class="section"></div>
                <div class="row"> <!-- contenedor imagenes secundarias -->
                    <h5 class="flow-text">&nbsp;&nbsp;Imágenes</h5>
                    <div class="col s3 m3 l3">  
                            <img src="" alt="" class="responsive-img z-depth-2 materialboxed">
                            <div class="file-field input-field">
                            <div class="btn">
                                <span>Cambiar Imagen</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="img " type="file" name="img1" value="" required>
                            </div>
                            </div>
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="" alt="" class="responsive-img z-depth-2 materialboxed">
                            <div class="file-field input-field">
                            <div class="btn">
                                <span>Cambiar Imagen</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="img  " type="file" name="img2" value="" required>
                            </div>
                            </div>
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="" alt="" class="responsive-img z-depth-2 materialboxed">
                            <div class="file-field input-field">
                            <div class="btn">
                                <span>Cambiar Imagen</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="img " type="file" name="img3"  required>
                            </div>
                            </div>
                    </div>
                    <div class="col s3 m3 l3">
                            <img src="" alt="" class="responsive-img z-depth-2 materialboxed">
                            <div class="file-field input-field">
                            <div class="btn">
                                <span>Cambiar Imagen</span>
                                <input type="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="img  " type="file" name="img4"  required>
                            </div>
                            </div>
                    </div>
                </div>
            </div> <!-- fin contenedor slider -->

            <div class="col s12 m12 l5"><!-- contenedor descripcion del producto y compra -->
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <div class="input-field">
                                <input  id="nombre" type="text" name="nombre" class="validate" required>
                                <label for="nombre">Nombre Del Producto</label>
                            </div>
                            <div class="input-field">
                                <textarea name="descripcion" id="descripcion" class="materialize-textarea" required></textarea>
                            <label for="descripcion">Textarea</label>
                            </div>
                            <div class="input-field">
                                <input  id="precio" type="text" name="precio" class="validate" required>
                                <label for="precio">Precio</label>
                            </div>
                            <div class="input-field">
                                <input  id="cantidad" type="text" name="cantidad" class="validate" required>
                                <label for="cantidad">cantidad</label>
                            </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field ">
                                            <b>Categoría</b>
                                            <select name="categoria">
                                                <option value="nino">Niños</option>
                                                <option value="nina">Niñas</option>
                                                <option value="bebe">Bebe</option>
                                                <option value="exterior">Exterior</option>
                                                <option value="videojuego">Videojuegos</option>
                                                <option value="mesa">Juegos de Mesa</option>
                                            </select>
                                        </div>
                                        <div class="input-field ">
                                            <b>Marca</b>
                                            <select name="marca">
                                                <option value="fisher-price">Fisher Price</option>
                                                <option value="disney">Niñas</option>
                                                <option value="lego">Lego</option>
                                                <option value="nintendo">Nintendo</option>
                                                <option value="marvel">Marvel</option>
                                                <option value="star-wars">Star Wars</option>
                                            </select>
                                        </div>
                                        <button class="col s12 center-align waves-effect waves-light btn"type="submit">Publicar</button>
                                    </div>
                                </div>
                        </div> <!-- fin card-panel -->
                    </div>
                </div>
            </div>  <!-- fin contenedor descripcion -->
        </div>
    <!--</div>-->
    </form>
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