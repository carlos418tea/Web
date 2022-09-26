<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
</html>
<?php

    include ("bd.php");

    //Variables para la petición
    $id_usuario = $_POST["id_usuario"];
    $nombre = $_POST["nombre"];
    $nacimiento = $_POST["nacimiento"];
    $telefono = $_POST["telefono"];
    $nacion = $_POST["nacion"];

    //Peticion a la base de datos
    $peticion = "UPDATE usuarios SET nombre="."'".$nombre."'," ;
    $peticion.= "nacimiento=" ."'".$nacimiento."'," ;
    $peticion.= "telefono="."'".$telefono."'," ;
    $peticion.= "nacion="."'".$nacion."'" ;
    $peticion.= " where id_usuario="."'".$id_usuario."'";

    //Conectamos
    $re_rs = $conn->query($peticion);
        if($re_rs){
            header('Location:../index.php');
        }else{
            echo ($peticion);
        }
        //$re_rs->close();
?>