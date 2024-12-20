<?php

require "partials/header.php";
$sables = info($conn, $tabla, $id);
$sable = $sables[0] ?? NULL;

$sablesPrev = info($conn, $tabla, $id - 1);
$sablesNext = info($conn, $tabla, $id + 1);
$sablePrev = $sablesPrev[0] ?? NULL;
$sableNext = $sablesNext[0] ?? NULL;

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
                <img class="sable-ind-img" src="bosquejos/ImagenesSW-propias/Sables/<?= $sable["imagen"] ?>" alt="<?= $sable["nombre"] ?>">
            </div>
            <div class="col-6">
                <h2><?= $sable["nombre"] ?></h2>

                <div class="row">
                    <p>Nombre: <span><?= $sable["nombre"] ?? "N/A" ?></span></p>
                    <p>Color: <span><?= $sable["color"] ?></span></p>
                    <p>Propietario: <span><?= $sable["propietario"] ?? "N/A" ?></span></p>
                    <p>Afiliación: <span><?= $sable["afiliacion"] ?? "N/A" ?></span></p>
                    <p>Cristal: <span><?= $sable["cristal"] ?? "N/A" ?></span></p>
                </div>
            </div>
        </div>

        <hr>

        <div class="row">
            <p><?= $sable["descripcion"] ?></p>
        </div>

        <div class="row d-flex flex-column justify-content-center align-items-center my-5">
            <img class="sable-ind-img2" src="bosquejos/ImagenesSW-propias/Sables/<?= $sable["imagen2"] ?>" alt="<?= $sable["nombre"] ?> desplegado">
        </div>

        <div class="d-flex justify-content-between align-items-center my-5">
            <?php if ($sable["id"] > 1) { ?>
                <a class="prev" href="index.php?sec=sable_individual&tab=<?= $tabla ?>&id=<?= $sable["id"] - 1 ?>"><span><i class="fa-solid fa-angles-left"></i> <?= $sablePrev["nombre"] ?></span></a>
            <?php } else { ?>
                <span></span>
            <?php } ?>
            <?php if ($sable["id"] < count(traer_todo($conn, $tabla))) { ?>
                <a class="next" href="index.php?sec=sable_individual&tab=<?= $tabla ?>&id=<?= $sable["id"] + 1 ?>"><span><?= $sableNext["nombre"] ?> <i class="fa-solid fa-angles-right"></i></span></a>
            <?php } else { ?>
                <span></span>
            <?php } ?>
        </div>

    </div>
</main>

<?php require "partials/footer.php"; ?>