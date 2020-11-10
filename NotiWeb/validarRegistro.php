<?php
include_once 'includes/clases.php';
include_once 'includes/session.php';


$user = new User();

if(isset($_SESSION['user'])){
    //echo "hay sesion";
    $user->setUser($user->getCurrentUser());
            header("Location: index.php?seccion=ultimasnoticias&pagina=1"); 


}else if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['email']) && isset($_POST['contrasenia'])){
    
    $nombreForm = $_POST['nombre'];
    $apellidoForm = $_POST['apellido'];
    $emailForm = $_POST['email'];
    $contraseniaForm = $_POST['contrasenia'];

    $user = new User();
    if($user->registrarUsuario($nombreForm, $apellidoForm, $emailForm, $contraseniaForm)){
        
        //echo "Existe el usuario";
        $use->setCurrentUser($emailForm);
        $user->setUser($emailForm);

        header("Location: login.php");

    }else{
        echo "no pudo registrarse";
    
        header("Location: index.php?seccion=ultimasnoticias&pagina=1");

    }
}else{
    //echo "login";
        header("Location: error3.html");

}



?>