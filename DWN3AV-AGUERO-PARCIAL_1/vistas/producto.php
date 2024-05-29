<?PHP
$id = $_GET['id'] ?? FALSE;

$objManga = new Manga();
$manga = $objManga->manga_id($id);
?>
<div class="container ">
<?PHP if(!empty($manga)) { ?>
    <h2 class="text-center p-4 ">Detalle del producto</h2>
    <div class="card mb-3 shadow" style="max-width: auto;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="img/portadas/<?= $manga->getPortada(); ?>" class="img-fluid rounded-start border-end " alt="Portada de <?= $manga->getNombre() ?> <?= $manga->getTomo() ?>">
        </div>
        <div class="col-md-8">
        <div class="card-body ">
            <h3 class="card-title fs-3"><?= $manga->getNombre() ?> Tomo: <?= $manga->getTomo()?></h3>
            <span class="fw-semibold" lang="en"><?= $manga->getGenero() ?></span>
            <p class="card-text fw-semibold"><?= $manga->getDemografia() ?></p>
            <p class="card-text"><?= $manga->getDescripcion() ?></p>
            <p class="fs-3 mb-3 fw-bold text-center pt-4">$<?= $manga->formato_precio() ?></p>
            <div class="d-flex justify-content-center">
                <a href="index.php?pag=catalogo" class="btn w-75 fw-bold mt-4 prod-color btn-hover shadow">COMPRAR</a>
            </div>
        </div>
    </div>
    </div>
    <?PHP } else { ?>
        <div>
            <h2>No se encontró el producto deseado</h2>
        </div>
    <?PHP } ?>
</div>