<?php

    function traer_todo($conn, $seccion){
        $sqlSeccion = "SELECT * FROM " . $seccion . ";";
        $result = $conn->query($sqlSeccion);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    function info($conn, $tabla, $id){
        $sqlInfo = "SELECT * FROM " . $tabla . " WHERE id = " . $id . ";";
        $result = $conn->query($sqlInfo);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

?>