document.getElementById("btn_register").addEventListener("click", register);
document.getElementById("btn_login").addEventListener("click", login);
window.addEventListener("resize", anchoPagina);


var contenedor_login_register = document.querySelector(".contenedor__login-register");
var form_login = document.querySelector(".formulario_login");
var form_register = document.querySelector(".formulario_register");
var caja_trasera_login = document.querySelector(".caja-trasera-login");
var caja_trasera_register= document.querySelector(".caja-trasera-register");
function login(){
    if(window.innerWidth>850){
form_register.style.display="none";
contenedor_login_register.style.left="10px";
form_login.style.display="block";
caja_trasera_register.style.opacity="1";
caja_trasera_login.style.opacity="0";
    }else{
 form_register.style.display="none";
contenedor_login_register.style.left="0px";
form_login.style.display="block";
caja_trasera_register.style.display="block";
caja_trasera_login.style.display="none";

    }
}

function register(){
    if(window.innerWidth> 850){
form_register.style.display="block";
contenedor_login_register.style.left="410px";
form_login.style.display="none";
caja_trasera_register.style.opacity="0";
caja_trasera_login.style.opacity="1";
}else{
    form_register.style.display="block";
contenedor_login_register.style.left="0px";
form_login.style.display="none";
caja_trasera_register.style.display="none";
caja_trasera_login.style.opacity="1";
}
}
function anchoPagina(){
    if(window.innerWidth >850 ){
        caja_trasera_login.style.display="block";
        caja_trasera_register.style.display="block";
    }else{
        caja_trasera_register.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_login.style.display="none";
        form_login.style.display="block";
        form_register.style.display="none";
        contenedor_login_register.style.left="0";
    }
}
anchoPagina();