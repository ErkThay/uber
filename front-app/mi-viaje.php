<?php
    $title = "Mi viaje";
    $bodyClass = "sidebar-mini";
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
                    <div class="col-md-4">
                        <h1 class="h4">Tiempo: <span class="tiempo">0</span></h1>
                    </div>
                    <div class="col-md-4">
                        <h1 class="h4">Distancia: <span class="distancia">0</span> </h1>
                    </div>
                    <div class="col-md-4">
                        <h1 class="h4">Tarifa a pagar: <span class="tarifa-pagar">0</span> </h1>
                    </div>
                    <div class="col-md-4 order-2 order-lg-1 order-xl-1">
                        <div class="card card-primary altura-card shadow">
                            <div class="card-header">
                                <h3 class="card-title">¿A dónde vas?</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="inputOrigen">Origen</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="inputOrigen"
                                                placeholder="Origen">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDestino">Destino</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i
                                                        class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="inputDestino"
                                                placeholder="Destino">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right confirmar-viaje">Confirmar
                                        Viaje</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-8 order-1 order-lg-2 order-xl-2">
                        <div id="map" class="shadow"></div>
                        <div class="btn-group row col-md-12 border grupo-botones" role="group" aria-label="Basic example">
                            <button type="button" data-opcion="1" class="btn border btn-success">Estilo 1</button>
                            <button type="button" data-opcion="2" class="btn border btn-light">Estilo 2</button>
                            <button type="button" data-opcion="3" class="btn border btn-dark">Estilo 3</button>
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
