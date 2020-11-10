<?php
include_once 'includes/clases.php';
include_once 'includes/session.php';

ini_set('date.timezone','America/Argentina/Buenos_Aires');


$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
            header("Location: index.php");

}

if(isset($_POST['email']) && isset($_POST['contrasenia'])){
    
    $usuarioForm = str_replace("'","\'",$_POST['email']);
    $contraseniaForm = str_replace("'","\'",$_POST['contrasenia']);

    $user = new User();
    if($user->userExists($usuarioForm, $contraseniaForm)){
        //echo "Existe el usuario";
        
        $user->setCurrentUser($usuarioForm);
        $user-> setUser($usuarioForm);
        
        
     //registrar la hora y fecha de inicio de sesion

        $datos = $user->ConsultarDatos($usuarioForm);
      
        foreach($datos as $key){
 
        $id_usuario = $key['id_usuario'];

        }

        $hora = date("g:i A");;
        $fecha = date("d-m-Y");
        $accion ="Inicio";
        
        $user->registrarAccion($id_usuario,$hora,$fecha,$accion);

        header("Location:index.php?seccion=ultimasnoticias&pagina=1");

    }else{
        echo "No existe el usuario";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        
        echo $errorLogin;
        header("Location: login.php");

    }
}else{
    //echo "login";
        header("Location: login.php");

}



?>