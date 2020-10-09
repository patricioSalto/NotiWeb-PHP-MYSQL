function validar() {
    var titulo,categoria,descripcion,texto_completo,imagen,expresion;
    
    titulo = document.getElementById("titulo").value;
    categoria = document.getElementById("categoria").value;
    descripcion = document.getElementById("descripcion").value;
    texto_completo = document.getElementById("texto_completo").value;
    imagen = document.getElementById("imagen").value;

    if(titulo === "" || categoria === "" || descripcion === "" || texto_completo === "" || imagen === ""){
        alert("Todos los campos son obligatorios");
        return false;
        
    }else if (titulo.length > 100){
        alert("El titulo es muy largo (100 caracteres maximo)");
        return false;
        
    }
    else if (descripcion.length > 255){
        alert("La descripcion es muy larga (255 caracteres maximo)");
        return false;
        
    }

}

function validarRegistro() {
    var nombre,apellido,email,contrasenia,expresion;
    
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    email = document.getElementById("email").value;
    contrasenia = document.getElementById("contrasenia").value;
    expresion = /\w+@\w+\.+[a-z]/;
    
    if(nombre === "" || apellido === "" || email === "" || contrasenia === ""){
        alert("Todos los campos son obligatorios");
        return false;
        
    }else if (nombre.length > 100 || apellido.length > 100){
        alert("El nombre o apellido son muy largo (100 caracteres maximo)");
        return false;
        
    }
    else if (email.length > 100){
        alert("El correo es muy largo");
        return false;
        
    }
    else if (!expresion.test(email)){
        alert("El correo no es valido");
        return false;
        
    }
    else if (contrasenia.length < 5){
        alert("La contrasseña es muy corta");
        return false;
        
    }
}

function validarLogin(){
    
    var email2,contrasenia2,expresion2;
    
    email2 = document.getElementById("email").value;
    contrasenia2 = document.getElementById("contrasenia").value;
    expresion2 = /\w+@\w+\.+[a-z]/;
    
    if(email2 === "" || contrasenia2 === ""){
        alert("Por favor debe llenar los campos");
        return false;
    }
    
    if (!expresion2.test(email2)){
        alert("El correo no es valido");
        return false;
    }
}