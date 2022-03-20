<?php
include("conexion_bd.php");
//para comprobar si se esta reciviendo algo en el formulario
if(isset($_POST["guardar.php"])){
    echo "guardado.....";
};  
if(isset($POST["registrar"])){
$nombre=$_POST["nombre"];
$email=$_POST["email"];
$usuario=$_POST["usuario"];
$contraseña=$_POST["contraseña"];
$query=`INSERT INTO usuarios(nombre, e-mail, usuario, contraseña) VALUES ("$nombre","$email","$usuario","$contraseña")`;
$res=msqli_query($conx,$query);
if(!$res){
    echo "fail";
}else{
    echo "ok";
};
};

?>