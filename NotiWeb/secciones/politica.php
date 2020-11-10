
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="css/noticias.css">
    </head>
    <body>
                <h3 class="slogan">Politica</h3>
    <?php
    
        $total_articulos = $user->consultarcantidad_ArticulosporCategoria("2");
        
        //cuantos articulos por pagina
        $articulos_x_pagina = 3;
        
        //divido el total de articulos en la db por la cantidad que se va a mostrar por pagina y asi saberr cuantas paginas necesito para mostrar los articulos
        
        $paginas = $total_articulos/$articulos_x_pagina;
        
        //redondeo hacia arriba
        
        $paginas = ceil($paginas);
        
        //explicacion
        
        //calculo los valores del limit.
        //si la sesion es 1.. entonces 1 - 1 es cero
        //0 * articulos_x_pagina va a ser 0 entonces arranca desde 0 con un limit de 3

        //si la sesion es 2.. entonces 2 - 1 es uno
        //1 * articulos_x_pagina va a ser 3 entonces arranca desde 3 con un limite de 3 y asi dinamicamente
        
        $iniciar = ($_GET['pagina'] - 1)* $articulos_x_pagina;    
        
        $param_limit1 = $iniciar;
        $categoria = 1;
        
        $datos = $user->consultarArticulosporCategoria($categoria,$param_limit1,$articulos_x_pagina);
      
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
        
        <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item
                <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                <a class="page-link" href="index.php?seccion=ultimasnoticias&pagina=<?php echo $_GET['pagina']-1; ?>">

                Anterior</a>

                </li>

                <?php 
                  for($i = 0; $i < $paginas; $i++):
                  ?>

                <li class="page-item
                <?php echo $_GET['pagina'] == $i+1 ? 'active' : ' ' ?>">

                    <a class="page-link" href="index.php?seccion=ultimasnoticias&pagina=<?php echo $i+1; ?>"> <?php echo $i+1; ?> </a>

                </li>

                <?php endfor; ?>

                <li class="page-item
                <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">

                    <a class="page-link" href="index.php?seccion=ultimasnoticias&pagina=<?php echo $_GET['pagina']+1; ?>">Siguiente</a>

                </li>
              </ul>
        </nav>
</body>
</html>
