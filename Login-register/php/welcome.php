<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo' 
    <script>
    alert("Requiere iniciar sesion");
    window.location="index.php";
     </script>';
     die();
     session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../Assets/css/btn.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
</head>
<body>


</body>
</html>