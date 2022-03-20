<?php
include("guardar.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css" >
</head>
<body>
    <main>

      <div class="contenedor__principal">
          <div class="caja__trasera">
             <div class="caja__trasera-login">
                <h3>Ya tienes cuenta</h3>
                <p>Iniciar secion para entrar en la pagina</p>
                <button id="btn__iniciar-secion">Iniciar secion</button>
            </div>
            <div class="caja__trasera-register">
                <h3>No tengo una cuenta</h3>
                <p>Regitrate para crear una nueva cuenta</p>
                <button id="btn__Registrarse">Registrarse</button>
            </div>
         </div> 
            
            <div class="caja__login-register"id="caja__login-register">
                <form action=""class="formulario__login" id="formulario_login">
                    <h2>Iniciar secion</h2>
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <button id="btn__inciar">Iniciar secion</button>
                </form>
                <form   method="POST" id="formulario__registrar" class="formulario__registrar">
                    <h2>Registrarse</h2>
                    <input type="text" name="nombre" placeholder="Nombre">
                    <input type="email" name="email" placeholder="Correo Electronico">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="contraseña" placeholder="Contraseña"> 
                    <input type="submit" value="enviar" name="registrar" id="btn__enviarRegistro"></input>
                </form>
                
                
                
            </div>            
              
         

      </div>
    </main>
    
    
    <script src="app.js"></script>
</body>
</html>

