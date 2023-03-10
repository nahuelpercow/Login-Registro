<?php 
session_start();
if(isset($_SESSION['usuario'])){
    header("location:welcome.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="../Assets/images/icon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro y Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../Assets/css/estilos.css">
</head>
<body>
    <main>
       <div class="contenedor-todo">

        <div class="caja-trasera">
            <div class="caja-trasera-login">
                <h3>Do you Already have an account?</h3>
                <p>Login to the website</p>
                <button id="btn_login">Login</button>
            </div>
            <div class="caja-trasera-register">
                <h3>Don't have an account?</h3>
                <p>Register</p>
                <button id="btn_register">Sign up</button>
            </div>

        </div>
        <!--Login and register form-->
        <div class="contenedor__login-register">
        <!--Login-->
        <form action="login_usuario_be.php" class="formulario_login" method="POST">
            <h2>Login</h2>
            <input type="text" placeholder="Enter Email" name="email">
            <input type="password" placeholder="Enter password" name="password">
            <button>Login</button>
        </form>
        <!--Register-->
        <form action="registro_usuario_be.php" class="formulario_register" method="POST">
            
            <h2>Sign up</h2>
            <input type="text" placeholder="Enter Name" name="name">
            <input type="text" placeholder="Enter Email" name="email">
            <input type="password" placeholder="Enter password" name="password">
            <button >Sign up</button>
        </form>
    </div>
        

       </div>
    </main>
    <script src="../Assets/js/scipt.js"></script>
    
</body>
</html>