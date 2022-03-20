//seleccionar en el dom los botones
btn__1=document.getElementById("btn__Registrarse");
btn__2=document.getElementById("btn__iniciar-secion");
btn__3=document.getElementById("btn__enviarRegistro");
btn__4=document.getElementById("btn__iniciar");
//seleccionar en el dom las cajas contenedoras
caja_trasera_login=document.querySelector(".caja__trasera-login")
caja_trasera_register=document.querySelector(".caja__trasera-register")
//seleccionar en el dom los formularios
formularioRegister=document.getElementById("formulario__registrar");
formularioLogin=document.getElementById("formulario__login");

caja__login_register=document.getElementById("caja__login-register");

btn__1.addEventListener("click",function(){
    formularioRegister.setAttribute("style","display:block");
    caja__login_register.setAttribute("style","left:410px");
    caja_trasera_login.setAttribute("style","di splay::")
    //caja_trasera_register.setAttribute("style","opacity:1")
    //caja_trasera_login.setAttribute("style","opacity:0")



})
btn__2.addEventListener("click",function(){
   // formularioRegister.removeAttribute("style")
    // caja__login_register.removeAttribute("style")
    formularioRegister.setAttribute("style","display:none");
    caja__login_register.setAttribute("style","left:10px");
    caja_trasera_login.setAttribute("style","display:block")
   // caja_trasera_register.setAttribute("style","opacity:0")
   // caja_trasera_login.setAttribute("style","opacity:1")
   alert("holi");


})
/*
btn__3.addEventListener("click",function(event){
    console.log("cliock")
    event.preventDefault();

});
btn__4.addEventListener("click",function(event){
    event.preventDefault();
    alert("hola")
})*/
    
