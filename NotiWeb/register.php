<?php
session_start();
if(isset($_SESSION['user'])){
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesion</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="css/login.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/validarcampos.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    
</head>
<body>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registro de nuevo usuario</div>
                    <div class="card-body">
                        <form action="validarRegistro.php" method="POST" onsubmit="return validarRegistro();">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Nombres</label>
                                <div class="col-md-6">
                                    <input type="text" id="nombre" class="form-control" name="nombre">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Apellidos</label>
                                <div class="col-md-6">
                                    <input type="text" id="apellido" class="form-control" name="apellido">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">Correo Electronico</label>
                                <div class="col-md-6">
                                    <input type="text" id="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                <div class="col-md-6">
                                    <input type="password" id="contrasenia" class="form-control" name="contrasenia">
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Entrar!
                                </button>
                                <br>
                                <a href="login.php" class="btn btn-link">
                                    Ya tienes una cuenta? Inicia sesion desde Aqui!
                                </a>
                            </div>
                    </div>
                    </form>
                                <a href="index.php" class="btn btn-link">
                                    Volver atras
                                </a>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
</body>
</html>