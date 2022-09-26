<?php
    //Inserta datos a la base BD atraves de nuevo user
    include ("bd.php");

    //Variables para la petición
    
    $fecha = $_POST["reser_fecha"];
    $hora = $_POST["reser_hora"];
    $id_cliente = $_POST["reser_id"];

    //Petición
    $peticion= "INSERT INTO citas (";
    $peticion.= "fecha, hora, citado)";
    $peticion.= " VALUES (";
    $peticion.= "'".$fecha."',";
    $peticion.= "'".$hora."',";
    $peticion.= "'".$id_cliente."'";
    $peticion.= ")";

    //Conectamos
    $rs = $conn->query($peticion);
        if($rs){
            echo ("Se ha hecho una nueva reserva");
        }else{
            echo ("Algo ha pasado con la petición ");
        }

?>