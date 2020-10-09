<?php

class UserSession{

    public function __construct(){
        session_start();
    }
    
    public function abrirSesion(){
        
        session_start();
        
    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }

    public function getCurrentUser(){
        
        $nombre_usuario = $_SESSION['user'];
        echo $nombre_usuario;
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>