<?php

    // $host = "localhost";
    $host = "127.0.0.1:3308";
    $user = "root";
    $password = "";
    $database = "star_wars";

    $conn = new mysqli($host, $user, $password, $database);

    // Verificamos la conexión
    if($conn->connect_error){
        die("Conexión fallida: " . $conn->connect_error);
    }else{
        // echo "Conexion exitosa con la base de datos";
    }

?>