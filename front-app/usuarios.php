<?php
    $title = "Usuarios";
    $bodyClass = "sidebar-mini layout-navbar-fixed layout-footer-fixed";
    include "componentes/header.php";
    
?>

<div class="wrapper">
    <!-- Navbar -->
    <?php include "componentes/navbar.php";?>
    <?php include "componentes/main-sidebar.php";?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Usuarios</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Usuarios</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row d-flex align-items-stretch">
                        <?php for($i=0; $i <9 ; $i++):?>
                            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
                                <div class="card bg-light">
                                    <div class="card-header text-muted border-bottom-0">
                                        Digital Strategist
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-7">
                                                <h2 class="lead"><b>Nicole Pearson</b></h2>
                                                <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic
                                                    Artist / Coffee Lover </p>
                                                <ul class="ml-4 mb-0 fa-ul text-muted">
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-building"></i></span> Address: Demo
                                                        Street 123, Demo City 04312, NJ</li>
                                                    <li class="small"><span class="fa-li"><i
                                                                class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12
                                                        12 23 52</li>
                                                </ul>
                                            </div>
                                            <div class="col-5 text-center">
                                                <img src="img/user1-128x128.jpg" alt=""
                                                    class="img-circle img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="text-right">
                                            <a href="#" class="btn btn-sm bg-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                            <a href="perfil" class="btn btn-sm btn-primary">
                                                <i class="fas fa-user"></i> Ver perfil
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endfor;?>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <nav aria-label="Contacts Page Navigation">
                        <ul class="pagination justify-content-center m-0">
                            <?php for($i=0; $i < 8 ; $i++):?>
                            <li class="page-item <?= ($i === 0) ? 'active': ''?>"><a class="page-link" href="#"><?= $i+1;?></a></li>
                            <?php endfor;?>
                        </ul>
                    </nav>
                </div>
                <!-- /.card-footer -->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php include "componentes/footer-dashboard.php";?>>
</div>
<?php 
    $scripts = [
        "js/dashboard.js"
    ];
    include "componentes/footer.php"; 
?>