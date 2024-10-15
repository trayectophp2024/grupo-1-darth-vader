<?php $naves = traer_todo($conn, $seccion); ?>

<main id="naves">
    <div class="container-fluid my-4 p-5">

        <div class="d-flex flex-column">
            <h1><?= $titulo ?></h1>

            <nav class="d-flex justify-content-start align-items-center m-2" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php?sec=inicio">inicio</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?= $titulo ?></li>
                </ol>
            </nav>
        </div>

        <div class="row d-flex justify-content-start align-items-center m-3">
            <?php foreach ($naves as $nave) { ?>
                <div class="col-4 d-flex flex-column justify-content-center align-items-center mb-4 px-5 py-3">
                    <img src="bosquejos/ImagenesSW-propias/Naves/<?= $nave["imagen"] ?>" alt="<?= $nave["nombre"] ?>">
                    <h5 class="my-3"><?= $nave["nombre"] ?></h5>
                    <a href="index.php?sec=nave_individual&tab=<?= $seccion ?>&id=<?= $nave["id"] ?>" class="btn">Ver más</a>
                </div>
            <?php } ?>
        </div>

    </div>
</main>