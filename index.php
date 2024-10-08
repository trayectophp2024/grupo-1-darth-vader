<?php

    require_once "utils/funciones.php";
    require_once "utils/db_connection.php";
    
    $seccion = $_GET["sec"] ?? "inicio";
    $secciones = [
        "inicio" => [
            "titulo" => "Inicio"
        ],
        "peliculas" => [
            "titulo" => "Películas"
        ],
        "pelicula_individual" => [
            "titulo" => "Películas"
        ],
        "personajes" => [
            "titulo" => "Personajes"
        ],
        "personaje_individual" => [
            "titulo" => "Personajes"
        ],
        "naves" => [
            "titulo" => "Naves"
        ],
        "nave_individual" => [
            "titulo" => "Naves"
        ],
        "sables" => [
            "titulo" => "Sables"
        ],
        "sable_individual" => [
            "titulo" => "Sables"
        ]
    ];

    if(array_key_exists($seccion, $secciones)){
        $vista = $seccion;
        $titulo = $secciones[$seccion]["titulo"];
    }else{
        $vista = "404";
        $titulo = "Error 404 - Página no encontrada";
    }

    $tabla = $_GET["tab"] ?? FALSE;
    $id = $_GET["id"] ?? FALSE;

?>

<?php
    require "partials/header.php";
    require "views/$vista.php" ?? "views/404.php";
    require "partials/footer.php";
?>