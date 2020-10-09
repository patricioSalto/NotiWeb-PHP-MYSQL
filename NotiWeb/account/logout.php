<?php
session_start();

if(!isset($_SESSION['user'])){
    
	header("Location:../index.php");
}
    include_once '../includes/clases.php';
    include_once '../includes/session.php';

    ini_set('date.timezone','America/Argentina/Buenos_Aires');

    $user = new User();
    //registrar la hora y fecha de inicio de sesion

        $id_usuario = $_SESSION['user'];
        $hora = date("g:i A");
        $fecha = date("d-m-Y");
        $accion ="Cierre";
    
        $user->registrarAccion($id_usuario,$hora,$fecha,$accion);

    // cerrar sesion
        $userSession = new UserSession();

        $userSession->closeSession();

    header("Location:../index.php");
    
?>





