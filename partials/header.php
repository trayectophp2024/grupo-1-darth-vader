<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Star Wars - <?= $titulo ?></title>
    <!-- FAVICON -->
    <link rel="shortcut icon" href="bosquejos/Logo/Logo FAVICON.png" type="image/x-icon">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">
    <!-- ÍCONOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand mx-3" href="index.php">
                    <img width="280px" src="bosquejos/Logo/Logo SW alt.png" alt="Logo Star Wars">
                </a>
                <form class="container-fluid mx-5">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input type="text" class="form-control">
                    </div>
                </form>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-3 mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sec=peliculas">películas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sec=personajes">personajes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sec=naves">naves</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?sec=sables">sables</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>