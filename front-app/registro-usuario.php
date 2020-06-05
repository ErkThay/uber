<?php
    $title = "Registrar Cuenta";
    $bodyClass = "register-page";
    include "componentes/header.php"; 
?>
    <div id="notifications"></div>
    <div class="register-box">
        <div class="register-logo">
            <a ><b>Clone</b> Uber</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registrar un nuevo usuario</p>

                <form class="needs-validation" novalidate>
                    <div class="input-group mb-3">
                        <input type="text"  name="name" class="form-control" placeholder="Nombre" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            agrega un nombre
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" name="email"  class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            agrega un correo
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password"  name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        <div class="invalid-feedback">
                            agrega un password
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="form-group">
                                <div class="icheck-primary">
                                    <input class="form-check-input" type="checkbox" id="agreeTerms" name="terms" value="" required >
                                    <label class="form-check-label" for="agreeTerms">
                                        Aceptar <a href="#">terminos</a>
                                    </label>
                                    <div class="invalid-feedback">
                                        acepta los terminos
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button  class="btn btn-primary btn-block">Registrar</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <!-- <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i>
                        Sign up using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i>
                        Sign up using Google+
                    </a>
                </div> -->

                <a href="index.php" class="text-center">Ya tengo cuenta</a>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
    <?php 

        $scripts = [
            "js/registar-usuario.js"
        ];
        include "componentes/footer.php"; 
    
    ?>