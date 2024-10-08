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
        "personajes" => [
            "titulo" => "Personajes"
        ],
        "naves" => [
            "titulo" => "Naves"
        ],
        "sables" => [
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

?>

<?php
    require "partials/header.php";
    require "views/$vista.php" ?? "views/404.php";
    require "partials/footer.php";
?>