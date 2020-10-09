
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/noticias.css">
    </head>
    <body>
                <h3 class="slogan">Salud</h3>
    <?php

        $datos = $user->consultarArticulosporCategoria("5");
      
                foreach($datos as $key){
        ?>                   
                <hr>
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
                           
        <?php
            }
        ?> 
       </body>
       </html>
