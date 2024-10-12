<?php

$naves = info($conn, $tabla, $id);
$nave = $naves[0] ?? NULL;

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
                <img src="bosquejos/ImagenesSW-propias/Naves/<?= $nave["imagen"] ?>" alt="<?= $nave["nombre"] ?>">
            </div>
            <div class="col-6">
                <h2><?= $nave["nombre"] ?></h2>

                <div class="row">
                    <p>Tipo: <span><?= $nave["tipo"] ?></span></p>
                    <p>Fabricante: <span><?= $nave["fabricante"] ?></span></p>
                    <p>Longitud: <span><?= $nave["longitud"] ?> mts.</span></p>
                    <p>Vel. máxima: <span><?= $nave["velocidad_maxima"] ?> km/h</span></p>
                    <p>Armamento: <span><?= $nave["armamento"] ?></span></p>
                    <p>Capacidad: <span><?= $nave["capacidad"] ?></span></p>
                </div>
                <hr>
            </div>
        </div>
        <div class="row" style="margin-top: -30px;">
            <p><?= $nave["descripcion"] ?></p>
        </div>
        <div class="d-flex justify-content-between align-items-center my-5">
            <?php if($nave["id"] > 1){ ?>
                <a href="index.php?sec=nave_individual&tab=<?= $tabla ?>&id=<?= $nave["id"] - 1 ?>"><span><< Nave anterior</span></a>
            <?php }else{ ?>
                <span></span>
            <?php } ?>
            <?php if($nave["id"] < 10){ ?>
            <a href="index.php?sec=nave_individual&tab=<?= $tabla ?>&id=<?= $nave["id"] + 1 ?>"><span>Nave siguiente >></span></a>
            <?php }else{ ?>
                <span></span>
            <?php } ?>
        </div>

    </div>
</main>