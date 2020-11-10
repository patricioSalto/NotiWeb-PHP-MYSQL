<?php
session_start();

        include "includes/clases.php";
        include "includes/session.php";

        ini_set('date.timezone','America/Argentina/Buenos_Aires');
        $user = new User();

if(!$_GET){
    header("location:index.php?pagina=1");
}
    
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>NotiWeb</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">

        <!-- Styles -->

        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        
    <nav class="navbar navbar-expand-lg navbar-light bg-light">

    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
         
          
          <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "ultimasnoticias" ? "class='active'" : '' ?> class="nav-item">
            <a class="nav-link" href="index.php?seccion=ultimasnoticias&pagina=1">Ultimas noticias</a>
          </li>
          
          <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "politica" ? "class='active'" : '' ?> class="nav-item">
            <a class="nav-link" href="index.php?seccion=politica&pagina=1">Politica</a>
          </li>
          
          <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "sociedad" ? "class='active'" : '' ?> class="nav-item">
            <a class="nav-link" href="index.php?seccion=sociedad&pagina=1">Sociedad</a>
          </li>
          
          <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "deportes" ? "class='active'" : '' ?> class="nav-item">
            <a class="nav-link" href="index.php?seccion=deportes&pagina=1">Deportes</a>
          </li>
          
            <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "educacion" ? "class='active'" : '' ?> class="nav-item">
            <a class="nav-link" href="index.php?seccion=educacion&pagina=1">Educacion</a>
              </li>
          
            <li <?= isset($_GET["seccion"]) && $_GET["seccion"] == "salud" ? "class='active'" : '' ?> class="nav-item">
            <a class="nav-link" href="index.php?seccion=salud&pagina=1">Salud</a>
            </li>
          
   
          
        </ul>
        
        <ul class="navbar-nav m-auto">
        
        <?php
    
       if(!isset($_SESSION['user'])){  ?>
                
          <li class="nav-item">
            <a class="nav-link" href="login.php">Iniciar sesión</a>
          </li>
        
        <?php
            
            
        }else{  ?>
        
          
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
             <?php        
                $id_alumno = $_SESSION['user'];
                $user->traerDato($id_alumno,'nombre');
              ?>
            
               </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a <?= isset($_GET["seccion"]) && $_GET["seccion"] == "mis_noticias" ? "class='active'" : '' ?> class="dropdown-item" href="index.php?seccion=mis_noticias" >Mis Noticias</a>
                      
                      <a <?= isset($_GET["seccion"]) && $_GET["seccion"] == "datosSesion" ? "class='active'" : '' ?> class="dropdown-item" href="index.php?seccion=datosSesion" >Datos de sesion</a>
                      
                      <a <?= isset($_GET["seccion"]) && $_GET["seccion"] == "configuracion" ? "class='active'" : '' ?> class="dropdown-item" href="index.php?seccion=configuracion" >Configuracion</a>
                      

                  <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="account/logout.php">Cerrar Sesion</a>
                </div>
          </li>
        
        <?php                
        }
        ?>       
        
        </ul>
        
      </div>
    </nav>
    
        <div class="content">
                <div class="title m-b-md">
                    Noti Web
                </div>

                <h3 class="subtitulo">Toda la info del pais y del mundo en un solo lugar</h3>
                
                <?php
                echo date("d") . " del " . date("m") . " de " . date("Y");
                ?>
                <hr>
        </div>

    <div class="container">
       
       
        <!-- secciones -->    
            <?php

               if(!empty($_GET["seccion"])){
                $seccion = $_GET["seccion"];

                if($seccion == "ultimasnoticias"):
                   
                    require ("secciones/ultimas.php");
                elseif($seccion == "politica"):

                    require ("secciones/politica.php");
                   
                elseif($seccion == "sociedad"):
                   require ("secciones/sociedad.php");
                   
                   elseif($seccion == "deportes"):
                   require ("secciones/deportes.php");
                   
                elseif($seccion == "educacion"):
                   require ("secciones/educacion.php");
                   
                elseif($seccion == "salud"):
                   require ("secciones/salud.php");
                   
                elseif($seccion == "mis_noticias"):
                   require ("account/mis_noticias.php");
                   
                elseif($seccion == "datosSesion"):
                   require ("account/datosSesion.php");
                   
                elseif($seccion == "configuracion"):
                   require ("account/configuracion.php");
                   
                elseif($seccion == "alta_articulo"):
                   require ("account/alta_articulo.php");
                   
                elseif($seccion == "modificar_articulo"):
                   require ("account/modificarArticulo.php");
                   
                else:
                    require ("secciones/error.php");
                endif;
                   
                   }else{
                   
                    require ("secciones/ultimas.php");
           
                }
            ?> 
    
    </div>
    
    <!-- Footer -->
	
	<footer class="footer text-center ">
        <p>Creado por <a href="https://www.instagram.com/patricio.salto/" target="_blank">Patricio Salto</a></p>
    </footer>


            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>