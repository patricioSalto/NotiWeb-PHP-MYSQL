<?php
if(!isset($_SESSION['user'])){
	header("Location:../index.php");
}

include_once 'includes/clases.php';
include_once 'includes/session.php';
$user = new User();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nuevo articulo</title>
        <!-- Bootstrap CSS -->
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script src="js/validarcampos.js"></script>
</head>
<body>
 
  <h2>Crear un nuevo articulo</h2>
   
<form action="account/validarAlta.php" method="post" enctype="multipart/form-data" onsubmit="return validar();">
  <div class="form-group">
    <label for="exampleFormControlInput1">Titulo</label>
    <input type="text" class="form-control" id="titulo" placeholder="titulo del articulo" name="titulo" maxlength="255" minlength ="4">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Seleccionar Categoria</label>
    <select class="form-control" id="categoria" name="categoria" required>
     
     <?php
       $categoria = $user->consultarCategorias();
        
        foreach($categoria as $key){
        ?>
      <option value="<?php echo $key['id_categoria']; ?>"><?php echo $key['nombre']; ?></option>
      
      <?php } ?>
      
    </select>
  </div>
  
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Corta descripcion</label>
    <textarea class="form-control" id="descripcion" rows="2" name="descripcion" maxlength="100" minlength ="4" required =""></textarea>
  </div>

  <div class="form-group">
    <label for="exampleFormControlTextarea1">Articulo Completo</label>
    <textarea class="form-control" id="texto_completo" rows="10" name="texto_completo" maxlength="255" minlength ="4" required =""></textarea>
  </div>
  
        <div class="form-group">

            <div class="col-xs-6">
                <label for="first_name">Seleccionar imagen</label>
                <input type="file" name="imagen" id="imagen" value="" class="text-center center-block file-upload" required=""/>
            </div>
        </div>
  
        <div class="form-group">
                <div class="col-xs-12">
                    <br>
                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Agregar</button>
                </div>
        </div>
</form>
   
    
</body>
</html>