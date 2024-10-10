<?php

$sables = info($conn, $tabla, $id);
$sable = $sables[0] ?? NULL;

?>

<main id="sable-ind">
    <div class="container-fluid my-4 p-5">

        <nav class="breadcrumb d-flex justify-content-start align-items-center" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?sec=inicio">inicio</a></li>
                <li class="breadcrumb-item"><a href="index.php?sec=sables">sables</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $sable["nombre"] ?></li>
            </ol>
        </nav>

        <div class="row py-5">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <img src="bosquejos/ImagenesSW-propias/Sables/<?= $sable["imagen"] ?>" alt="<?= $sable["nombre"] ?>">
            </div>
            <div class="col-6">
                <h2><?= $sable["nombre"] ?></h2>

                <div class="row">
                    <p>Nombre: <span><?= $sable["nombre"] ?></span></p>
                    <p>Color: <span><?= $sable["color"] ?></span></p>
                    <p>Propietario: <span><?= $sable["propietario"] ?></span></p>
                    <p>Afiliación: <span><?= $sable["afiliacion"] ?></span></p>
                    <p>Cristal: <span><?= $sable["cristal"] ?></span></p>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <p><?= $sable["descripcion"] ?></p>
        </div>

    </div>
</main>