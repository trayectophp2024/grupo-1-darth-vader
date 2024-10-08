<?php $peliculas = traer_todo($conn, $seccion); ?>

<main id="peliculas">
    <div class="container-fluid my-4 p-5">

        <div class="d-flex flex-column">
            <h1>películas</h1>

            <nav class="d-flex justify-content-start align-items-center" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?sec=inicio">inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                </ol>
            </nav>
        </div>


        <div id="trilogia1" class="secciones-peliculas container-fluid">
            <div class="row d-flex justify-content-start align-items-center m-3">
                <?php foreach ($peliculas as $pelicula) { ?>
                    <?php if ($pelicula["id"] <= 3) { ?>
                        <div class="col-4 d-flex flex-column justify-content-center align-items-center px-5 py-3">
                            <img width="200px" src="bosquejos/ImagenesSW-propias/Peliculas/<?= $pelicula["imagen"] ?>" alt="Póster de la película <?= $pelicula["titulo"] ?>">
                            <h5 class="my-2"><?= $pelicula["titulo"] ?></h5>
                            <a href="" class="btn">Ver más</a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="trilogia2" class="secciones-peliculas container-fluid">
            <div class="row d-flex justify-content-start align-items-center m-3">
                <?php foreach ($peliculas as $pelicula) { ?>
                    <?php if ($pelicula["id"] > 3 && $pelicula["id"] <= 6) { ?>
                        <div class="col-4 d-flex flex-column justify-content-center align-items-center px-5 py-3">
                            <img width="200px" src="bosquejos/ImagenesSW-propias/Peliculas/<?= $pelicula["imagen"] ?>" alt="Póster de la película <?= $pelicula["titulo"] ?>">
                            <h5 class="my-2"><?= $pelicula["titulo"] ?></h5>
                            <a href="" class="btn">Ver más</a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="trilogia3" class="secciones-peliculas container-fluid">
            <div class="row d-flex justify-content-start align-items-center m-3">
                <?php foreach ($peliculas as $pelicula) { ?>
                    <?php if ($pelicula["id"] > 6 && $pelicula["id"] <= 9) { ?>
                        <div class="col-4 d-flex flex-column justify-content-center align-items-center px-5 py-3">
                            <img width="200px" src="bosquejos/ImagenesSW-propias/Peliculas/<?= $pelicula["imagen"] ?>" alt="Póster de la película <?= $pelicula["titulo"] ?>">
                            <h5 class="my-2"><?= $pelicula["titulo"] ?></h5>
                            <a href="" class="btn">Ver más</a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

        <div id="trilogia4" class="secciones-peliculas container-fluid">
            <div class="row d-flex justify-content-start align-items-center m-3">
                <?php foreach ($peliculas as $pelicula) { ?>
                    <?php if ($pelicula["id"] > 9) { ?>
                        <div class="col-4 d-flex flex-column justify-content-center align-items-center px-5 py-3">
                            <img width="200px" src="bosquejos/ImagenesSW-propias/Peliculas/<?= $pelicula["imagen"] ?>" alt="Póster de la película <?= $pelicula["titulo"] ?>">
                            <h5 class="my-2"><?= $pelicula["titulo"] ?></h5>
                            <a href="" class="btn">Ver más</a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

    </div>
</main>