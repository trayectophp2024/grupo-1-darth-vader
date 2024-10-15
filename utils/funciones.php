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

    function buscar($conn, $termino_busqueda){
        $termino_busqueda = $conn->real_escape_string($termino_busqueda);

        $sqlPeliculas = "SELECT 'peliculas' AS tabla, id, titulo, episodio, descripcion, director, estreno, duracion, imagen FROM peliculas WHERE LOWER(titulo) LIKE '%$termino_busqueda%';";
        $sqlPersonajes = "SELECT 'personajes' AS tabla, id, nombre, descripcion, especie, afiliacion, planeta_natal, habilidades, arma, actor, imagen FROM personajes WHERE LOWER(nombre) LIKE '%$termino_busqueda%';";
        $sqlNaves = "SELECT 'naves' AS tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_maxima, armamento, capacidad, imagen FROM naves WHERE LOWER(nombre) LIKE '%$termino_busqueda%';";
        $sqlSables = "SELECT 'sables' AS tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen FROM sables WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";

        $resultPeliculas = $conn->query($sqlPeliculas)->fetch_all(MYSQLI_ASSOC);
        $resultPersonajes = $conn->query($sqlPersonajes)->fetch_all(MYSQLI_ASSOC);
        $resultNaves = $conn->query($sqlNaves)->fetch_all(MYSQLI_ASSOC);
        $resultSables = $conn->query($sqlSables)->fetch_all(MYSQLI_ASSOC);
        
        $resultado = array_merge($resultPeliculas, $resultPersonajes, $resultNaves, $resultSables);
        return $resultado;
    }


?>