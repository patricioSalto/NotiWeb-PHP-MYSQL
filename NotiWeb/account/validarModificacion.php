<?php
session_start();

if(!isset($_SESSION['user'])){
	header("Location: ../index.php?seccion=ultimasnoticias&pagina=1");
}

ini_set('date.timezone','America/Argentina/Buenos_Aires');

include "../includes/clases.php";
include "../includes/session.php";

$user = new User();


 if(isset($_POST['titulo']) && isset($_POST['categoria']) && isset($_POST['descripcion']) && isset($_POST['texto_completo']) /*&& isset($_FILES['imagen']["tmp_name"])*/){

  //  $nombre_foto = $_FILES["imagen"]["name"];
    
   
     /*
    $permitidos = array("image/jpg", "image/jpeg","image/png");
    $limite_kb = 100;
     
     

    if(in_array($_FILES['imagen']['type'], $permitidos)){
        
        $directorio = "imagenes/".$_SESSION['user'];
    
        if (!file_exists($directorio)){

				mkdir($directorio, 0755);
			
			}
        
        $ruta= "imagenes/".$id_usuario."/".$nombre_foto;
                move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
        
        $ruta_foto = $ruta;
        
    }
    */
    //utilizo el metodo str_replace para evitar la inyeccion sql
     
    $id_usuario = $_SESSION['user'];
    $id_articulo = $_GET['id'];
    $titulo = str_replace("'","\'",$_POST['titulo']);
    $categoria = str_replace("'","\'",$_POST['categoria']);
    $descripcion = str_replace("'","\'",$_POST['descripcion']);
    $texto_completo = str_replace("'","\'",$_POST['texto_completo']);
    
    //modificacion del articulo
    $user->modificarArticulo($id_usuario,$id_articulo,$titulo,$categoria,$texto_completo,$descripcion);
     
    // registrar la hora y fecha de la modificacion 
    $hora = date("g:i A");;
    $fecha = date("d-m-Y");
    $accion ="Modificado";
     
     $user->registrarAccion_articulo($id_articulo,$id_usuario,$hora,$fecha,$accion);

        header("Location:../index.php?seccion=mis_noticias");

}else{

        echo "cargue todos los datos solicitados por favor";
}

?>