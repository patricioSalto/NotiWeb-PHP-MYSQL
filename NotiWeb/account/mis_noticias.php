<?php

if(!isset($_SESSION['user'])){
	header("Location: index.php?seccion=ultimasnoticias&pagina=1");
}

$id_usuario = $_SESSION['user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mis Noticias</title>
    <link rel="stylesheet" href="css/noticias.css">
    <script src="account/js/jquery-3.5.1.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    
</head>
<body>                 
        <a <?= isset($_GET["seccion"]) && $_GET["seccion"] == "alta_articulo" ? "class='active'" : '' ?> class="dropdown-item" href="index.php?seccion=alta_articulo" >Nuevo Articulo</a>
                            
                            
                                    
                                                           
        <?php
            $datos = $user->consultarArticulosporId($id_usuario);
      
                foreach($datos as $key){
        ?>                   
                <hr>
                   <div class="contenedor">
                        <div class="left">

                        <h3><?php echo $key['titulo'] ?></h3>
                        <br>

                            <p><?php echo $key['descripcion'] ?></p>
                            
                            <p>Creado:
        <?php
            $datos2 = $user->consultarCUdeArticulo($id_usuario,$key['id_articulo']);
                foreach ($datos2 as $key2){
                    echo $key2['hora'];
                    echo "  |  ";
                    echo $key2['fecha'];
                }
          ?>                  
                            </p>
                        </div>

                        <div class="right">
                             <img src="account/<?php echo $key['ruta_imagen'] ?>" alt="" class="center">
                        </div>
                        
                        <a <?= isset($_GET["seccion"]) && $_GET["seccion"] == "modificar_articulo" ? "class='active'" : '' ?> href="index.php?seccion=modificar_articulo&id=<?php echo $key['id_articulo'] ?>" >Editar</a>

                        <a href="account/eliminarArticulo.php?id=<?php echo $key['id_articulo'] ?>">Eliminar</a>
                        
                   <!--        <a href="account/eliminarArticulo.php?id=" data-toggle="modal" data-target="#confirmar-eliminar" >Eliminar</a> -->

                    </div>
                           
        <?php
            }
        ?> 
                           
    <!-- Modal -->
                <div class="modal fade" id="confirmar-eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="myModalLabel">Eliminar Articulo</h4>
                            </div>

                            <div class="modal-body">
                                ¿Esta seguro que desea eliminar este articulo?
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger btn-ok">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>  
                                                                 
        <script>
			$('#confirmar-eliminar').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	                   
</body>
</html>