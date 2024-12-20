<?php

require "partials/header.php";
$personajes = info($conn, $tabla, $id);
$personaje = $personajes[0] ?? NULL;

$personajesPrev = info($conn, $tabla, $id - 1);
$personajesNext = info($conn, $tabla, $id + 1);
$personajePrev = $personajesPrev[0] ?? NULL;
$personajeNext = $personajesNext[0] ?? NULL;

?>

<main id="personaje-ind">
    <div class="container-fluid my-4 p-5">

        <nav class="breadcrumb d-flex justify-content-start align-items-center" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php?sec=inicio">inicio</a></li>
                <li class="breadcrumb-item"><a href="index.php?sec=personajes">personajes</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?= $personaje["nombre"] ?></li>
            </ol>
        </nav>

        <div class="row py-5">
            <div class="col-4 d-flex justify-content-center align-items-center">
                <img class="personaje-ind-img" src="bosquejos/ImagenesSW-propias/Personajes/<?= $personaje["imagen"] ?>" alt="<?= $personaje["nombre"] ?>">
            </div>
            <div class="col-8">
                <h2><?= $personaje["nombre"] ?></h2>

                <div class="row">
                    <p>Nombre: <span><?= $personaje["nombre"] ?? "N/A" ?></span></p>
                    <p>Especie: <span><?= $personaje["especie"] ?? "N/A" ?></span></p>
                    <p>Afiliación: <span><?= $personaje["afiliacion"] ?? "N/A" ?></span></p>
                    <p>Planeta natal: <span><?= $personaje["planeta_natal"] ?? "N/A" ?></span></p>
                    <p>Habilidades: <span><?= $personaje["habilidades"] ?? "N/A" ?></span></p>
                    <p>Arma: <span><?= $personaje["arma"] ?? "N/A" ?></span></p>
                    <p>Actor: <span><?= $personaje["actor"] ?? "N/A" ?></span></p>
                </div>

                <hr>

                <p><?= $personaje["descripcion"] ?></p>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center my-5">
            <?php if($personaje["id"] > 1){ ?>
                <a class="prev" href="index.php?sec=personaje_individual&tab=<?= $tabla ?>&id=<?= $personaje["id"] - 1 ?>"><span><i class="fa-solid fa-angles-left"></i> <?= $personajePrev["nombre"] ?></span></a>
            <?php }else{ ?>
                <span></span>
            <?php } ?>
            <?php if($personaje["id"] < count(traer_todo($conn, $tabla))){ ?>
                <a class="next" href="index.php?sec=personaje_individual&tab=<?= $tabla ?>&id=<?= $personaje["id"] + 1 ?>"><span><?= $personajeNext["nombre"] ?> <i class="fa-solid fa-angles-right"></i></span></a>
            <?php }else{ ?>
                <span></span>
            <?php } ?>
        </div>

    </div>
</main>

<?php require "partials/footer.php"; ?>