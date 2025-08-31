<?php include_once 'views/templates/header.php'; ?>

<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="card bg-secondary text-white">
                <div class="card-header text-center">
                    <h4 class="mb-0"><i class="fa fa-users me-2"></i>Usuarios</h4>
                </div>
                <div class="card-body">
                    <div class="bg-secondary rounded h-100">
                        <!-- <h6 class="mb-4">Pills Navs &amp; Tabs</h6> -->
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Usuarios</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Nuevo</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <!-- PRIMER TAB -->
                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <table class="table table-bordered table-striped table-hover table-light" id="tblUsuarios" style="width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Dirección</th>
                                            <th>Rol</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- SEGUNDO TAB -->
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="bg-secondary rounded h-100">
                                    <!-- <h6 class="mb-4">Input Group</h6> -->
                                    <form class="p-4" id="formulario" autocomplete="off">
                                        <input type="hidden" id="id" name="id">
                                        <div class="row p-5">
                                            <div class="col-lg-4 col-sm-6">
                                                <label for="nombre" class="form-label mb-2">Nombres</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                    <input type="text" class="form-control" id="nombres" name="nombres" placeholder="ingrese su nombre" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <span id="errorNombre" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <label for="nombre" class="form-label mb-2">Apelido</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <span id="errorApellido" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <label for="nombre" class="form-label mb-2">Correo</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                    <input type="email" class="form-control" id="correo" name="correo" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <span id="errorCorreo" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <label for="nombre" class="form-label mb-2">Telefono</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <span id="errorTelefono" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-8 col-sm-6">
                                                <label for="nombre" class="form-label mb-2">Dirección</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <span id="errorDireccion" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <label for="nombre" class="form-label mb-2">Clave</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                                    <input type="password" class="form-control" id="clave" name="clave" class="form-control"placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                                <span id="errorClave" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-4 col-sm-6">
                                                <label for="nombre" class="form-label mb-2">Rol</label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon2"><i class="bi bi-person-fill"></i></span>
                                                    <select class="form-select"  id="rol" name="rol" aria-label="Example select with button addon">
                                                        <option value="" selected>Escoge un rol</option>
                                                        <option value="1">Administrador</option>
                                                        <option value="2">Vendedor</option>
                                                    </select>
                                                </div>
                                                <span id="errorRol" class="text-danger"></span>
                                            </div>
                                        </div>
                                        <div class="text-end">
                                            <button class="btn btn-danger" type="button" id="btnNuevo">Nuevo</button>
                                            <button class="btn btn-primary" type="submit" id="btnAccion">Registrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'views/templates/footer.php'; ?>