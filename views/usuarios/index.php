<?php include_once 'views/templates/header.php'; ?>

<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-12">
            <div class="card bg-secondary text-white">
                <div class="card-header text-center">
                    <h5 class="mb-0"><i class="fa fa-users me-2"></i>Usuarios</h5>
                </div>
                <div class="card-body">
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
            </div>
        </div>
    </div>
</div>
                 
<?php include_once 'views/templates/footer.php'; ?>