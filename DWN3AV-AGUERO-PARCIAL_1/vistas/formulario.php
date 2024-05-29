<?php
$formulario = $_POST;

$nombre = $formulario["nombre"];
$apellido = $formulario["apellido"];
$email = $formulario["email"];

?>
<div class=" d-flex justify-content-center p-5">
    <h2>Muchas gracias por la suscripción</h2>
    <ul class="footer-ul">
        <li><span class="fw-bold text text-light">Nombre: <?= $nombre?></span></li>
        <li><span class="fw-bold text text-light">Apellido: <?= $apellido ?></span></li>
        <li><span class="fw-bold text text-light">Mail: <?= $email?></span></li>
    </ul>
</div>