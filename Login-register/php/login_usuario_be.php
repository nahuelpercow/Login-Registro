<?php
session_start();
include'conexion_be.php';
$email= $_POST['email'];
$password= $_POST['password'];
$password= hash('sha512', $password);

$validar_login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE email='$email' AND password='$password'");
if(mysqli_num_rows($validar_login)> 0){
    $_SESSION['usuario'] =$email;
    echo' 
    <script>
    alert("Sesion iniciada correctamente");
    window.location="welcome.php";
     </script>';
}else{
    echo' 
    <script>
    alert("Usuario no encontrado, intente con otro");
    window.location="index.php";
     </script>';
     exit();
}

?>