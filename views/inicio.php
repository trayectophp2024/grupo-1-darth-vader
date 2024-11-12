<?php require "partials/header.php" ?>

<main id="home">
    <section id="presentacion" class="container-fluid mt-5 mb-3">
        <div class="row">
            <div class="col-4 d-flex flex-column justify-content-between mb-5 px-5">
                <img width="120px" class="m-4" src="bosquejos/ImagenesSW-propias/Home/deathstar-home.png" alt="Estrella de la Muerte">
                <img width="280px" class="mt-5 me-4 align-self-end" src="bosquejos/ImagenesSW-propias/Home/xwing-home.png" alt="X-Wing">
            </div>
            <div class="col-4 mb-5 d-flex justify-content-center align-items-center">
                <p class="text-center">"Dedicado a todo aquel que recorriendo el camino de la Fuerza se encuentre."</p>
            </div>
            <div class="col-4 d-flex justify-content-start align-items-end">
                <img id="yoda-home" src="bosquejos/ImagenesSW-propias/Home/yoda-home.png" alt="Yoda">
            </div>
        </div>
    </section>

    <section id="peliculas-home" class="secciones-home container-fluid">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-center">películas</h2>
            <a href="index.php?sec=peliculas">
                <button type="button" class="btn">explorar</button>
            </a>
            </div>
        </div>
    </section>

    <section id="george-lucas" class="container-fluid my-5">
        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <img src="bosquejos/ImagenesSW-propias/Home/George-Lucas.jpg" alt="George Lucas">
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                <div class="row mx-5 p-3">
                    <h3>George Lucas, creador y director.</h3>
                    <p>George Walton Lucas Jr. es principalmente conocido por crear las franquicias de Star Wars e Indiana Jones y fundar Lucasfilm, LucasArts e Industrial Light & Magic.</p>
                    <p>La épica ópera espacial Star Wars: Una Nueva Esperanza (1977), tuvo una producción problemática, pero fue un éxito sorpresa, convirtiéndose en la película más taquillera de la época, ganando siete Premios Oscar y provocando un fenómeno cultural.</p>
                    <p>Lucas es uno de los cineastas más exitosos e influyentes de la historia y ha sido nominado a cuatro premios de la Academia. Es considerado una figura significativa del movimiento Nuevo Hollywood y sus películas se encuentran entre las películas con las mayores recaudaciones de la taquilla norteamericana.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="personajes-home" class="secciones-home container-fluid">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-center">personajes</h2>
            <a href="index.php?sec=personajes">
                <button type="button" class="btn">explorar</button>
            </a>
            </div>
        </div>
    </section>

    <section id="trailers" class="container-fluid mx-auto my-5 pt-3 py-5">
        <h2 class="text-center" style="font-size: 28px;">trailers</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <iframe src="https://www.youtube.com/embed/-ul1pef501M" title="Star Wars: La venganza de los Sith - TRÁILER MODERNO (2022)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/urhsYepFqs0" title="Star Wars: El Imperio Contraataca - TRÁILER MODERNO - 4K || (2022)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/EcQKTTwLA-Y" title="Star Wars: El retorno del Jedi - TRÁILER MODERNO | 4K (40 aniversario)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>

    <section id="naves-home" class="secciones-home container-fluid">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h2 class="text-center">naves</h2>
            <a href="index.php?sec=naves">
                <button type="button" class="btn">explorar</button>
            </a>
            </div>
        </div>
    </section>

    <section id="john-williams" class="container-fluid my-5">
        <div class="row">
            <div class="col-6 d-flex justify-content-center align-items-center">
                <img src="bosquejos/ImagenesSW-propias/Home/John-Williams.jpg" alt="John Williams">
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-center">
                <div class="row mx-5 p-3">
                    <h3>John Williams, músico y compositor.</h3>
                    <p>En una carrera de más de seis décadas, John Williams se ha convertido en uno de los compositores más exitosos de música para películas y conciertos de Estados Unidos. Ha sido director musical y compositor de más de cien filmes, incluidas las nueve películas de Star Wars, las tres primeras películas de Harry Potter, Superman, Mi pobre Angelito, entre otras.</p>
                    <p>En 2005, su obra en la banda sonora de Star Wars fue seleccionada por el American Film Institute como la obra musical más grande del cine estadounidense.</p>
                    <p>Con 54 nominaciones a los premios Oscar, Williams es la persona con vida con más nominaciones de la Academia y la segunda con más nominaciones de la historia, después de Walt Disney.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="d-flex justify-content-end align-items-center mb-5 me-5">
        <a class="up" href="#">
            <span>Ir Arriba <i class="fa-solid fa-angles-up"></i></span>
        </a>
    </div>

</main>

<?php require "partials/footer.php"; ?>