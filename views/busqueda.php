<?php require "partials/header.php"; ?>

<main id="busqueda">
    <div class="container-fluid my-4 p-5">

        <?php if ($termino_busqueda && !empty($resultados)) { ?>
            <h1 class="text-center text-uppercase fs-3 mb-5">Resultados de la búsqueda</h1>

            <div class="row d-flex justify-content-start align-items-center">
                <?php foreach ($resultados as $resultado) { ?>
                    <?php if ($resultado["tabla"] == "peliculas") { ?>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center px-3 py-3">
                            <img class="peliculas-img" src="bosquejos/ImagenesSW-propias/Peliculas/<?= $resultado["imagen"] ?>" alt="Póster de la película <?= $resultado["titulo"] ?>">
                            <h5 class="text-center my-3"><?= $resultado["titulo"] ?></h5>
                            <a href="index.php?sec=pelicula_individual&tab=<?= $resultado["tabla"] ?>&id=<?= $resultado["id"] ?>" class="btn">Ver más</a>
                        </div>
                    <?php } elseif ($resultado["tabla"] == "personajes") { ?>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center mb-4 px-5 py-3">
                            <img class="personajes-img" src="bosquejos/ImagenesSW-propias/Personajes/<?= $resultado["imagen"] ?>" alt="<?= $resultado["nombre"] ?>">
                            <h5 class="my-3"><?= $resultado["nombre"] ?></h5>
                            <a href="index.php?sec=personaje_individual&tab=<?= $resultado["tabla"] ?>&id=<?= $resultado["id"] ?>" class="btn">Ver más</a>
                        </div>
                    <?php } elseif ($resultado["tabla"] == "naves") { ?>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center mb-4 px-5 py-3">
                            <img class="naves-img" src="bosquejos/ImagenesSW-propias/Naves/<?= $resultado["imagen"] ?>" alt="<?= $resultado["nombre"] ?>">
                            <h5 class="my-3"><?= $resultado["nombre"] ?></h5>
                            <a href="index.php?sec=nave_individual&tab=<?= $resultado["tabla"] ?>&id=<?= $resultado["id"] ?>" class="btn">Ver más</a>
                        </div>
                    <?php } elseif ($resultado["tabla"] == "sables") { ?>
                        <div class="col-3 d-flex flex-column justify-content-center align-items-center mb-4 px-5 py-3">
                            <img class="sables-img" src="bosquejos/ImagenesSW-propias/Sables/<?= $resultado["imagen"] ?>" alt="<?= $resultado["nombre"] ?>">
                            <h5 class="my-3"><?= $resultado["nombre"] ?></h5>
                            <a href="index.php?sec=sable_individual&tab=<?= $resultado["tabla"] ?>&id=<?= $resultado["id"] ?>" class="btn">Ver más</a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        <?php } else { ?>
            <p class="text-center text-break fs-3" style='font-family: "Goldman", sans-serif;'>No se encontraron resultados para la búsqueda: <b><?= $termino_busqueda ?></b></p>
        <?php } ?>

    </div>
</main>

<?php require "partials/footer.php"; ?>