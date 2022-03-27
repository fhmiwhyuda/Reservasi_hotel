<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
</head>

<body class="hold-transition login-page">
    <!--================ Login box =================-->
    <div class="login-box">

        <!--================ Login logo =================-->
        <div class="login-logo">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="fas fa-user"></span><br>
            </div>
            <b>Hotel Hebat</b>
        </div>
        <!--================ Login logo =================-->

        <!--================ Login card body =================-->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Login Terlebih Dahulu</p>
                <form action="<?= base_url('Auth/checkusers') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form><br>
                <p class="mb-0">
                    <b>Belum punya akun?</b><a href="<?= base_url('Auth/register') ?>" class="text-center">klik disini!</a>
                </p>
            </div>
        </div>
        <!--================ Login card body =================-->
    </div>
    <!--================ Login box =================-->

    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>