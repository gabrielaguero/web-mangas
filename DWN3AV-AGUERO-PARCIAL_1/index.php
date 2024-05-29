<?php
require_once "classes/Manga.php";

$sitio_paginas = [
  "home" =>[
      "titulo" => "Home"
    ], 
  "envios" => [
      "titulo" => "Envíos"
    ], 
  "quienes_somos" =>[
      "titulo" => "¿Quienes somos?"
  ], 
  "404" =>[
      "titulo" => "Página no encontrada"
  ], 
  "catalogo" => [
      "titulo" => "Catálogo"
  ],
  "producto" => [
    "titulo" => "Detalle del producto"
  ],
  "contacto" => [
    "titulo" => "Contactanos"
  ],
  "formulario" => [
    "titulo" => "Formulario"
  ]
];


$paginas = isset($_GET['pag']) ? $_GET['pag'] : 'home';

if(!array_key_exists($paginas, $sitio_paginas)){
    $vista = "404";
    $pagTitulo = "Error 404: Página no encontrada";
}else{
    $vista = $paginas;
    $pagTitulo = $sitio_paginas[$paginas]['titulo'];
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Web :: <?= $pagTitulo ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class=" d-flex justify-content-between sticky-top mb-5 shadow">
  <h1 class="text-center fs-1 p-3 bg-h1">Mundo Manga</h1>
  <nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link fw-semibold text-light fs-5" href="index.php?pag=home">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle fw-semibold text-light fs-5" href="index.php?pag=catalogo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Catálogo
          </a>
          <ul class="dropdown-menu menu-color">
            <li><a class="dropdown-item fw-semibold a-color fs-5" href="index.php?pag=catalogo">Todos</a></li>
            <li><a class="dropdown-item fw-semibold a-color fs-5" href="index.php?pag=catalogo&dem=Shonen">Shonen</a></li>
            <li><a class="dropdown-item fw-semibold a-color fs-5" href="index.php?pag=catalogo&dem=Shojo">Shojo</a></li>
            <li><a class="dropdown-item fw-semibold a-color fs-5" href="index.php?pag=catalogo&dem=Seinen">Seinen</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold text-light fs-5" href="index.php?pag=quienes_somos">¿Quienes somos?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold text-light fs-5" href="index.php?pag=envios">Envíos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-semibold text-light fs-5" href="index.php?pag=contacto">Contactanos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner container-fluid">
      <div class="carousel-item active">
        <img src="img/banner/banner-1.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner/banner-2.webp" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/banner/banner-3.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>

        <?php
            require_once "vistas/$vista.php";
        ?>

<footer class="prod-color d-flex justify-content-around align-items-center p-4">
  <img src="img/perfil/alumno.webp" class="img-footer shadow" alt="Foto perfil del alumno">
  <span>&#169; DaVinci 2024</span>
  <ul class="footer-ul">
    <li><span class="fw-bold text text-light">Nombre:</span> Gabriel Agüero</li>
    <li><span class="fw-bold text text-light">Edad:</span> 28 años</li>
    <li><span class="fw-bold text text-light">E-mail:</span> gabriel.aguero@davinci.edu.ar</li>
  </ul>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>