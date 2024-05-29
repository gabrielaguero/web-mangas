<h2 class="text-center mb-5 pt-4 ">¡Suscribite a nuestro newslatter!</h2>

<div class="container-fluid col-12  p-3 w-50 p-3 mx-auto p-4">
        <form class="prod-color p-4 rounded shadow" action="vistas/formulario.php" method="POST">
                    <div class="row g-2">
                        <div class="mb-3 d-flex ">
                            <div class="form-floating mb-3 w-50 m-1">
                                <input type="text" class="form-control " id="nombre" name="nombre" placeholder="Ingrese su nombre" required>
                                <label for="nombre" class="form-label label-color">Ingrese su nombre</label>
                            </div>
                            <div class="form-floating mb-3 w-50 m-1">
                                <input type="text" class="form-control " id="apellido" name="apellido" placeholder="Ingrese su apellido" required>
                                <label for="apellido" class="form-label label-color"">Ingrese su apellido</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control " id="email" name="email" placeholder="Ingrese su E-mail" required>
                                <label for="email" class="form-label class="label-color"">Ingrese su E-mail</label>
                            </div>
                        </div>
                        <div class="row">
                        <div class="mb-3">
                            <div class="form-floating mb-3 mx-auto">
                                <input class="form-control " type="date" name="nacimiento" id="nacimiento" required>
                                <label for="nacimiento" ">Fecha de nacimiento:</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label" >Dinos, ¿cuál es el manga que más te atrapó?</label>
                            <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                                                
                        <div class="mt-3 w-50 mx-auto">
                            <button type="submit" class="btn btn-form shadow w-100 btn-light fw-semibold">Enviar</button>
                        </div>
                    </div>
                </div>   
        </form>
</div>  