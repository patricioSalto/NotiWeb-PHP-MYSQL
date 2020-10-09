<?php

if(!isset($_SESSION['user'])){
	header("Location: ../index.php");
}

$user = new User();

$id_usuario = $_SESSION['user'];
$id_articulo = $_GET['id'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
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
</head>
<body>
   
    <?php
        $datos = $user->consultarArticulosporIdArticulo($id_usuario,$id_articulo);
      
                foreach($datos as $key){
        ?>
    <a href="index.php?seccion=mis_noticias">Volver Atras</a>
    <h2>Modificar Articulo</h2>  
   
    <form action="account/validarModificacion.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
     
      <div class="form-group">
        <label for="exampleFormControlInput1">Titulo</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="titulo del articulo" name="titulo" value="<?php echo $key['titulo'] ?>">
      </div>
      
          <div class="form-group">
            <label for="exampleFormControlSelect1">Seleccionar Categoria</label>
                <select class="form-control" id="exampleFormControlSelect1" name="categoria">

                                <option value="1" <?php if($key['id_categoria']=='1') echo 'selected'; ?>>Politica</option>
                                
                                <option value="2" <?php if($key['id_categoria']=='2') echo 'selected'; ?>>Deporte</option>
                                
                                <option value="3" <?php if($key['id_categoria']=='3') echo 'selected'; ?>>Sociedad</option>
                                
                                <option value="4" <?php if($key['id_categoria']=='4') echo 'selected'; ?>>Educacion</option>
                                
                                <option value="5" <?php if($key['id_categoria']=='5') echo 'selected'; ?>>Salud</option>
                </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Corta descripcion</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="descripcion"><?php echo $key['descripcion'] ?></textarea>
        <div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Articulo Completo</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" name="texto_completo"><?php echo $key['texto_principal'] ?></textarea>
        </div>

        <div class="form-group">
                <div class="col-xs-12">
                    <br>
                    <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i>Modificar</button>
                </div>
        </div>
    </form>

        <?php
                    
            }
        ?> 
</body>
</html>