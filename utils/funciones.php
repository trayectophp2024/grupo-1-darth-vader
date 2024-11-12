<?php

    function traer_todo($conn, $seccion){
        $sqlSeccion = "SELECT * FROM $seccion";
        $resultado = $conn->query($sqlSeccion)->fetch_all(MYSQLI_ASSOC);
        return $resultado;
    }

    function info($conn, $tabla, $id){
        $sqlInfo = "SELECT * FROM $tabla WHERE id = $id";
        $resultado = $conn->query($sqlInfo)->fetch_all(MYSQLI_ASSOC);
        return $resultado;
    }

    function buscar($conn, $termino_busqueda){
        $termino_busqueda = $conn->real_escape_string($termino_busqueda);
        if($termino_busqueda == "pelicula" || $termino_busqueda == "peliculas"){
            $sqlPeliculas = "SELECT 'peliculas' AS tabla, id, titulo, episodio, era, descripcion, director, estreno, duracion, imagen FROM peliculas";
            $resultado = $conn->query($sqlPeliculas)->fetch_all(MYSQLI_ASSOC);
        }elseif($termino_busqueda == "personaje" || $termino_busqueda == "personajes"){
            $sqlPersonajes = "SELECT 'personajes' AS tabla, id, nombre, descripcion, especie, afiliacion, planeta_natal, habilidades, arma, actor, imagen FROM personajes";
            $resultado = $conn->query($sqlPersonajes)->fetch_all(MYSQLI_ASSOC);
        }elseif($termino_busqueda == "nave" || $termino_busqueda == "naves"){
            $sqlNaves = "SELECT 'naves' AS tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_maxima, armamento, capacidad, imagen FROM naves";
            $resultado = $conn->query($sqlNaves)->fetch_all(MYSQLI_ASSOC);
        }elseif($termino_busqueda == "sable" || $termino_busqueda == "sables"){
            $sqlSables = "SELECT 'sables' AS tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen, imagen2 FROM sables";
            $resultado = $conn->query($sqlSables)->fetch_all(MYSQLI_ASSOC);
        }else{
            $sqlPeliculas = "SELECT 'peliculas' AS tabla, id, titulo, episodio, era, descripcion, director, estreno, duracion, imagen FROM peliculas WHERE LOWER(titulo) LIKE '%$termino_busqueda%'";
            $sqlPersonajes = "SELECT 'personajes' AS tabla, id, nombre, descripcion, especie, afiliacion, planeta_natal, habilidades, arma, actor, imagen FROM personajes WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";
            $sqlNaves = "SELECT 'naves' AS tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_maxima, armamento, capacidad, imagen FROM naves WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";
            $sqlSables = "SELECT 'sables' AS tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen, imagen2 FROM sables WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";
            $resultPeliculas = $conn->query($sqlPeliculas)->fetch_all(MYSQLI_ASSOC);
            $resultPersonajes = $conn->query($sqlPersonajes)->fetch_all(MYSQLI_ASSOC);
            $resultNaves = $conn->query($sqlNaves)->fetch_all(MYSQLI_ASSOC);
            $resultSables = $conn->query($sqlSables)->fetch_all(MYSQLI_ASSOC);
            $resultado = array_merge($resultPeliculas, $resultPersonajes, $resultNaves, $resultSables);
        }
        return $resultado;
    }

?>