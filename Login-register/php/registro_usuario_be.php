<?php
include'conexion_be.php';
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
//Encriptamiento de password 
$password= hash('sha512', $password);

$query= "INSERT INTO usuarios(name,email,password) VALUES('$name', '$email', '$password')";
$verificacion_email = mysqli_query($conexion, "SELECT * from usuarios WHERE email ='$email'");
if(mysqli_num_rows($verificacion_email)>0 ){
    echo' 
    <script>
    alert("Este correo ya esta registrado, intente con otro");
    window.location="index.php";
     </script>';
     exit();
}
$ejecutar= mysqli_query($conexion, $query);
if($ejecutar){
    echo' 
    <script>
    alert("Usuario registrado con exito");
    window.location="index.php";
     </script>';
}else{
    echo' 
    <script>
    alert("No se pudo registrar con exito, intente denuevo");
    window.location="index.php";
     </script>';
}
?>

