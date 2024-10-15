<?php

$termino_busqueda = $_GET["q"] ?? "";
$resultados = [];

if($termino_busqueda){
    $resultados = buscar($conn, $termino_busqueda);
}

var_dump($resultados);

?>

<main id="busqueda">
    <div class="container-fluid my-4 p-5">

        <!-- <?php if($termino_busqueda && !empty($resultados)){ ?>

        <?php }elseif($termino_busqueda){ ?>
            <p class="text-center text-warning fs-3">No se encontró ningún resultado para el término de búsqueda: <?= $termino_busqueda ?>.</p>
        <?php }else{ ?>
            <p class="text-center text-danger fs-3">El campo de búsqueda no puede estar vacío.</p>
        <?php } ?> -->

    </div>
</main>