<?php
require_once 'classes/Manga.php';

$demografiaSeleccionada = $_GET['dem'] ?? FALSE;


if ($demografiaSeleccionada) {
    $catalogo = Manga::catalogo_demografia($demografiaSeleccionada);
}else {
    $catalogo = Manga::catalogo();
}
?>

<div class="d-flex justify-content-center p-5">
    <div>
        <h2 class="text-center mb-5 fw-bold">Catálogo de Mangas</h2>
    
        <div class="container">
            <?php if (!empty($catalogo)) { ?>
                <div class="row">
                    <?php foreach ($catalogo as $manga) { ?>
                        <div class="col-12 col-md-4">
                            <div class="card mb-3 shadow p-3 mb-5 bg-body-tertiary rounded">
                                <img src="img/portadas/<?= $manga->getPortada() ?>" class="card-img-top" alt="Portada de <?= $manga->getNombre() ?>">
                                <div class="card-body">
                                    <h3 class="m-0 fw-bold fs-3 pb-3 text"><?= $manga->getNombre() ?></h3>
                                    <span class="card-title fw-semibold text" lang="en"><?= $manga->getGenero() ?></span>
                                    <p class="card-text pt-2"><?= $manga->descripcion_corta() ?></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="fw-bold text">Demografía:</span> <?= $manga->getDemografia() ?></li>
                                    <li class="list-group-item"><span class="fw-bold text">Autor:</span> <?= $manga->getAutor() ?></li>
                                    <li class="list-group-item"><span class="fw-bold text">Ilustrador:</span> <?= $manga->getIlustracion() ?></li>
                                    <li class="list-group-item"><span class="fw-bold text">Editorial:</span> <?= $manga->getEditorial() ?></li>
                                    <li class="list-group-item"><span class="fw-bold text">Publicación:</span> <?= $manga->getPublicacion() ?></li>
                                </ul>
                                <div class="card-body">
                                    <div class="fs-3 mb-3 fw-bold text-center text">$<?= $manga->formato_precio() ?></div>
                                    <a href="index.php?pag=producto&id=<?= $manga->getId() ?>" class="btn prod-color btn-hover w-100 fw-bold">VER MÁS</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <div class="row">
                    <div class="col-12 text-center h1">No se encontraron mangas con los filtros seleccionados</div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
