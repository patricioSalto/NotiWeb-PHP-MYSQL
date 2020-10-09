
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/noticias.css">
    </head>
    <body>
                <h3 class="slogan">Deportes</h3>
    <?php

        $datos = $user->consultarArticulosporCategoria("2");
      
                foreach($datos as $key){
        ?>                   
                <hr>
                <a href="" data-toggle="modal" data-target="#mimodal<?php echo $key['id_articulo']?>">
                   <div class="contenedor">

                        <div class="left">

                            <h3><?php echo $key['titulo'] ?></h3>
                            <br>
                            <p><?php echo $key['descripcion'] ?></p>

                        </div>

                        <div class="right">
                             <img src="account/<?php echo $key['ruta_imagen'] ?>" alt="" class="center">
                        </div>
                    </div>  
                </a>                        
                                                                          
        <!-- Ventana modal para abrir imagenes-->

    <div class="modal fade" id="mimodal<?php echo $key['id_articulo']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        
            <div class="contenedor3">
                <!--<a href="#" class="close">X</a> -->
                <h1 class="titulo"><?php echo $key['titulo'] ?></h1>
                <img src="account/<?php echo $key['ruta_imagen'] ?>" alt="">
                <p><?php echo $key['texto_principal'] ?></p> 
            </div>   

    </div>                             
        <?php
            }
        ?> 
       </body>
       </html>
