<?php

$personajes = info($conn, $tabla, $id);
$personaje = $personajes[0] ?? NULL;

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
                <img src="bosquejos/ImagenesSW-propias/Personajes/<?= $personaje["imagen"] ?>" alt="<?= $personaje["nombre"] ?>">
            </div>
            <div class="col-8">
                <h2><?= $personaje["nombre"] ?></h2>

                <div class="row">
                    <p>Nombre: <span><?= $personaje["nombre"] ?></span></p>
                    <p>Especie: <span><?= $personaje["especie"] ?></span></p>
                    <p>Afiliación: <span><?= $personaje["afiliacion"] ?></span></p>
                    <p>Planeta natal: <span><?= $personaje["planeta_natal"] ?></span></p>
                    <p>Habilidades: <span><?= $personaje["habilidades"] ?></span></p>
                    <p>Arma: <span><?= $personaje["arma"] ?></span></p>
                    <p>Actor: <span><?= $personaje["actor"] ?></span></p>
                </div>
                <hr>
                <p><?= $personaje["descripcion"] ?></p>
            </div>
        </div>

    </div>
</main>