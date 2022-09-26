<?php
    //Inserta datos a la base BD atraves de nuevo user
    include ("bd.php");

    //Variables para la petición
    
    $id_cliente = $_POST["reser_id"];

    //Petición
    $peticion= "SELECT fecha, hora FROM pruebatf.citas where citado = '".$id_cliente."'";

    //Conectamos
    $rs = $conn->query($peticion);
    while($fila=$rs->fetch_assoc()){
        $fechas = ($_SESSION["fecha"]=$fila["fecha"]);
        $horas = ($_SESSION["hora"]=$fila["hora"]);

        echo ('
        <input type="date" id="fechas_cita" value="'.$fechas.'">
        <input type="text" id="hora_citas "value="'.$horas.'">');
        //for $fechas($i = 0; $i >= 5; $i++){
        //    echo $fechas;
        //}
        
    
    }

?>  