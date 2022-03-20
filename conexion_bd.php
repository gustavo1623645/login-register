<?php
$conx=mysqli_connect("localhost","root","","login_registro");
    //comprobar si la conexion fue exitosa
 if(isset($conx)){
    echo "BD conectada exitosamente";
  }


?>