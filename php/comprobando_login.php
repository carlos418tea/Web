<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link rel="stylesheet" type="text/css" href="../css/comprobando_login.css">
        <!--Tipografias-->
        <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
        <title>comprobando lodgin</title>
    </head>
    <body>
        
    </body>
</html>
<?php

    //Comprueba que estes en la BD para iniciar sesión y te manda a la interfaz
    include ('bd.php');

    $nombre=$_POST["nombre"];
    $passw=password_hash($_POST["passw"], PASSWORD_BCRYPT);

    $consulta_fallida = " href='index.php'>Síguenos en Twitter";

    $peticion="SELECT id_usuario, nombre, passw, mail, rol, nacimiento, telefono, nacion FROM usuarios ";
    $peticion.=" WHERE nombre ="."'".$nombre."'";

    $rs=$conn->query($peticion);

    if($rs->num_rows>0){
        while($fila=$rs->fetch_assoc()){
            if(password_verify($_POST['passw'], $fila["passw"])){
                session_start();
                $_SESSION["nombre"]=$fila["nombre"];
                $_SESSION["passw"]=$fila["passw"];

                include("bienvenido.php");
            }
        }
    }else{
        echo "<script>alert('Contraseña o nombre incorrectos...')</script>";
        echo "<div class='redireccion'><a href='../index.php' class='texto'>Volver a intentar</a><div>";
    }

?>