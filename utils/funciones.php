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
        $queryPeliculas = "SELECT 'peliculas' AS tabla, id, titulo, episodio, era, descripcion, director, estreno, duracion, imagen FROM peliculas";
        $queryPersonajes = "SELECT 'personajes' AS tabla, id, nombre, descripcion, especie, afiliacion, planeta_natal, habilidades, arma, actor, imagen FROM personajes";
        $queryNaves = "SELECT 'naves' AS tabla, id, nombre, descripcion, tipo, fabricante, longitud, velocidad_maxima, armamento, capacidad, imagen FROM naves";
        $querySables = "SELECT 'sables' AS tabla, id, nombre, descripcion, color, propietario, afiliacion, cristal, imagen, imagen2 FROM sables";
        if($termino_busqueda == "pelicula" || $termino_busqueda == "peliculas"){
            $sqlPeliculas = $queryPeliculas;
            $resultado = $conn->query($sqlPeliculas)->fetch_all(MYSQLI_ASSOC);
        }elseif($termino_busqueda == "personaje" || $termino_busqueda == "personajes"){
            $sqlPersonajes = $queryPersonajes;
            $resultado = $conn->query($sqlPersonajes)->fetch_all(MYSQLI_ASSOC);
        }elseif($termino_busqueda == "nave" || $termino_busqueda == "naves"){
            $sqlNaves = $queryNaves;
            $resultado = $conn->query($sqlNaves)->fetch_all(MYSQLI_ASSOC);
        }elseif($termino_busqueda == "sable" || $termino_busqueda == "sables"){
            $sqlSables = $querySables;
            $resultado = $conn->query($sqlSables)->fetch_all(MYSQLI_ASSOC);
        }else{
            $sqlPeliculas = $queryPeliculas . " WHERE LOWER(titulo) LIKE '%$termino_busqueda%'";
            $sqlPersonajes = $queryPersonajes . " WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";
            $sqlNaves = $queryNaves . " WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";
            $sqlSables = $querySables . " WHERE LOWER(nombre) LIKE '%$termino_busqueda%'";
            $resultPeliculas = $conn->query($sqlPeliculas)->fetch_all(MYSQLI_ASSOC);
            $resultPersonajes = $conn->query($sqlPersonajes)->fetch_all(MYSQLI_ASSOC);
            $resultNaves = $conn->query($sqlNaves)->fetch_all(MYSQLI_ASSOC);
            $resultSables = $conn->query($sqlSables)->fetch_all(MYSQLI_ASSOC);
            $resultado = array_merge($resultPeliculas, $resultPersonajes, $resultNaves, $resultSables);
        }
        return $resultado;
    }

?>