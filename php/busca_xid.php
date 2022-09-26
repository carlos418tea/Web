
<?php

//Comprueba que estes en la BD para iniciar sesión y te manda a la interfaz
include ('bd.php');

$id_cliente=$_POST["id_cliente"];

$return_arr = array();

$peticion="SELECT id_usuario, nombre, passw, mail, rol, nacimiento, telefono, nacion FROM usuarios ";
$peticion.=" WHERE id_usuario ="."'".$id_cliente."'";

$rs=$conn->query($peticion);

    if($rs->num_rows>0){
    while($fila=$rs->fetch_assoc()){
        $nombre = $_SESSION["nombre"]=$fila["nombre"];
        $telefono = $_SESSION["telefono"]=$fila["telefono"];
        $nacimiento = $_SESSION["nacimiento"]=$fila["nacimiento"];
        $nacion = $_SESSION["nacion"]=$fila["nacion"];

        $total_datos[] = array(
            "nombre"=>$nombre,
            "telefono"=>$telefono,
            "nacimiento"=>$nacimiento,
            "nacion"=>$nacion
        );

        //echo implode($total_datos);
        echo json_encode($total_datos);
        //implode
        }
    }

?>