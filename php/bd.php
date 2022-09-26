<?php

    $host = "localhost";
    $usuario = "root";
    $password = "123456";
    $bd="pruebatf";

    $conn = new mysqli($host, $usuario, $password, $bd);

	if ($conn->connect_errno){
	    echo ("No pudo conectarse BD: ". mysqli_connect_error());
	}
?>