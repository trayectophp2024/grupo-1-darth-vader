<?php

$peliculas = info($conn, $tabla, $id);
$pelicula = $peliculas[0] ?? NULL;

?>

<main id="pelicula-ind">
    <div class="container-fluid my-4 p-5">

        <nav class="breadcrumb d-flex justify-content-start align-items-center" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?sec=inicio">inicio</a></li>
                <li class="breadcrumb-item"><a href="index.php?sec=peliculas">películas</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $pelicula["titulo"] ?></li>
            </ol>
        </nav>

        <div class="row py-5">
            <div class="col-4 d-flex justify-content-center">
                <img src="bosquejos/ImagenesSW-propias/Peliculas/<?= $pelicula["imagen"] ?>" alt="Poster de la película <?= $pelicula["titulo"] ?>">
            </div>
            <div class="col-8">
                <h2><?= $pelicula["titulo"] ?></h2>

                <div class="row">
                    <div class="col-6 my-0">
                        <p>Estreno: <span><?= $pelicula["estreno"] ?></span></p>
                        <p>Dirección: <span><?= $pelicula["director"] ?></span></p>
                    </div>
                    <div class="col-6">
                        <p>Duración: <span><?= $pelicula["duracion"] ?> min.</span></p>
                        <p>Era: <span></span></p>
                    </div>
                </div>
                <hr>
                <p><?= $pelicula["descripcion"] ?></p>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center my-5">
            <?php if($pelicula["id"] > 1){ ?>
                <a href="index.php?sec=pelicula_individual&tab=<?= $tabla ?>&id=<?= $pelicula["id"] - 1 ?>"><span><i class="fa-solid fa-angles-left"></i> Película anterior</span></a>
            <?php }else{ ?>
                <span></span>
            <?php } ?>
            <?php if($pelicula["id"] < count(traer_todo($conn, $tabla))){ ?>
            <a href="index.php?sec=pelicula_individual&tab=<?= $tabla ?>&id=<?= $pelicula["id"] + 1 ?>"><span>Película siguiente <i class="fa-solid fa-angles-right"></i></span></a>
            <?php }else{ ?>
                <span></span>
            <?php } ?>
        </div>

    </div>
</main>