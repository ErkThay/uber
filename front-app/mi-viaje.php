<?php
    $title = "Mi viaje";
    $bodyClass = "sidebar-mini sidebar-collapse layout-navbar-fixed layout-footer-fixed";
    include "componentes/header.php";
?>
<div class="wrapper">
    <?php include "componentes/navbar.php";?>
    <?php include "componentes/main-sidebar.php";?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Mi viaje</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            <li class="breadcrumb-item active">Mi viaje</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="contenedor-cards">
                            <!-- card detalle -->
                            <div class="card card-success">
                                <div class="card-header p-2 text-center">
                                    <div class="row">
                                        <div class="col-4">
                                            <h1 class="h5">Tiempo</h1>
                                        </div>
                                        <div class="col-4">
                                            <h1 class="h5">Distancia</h1>
                                        </div>
                                        <div class="col-4">
                                            <h1 class="h5">Tarifa</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-2 text-center">
                                    <div class="row">
                                        <div class="col-4">
                                            <span class="tiempo h5">0</span>
                                        </div>
                                        <div class="col-4">
                                            <span class="distancia h5">0</span>
                                        </div>
                                        <div class="col-4">
                                            <span class="tarifa-pagar h5">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <!-- card detalle -->
                            <!-- card viaje -->
                            <div class="card card-success altura-card shadow">
                                <div class="card-header">
                                    <h3 class="card-title">¿A dónde vas?</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                            <i class="fas fa-minus"></i></button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="card-body formulario-viaje" novalidate>
                                    <div class="form-group">
                                        <label for="inputOrigen">Origen</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-success text-white"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="inputOrigen" placeholder="Origen"
                                                required>
                                            <div class="invalid-feedback">
                                                Por favor ingresa un inicio.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDestino">Destino</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-success text-white"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="inputDestino" placeholder="Destino"
                                                required>
                                            <div class="invalid-feedback">
                                                Por favor ingresa un destino.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-success float-right">Confirmar Viaje</button>
                                </form>
                            </div>
                            <!-- card viaje -->
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div id="map" class="shadow"></div>
                        <div class="dropdown tema">
                            <button class="btn btn-success dropdown-toggle" data-toggle="dropdown" >
                                <i class="fas fa-palette"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right grupo-botones">
                                <a class="dropdown-item" data-opcion="1" href="#"><span class="mr-2 estilos bg-success"></span>Estilo 1</a>
                                <a class="dropdown-item" data-opcion="2" href="#"><span class="mr-2 estilos bg-light"></span>Estilo 2</a>
                                <a class="dropdown-item" data-opcion="3" href="#"><span class="mr-2 estilos estilo-3"></span>Estilo 3</a>
                                <a class="dropdown-item" data-opcion="4" href="#"><span class="mr-2 estilos estilo-4"></span>Estilo 4</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include "componentes/footer-dashboard.php";?>
</div>

<?php 
    $scripts = [
        "js/mi-viaje.js",
        "js/dashboard.js"
    ];
    include "componentes/footer.php"; 
?>