
<?php
    
    // validar campo nombre del formulario para nuevo usuario, y esta ocupado el nombre aparece una alerta en rojo...
    include ('bd.php');

    $nombre=$_POST["nombre"];

    $peticion="SELECT `id_usuario`, `nombre`, `passw`, `rol` FROM `usuarios` WHERE 1";
    $peticion.=" AND `nombre`='".$nombre."'";

    $rs = $conn->query($peticion);
        if($rs->num_rows>0){
            echo 0;
        }else{
            echo 1;
        }
?>

