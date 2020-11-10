<?php

if(!isset($_SESSION['user'])){
	header("Location: /../Tesis/index.php?seccion=ultimasnoticias&pagina=1");
}

    $user = new User();
   
    ?>
        
        <h3>Registro de inicio y cierre de sesion</h3>

        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Hora</th>
              <th scope="col">Fecha</th>
              <th scope="col">Accion</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
                
                $id_usuario = $_SESSION['user'];
    
                $datos = $user->consultarDato_sesion($id_usuario);
      
                foreach($datos as $key){
                
                ?>
    
              <td><?php echo $key['hora']; ?></td>
              <td><?php echo $key['fecha']; ?></td>
              <td><?php echo $key['accion']; ?></td>

            </tr>

            <?php    
            }
            ?>
          </tbody>
</table>

