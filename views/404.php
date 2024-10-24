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

    <main id="error404">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 d-flex flex-column justify-content-start align-items-start">
                    <h1>Página no encontrada</h1>
                    <p>Estos no son los androides que estás buscando...</p>
                    <a href="index.php">
                        <button type="button" class="btn">Volver a inicio</button>
                    </a>
                </div>
    
                <div class="col-6 d-flex justify-content-center align-items-end">
                    <img src="bosquejos/404.png" alt="404">
                </div>
            </div>
        </div>
    </main>

</body>

</html>