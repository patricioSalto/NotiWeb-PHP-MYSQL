<?php
session_start();

if(!isset($_SESSION['user'])){
	header("Location: ../index.php");
}

include "../includes/clases.php";
include "../includes/session.php";

$user = new User();

$id_usuario = $_SESSION['user'];
$id_articulo = $_GET['id'];

    if($user->eliminarArticulo($id_usuario,$id_articulo)){
        
        echo "sdfsfsf";
        header("Location:../index.php?seccion=mis_noticias");

}else{

        echo "No se puedo eliminar el articulo.";
}
?>