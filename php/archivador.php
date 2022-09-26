
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <?php
        //Inserta datos a la base BD atraves de nuevo user
        include ("bd.php");

        //Variables para la petición
        $nombre = $_POST["nombre"];
        $passw = password_hash($_POST["passw"], PASSWORD_BCRYPT);
        $mail = $_POST["mail"];
        $telefono = $_POST["telefono"];
        $nacion = $_POST["nacion"];
        $nacimiento = $_POST["nacimiento"];
        


        //Petición
        $peticion= "INSERT INTO usuarios (";
        $peticion.= "nombre, passw, mail, telefono, nacion, nacimiento, rol)";
        $peticion.= " VALUES (";
        $peticion.= "'".$nombre."',";
        $peticion.= "'".$passw."',";
        $peticion.= "'".$mail."',";
        $peticion.= "'".$telefono."',";
        $peticion.= "'".$nacion."',";
        $peticion.= "'".$nacimiento."',";
        $peticion.= "'usuario'";
        $peticion.= ")";
        
        //Conectamos
        $rs = $conn->query($peticion);
            if($rs){
                header('Location: ../index.php');
            }else{
                echo "<script>alert('Datos insertados no validos.')</script>";
                echo "<a href='../index.php'>Volver a intentar</a>";
            }
        ?>

        <script>

        </script>
    </body>
</html>

