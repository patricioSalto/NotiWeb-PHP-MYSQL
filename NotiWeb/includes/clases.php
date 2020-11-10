<?php
include 'db.php';

class User extends DB{
    private $nombre;
    private $username;


    public function userExists($user, $pass){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :user AND contrasenia = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->usename = $currentUser['email'];
        }
    }

    public function getNombre(){
        return $this->nombre;
    }
    
    //traer Datos de los usuarios
    public function traerNombre($user){
        
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            echo $currentUser['nombre'];

        }  
    }
    
    public function setCurrentUser($user){
        
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :user');
        $query->execute(['user' => $user]);
        
            if($query->rowCount()){

            $registro = $query->fetchAll();

            foreach ($registro as $currentUser) {

                $_SESSION['user'] = $currentUser['id_usuario'];
                echo $_SESSION['user'];


            }}else{
                return false;
            }
    }
    //traer datos de los usuarios
    
    public function traerDato($id,$dato){
        
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE id_usuario = :id');
        $query->execute(['id' => $id]);
        
        $dato_traer = $dato;
        
        foreach ($query as $currentUser) {
            echo $currentUser[$dato_traer];

        }  
    }
    public function traerId($email){
        
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :email');
        $query->execute(['email' => $email]);
        
        foreach ($query as $currentUser) {
            echo $currentUser['id_usuario'];

        }
        
    }
    
    
    public function traerDatos($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE email = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            echo $currentUser['nombre'];
            echo $currentUser['email'];
            echo $currentUser['usuario'];
            echo $currentUser['avatar'];
        }
        
    }
    
    public function consultarDatos($email){
        
        $query = $this->connect()->prepare ('SELECT * FROM usuario WHERE email=:email');
        $query->execute(['email' => $email]);
        
       return $registro = $query->fetchAll();
    
    }
    public function consultarDato_sesion($id_usuario){
        
        $query = $this->connect()->prepare ('SELECT * FROM datos_sesion WHERE id_usuario=:id ORDER BY id_DatoSesion DESC');
        $query->execute(['id' => $id_usuario]);
        
       return $registro = $query->fetchAll();
    
    }
    
    
    public function registrarUsuario($nombre,$apellido,$email,$contrasenia){
        $query = $this->connect()->prepare('INSERT INTO usuario (nombre,apellido,email,contrasenia) VALUES (:nombre, :apellido,:email,:contrasenia)');
        
        $query->execute(['nombre' => $nombre, 'apellido' => $apellido,'email' => $email, 'contrasenia' => $contrasenia]);
        
        //creo la carpeta del perfil del usuario
        //$nombreCarpeta = $email;
        
        //mkdir("account/perfiles/usuarios/".$nombreCarpeta);
        if($query){
            
            echo "ok";
            
        }else{
            echo "Ups.. Algo ha salido mal";
        }
        
    }
    
    
    public function registrarAccion($id_usuario,$hora,$fecha,$accion){
        $query = $this->connect()->prepare('INSERT INTO datos_sesion (id_usuario,hora,fecha,accion) VALUES (:id_usuario,:hora,:fecha,:accion)');
        
        $query->execute(['id_usuario' => $id_usuario, 'hora' => $hora, 'fecha' => $fecha, 'accion' => $accion]);
    }
    
    
    public function alta_Articulo($id_usuario,$titulo,$categoria,$texto_completo,$descripcion,$ruta_imagen){
        $query = $this->connect()->prepare('INSERT INTO articulo (id_usuario,titulo,id_categoria,texto_principal,descripcion,ruta_imagen) VALUES (:id_usuario,:titulo,:categoria,:texto_principal,:descripcion,:ruta_imagen)');
        
        $query->execute(['id_usuario' => $id_usuario, 'titulo' => $titulo, 'categoria' => $categoria, 'texto_principal' => $texto_completo,'descripcion' => $descripcion,'ruta_imagen' => $ruta_imagen]);
        
        if($query){
            echo "ok";
        }else{
            echo "Ups.. Algo ha salido mal";
        }
    }
    
    public function consultarArticulos($param_limit1,$param_limit2){
        
        $query = $this->connect()->prepare ("SELECT * FROM articulo ORDER BY id_articulo DESC LIMIT :iniciar , :narticulos");
        
        $query->bindParam (':iniciar',$param_limit1, PDO::PARAM_INT);
        $query->bindParam (':narticulos',$param_limit2, PDO::PARAM_INT);
        
        $query->execute(/*['param1' => $param_limit1, 'param2' => $param_limit2]*/);
        
       return $registro = $query->fetchAll();
    
    }
    
    public function consultarcantidad_Articulos(){
        
        $query = $this->connect()->prepare ('SELECT * FROM articulo');
        $query->execute();
        
        return $query->rowCount();
    
    }
    
    public function consultarcantidad_ArticulosporCategoria($categoria){
        
        $query = $this->connect()->prepare ('SELECT * FROM articulo WHERE id_categoria =:cate');
        $query->execute(['cate' => $categoria]);
        
        return $query->rowCount();
    
    }
    
    public function consultarArticulosporId($id_usuario){
        
        $query = $this->connect()->prepare ('SELECT * FROM articulo WHERE id_usuario=:id ORDER BY id_articulo DESC');
        $query->execute(['id' => $id_usuario]);
        
       return $registro = $query->fetchAll();
    
    }
    
        public function consultarArticulosporIdArticulo($id_usuario,$id_articulo){
        
        $query = $this->connect()->prepare ('SELECT * FROM articulo JOIN categoria ON articulo.id_categoria = categoria.id_categoria WHERE id_usuario=:id AND id_articulo =:id_art');
        $query->execute(['id' => $id_usuario, 'id_art' => $id_articulo]);
        
       return $registro = $query->fetchAll();
    
    }
    
    public function consultarArticulosporCategoria($categoria,$param_limit1,$param_limit2){
        
        $query = $this->connect()->prepare ('SELECT * FROM articulo WHERE id_categoria=:categoria ORDER BY id_articulo DESC LIMIT :iniciar , :narticulos');
        
        $query->bindParam (':iniciar',$param_limit1, PDO::PARAM_INT);
        $query->bindParam (':narticulos',$param_limit2, PDO::PARAM_INT);
        $query->bindParam (':categoria',$categoria, PDO::PARAM_INT);
        
        $query->execute();
        
       return $registro = $query->fetchAll();
    
    }
    public function consultarCUdeArticulo($id_usuario,$id_articulo){
        
        $query = $this->connect()->prepare ('SELECT * FROM cu_articulo WHERE id_usuario=:id AND id_articulo =:id_art');
        $query->execute(['id' => $id_usuario, 'id_art' => $id_articulo]);
        
       return $registro = $query->fetchAll();
    }
    
    
    
    public function modificarArticulo($id_usuario,$id_articulo,$titulo,$categoria,$texto_completo,$descripcion){
        
        $query = $this->connect()->prepare('UPDATE articulo SET titulo =:titulo, id_categoria =:categoria, texto_principal =:texto_completo, descripcion =:descripcion WHERE id_articulo=:id_art AND id_usuario =:id');
        
        $query->execute(['titulo' => $titulo, 'categoria' => $categoria, 'texto_completo' => $texto_completo, 'descripcion' => $descripcion, 'id' => $id_usuario, 'id_art' => $id_articulo]);
        
        if($query){
            echo "ok";
        }else{
            echo "Ups.. Algo ha salido mal";
        }
    
    }
    
    public function eliminarArticulo($id_usuario,$id_articulo){
        
        //primero elimino los datos de creacion y modificacion del articulo y luego paso a eliminar el articulo
        
        $query = $this->connect()->prepare ('DELETE FROM cu_articulo WHERE id_usuario =:id_usu AND id_articulo =:id_art');
        $query->execute(['id_usu' => $id_usuario, 'id_art' => $id_articulo]);
        
        $query2 = $this->connect()->prepare ('DELETE FROM articulo WHERE id_usuario =:id_usu AND id_articulo =:id_art');
        $query2->execute(['id_usu' => $id_usuario, 'id_art' => $id_articulo]);
        
        if($query2){  
            return true;
        }else{
            return false;
        }
        
    }
    
    
    public function registrarAccion_articulo($id_articulo,$id_usuario,$hora,$fecha,$accion){
        $query = $this->connect()->prepare('INSERT INTO cu_articulo (id_articulo,id_usuario,hora,fecha,accion) VALUES (:id_articulo,:id_usuario,:hora,:fecha,:accion)');
        
        $query->execute(['id_articulo' => $id_articulo,'id_usuario' => $id_usuario, 'hora' => $hora, 'fecha' => $fecha, 'accion' => $accion]);
        
        if($query){
            echo "ok";
        }else{
            echo "Ups.. Algo ha salido mal";
        }
    }
    
    
    public function consultarUltimoArticulo($id_usuario){
        
        $query = $this->connect()->prepare ('SELECT id_articulo FROM articulo WHERE id_usuario=:id ORDER BY id_articulo DESC LIMIT 1');
        $query->execute(['id' => $id_usuario]);
        
       return $registro = $query->fetchAll();
    
    }
    
    public function consultarCategorias(){
        
        $query = $this->connect()->prepare ('SELECT * FROM categoria');
        $query->execute();
        
       return $registro = $query->fetchAll();
    
    }
    
    //------------------------------------------------------------
}

?>