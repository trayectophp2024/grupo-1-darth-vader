<?php

require "partials/header.php";
$naves = info($conn, $tabla, $id);
$nave = $naves[0] ?? NULL;

$navesPrev = info($conn, $tabla, $id - 1);
$navesNext = info($conn, $tabla, $id + 1);
$navePrev = $navesPrev[0] ?? NULL;
$naveNext = $navesNext[0] ?? NULL;

?>

<main id="nave-ind">
    <div class="container-fluid my-4 p-5">

        <nav class="breadcrumb d-flex justify-content-start align-items-center" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?sec=inicio">inicio</a></li>
                <li class="breadcrumb-item"><a href="index.php?sec=naves">naves</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $nave["nombre"] ?></li>
            </ol>
        </nav>

        <div class="row py-5">
            <div class="col-6 d-flex justify-content-center align-items-center" style="margin-top: -40px;">
                <img class="nave-ind-img" src="bosquejos/ImagenesSW-propias/Naves/<?= $nave["imagen"] ?>" alt="<?= $nave["nombre"] ?>">
            </div>
            <div class="col-6">
                <h2><?= $nave["nombre"] ?></h2>

                <div class="row">
                    <p>Tipo: <span><?= $nave["tipo"] ?? "N/A" ?></span></p>
                    <p>Fabricante: <span><?= $nave["fabricante"] ?? "N/A" ?></span></p>
                    <p>Longitud: <span><?= $nave["longitud"] ?? "N/A" ?> mts.</span></p>
                    <p>Vel. máxima: <span><?= $nave["velocidad_maxima"] ?? "N/A" ?> km/h</span></p>
                    <p>Armamento: <span><?= $nave["armamento"] ?? "N/A" ?></span></p>
                    <p>Capacidad: <span><?= $nave["capacidad"] ?? "N/A" ?></span></p>
                </div>
                <hr>
            </div>
        </div>

        <div class="row" style="margin-top: -30px;">
            <p><?= $nave["descripcion"] ?></p>
        </div>

        <div class="d-flex justify-content-between align-items-center my-5">
            <?php if($nave["id"] > 1){ ?>
                <a class="prev" href="index.php?sec=nave_individual&tab=<?= $tabla ?>&id=<?= $nave["id"] - 1 ?>"><span><i class="fa-solid fa-angles-left"></i> <?= $navePrev["nombre"] ?></span></a>
            <?php }else{ ?>
                <span></span>
            <?php } ?>
            <?php if($nave["id"] < count(traer_todo($conn, $tabla))){ ?>
                <a class="next" href="index.php?sec=nave_individual&tab=<?= $tabla ?>&id=<?= $nave["id"] + 1 ?>"><span><?= $naveNext["nombre"] ?> <i class="fa-solid fa-angles-right"></i></span></a>
            <?php }else{ ?>
                <span></span>
            <?php } ?>
        </div>

    </div>
</main>

<?php require "partials/footer.php"; ?>