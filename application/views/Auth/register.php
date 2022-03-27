<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
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
    <!--================ Register box =================-->
    <div class="login-box">
        <!--================ Register logo =================-->
        <div class="login-logo">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="fas fa-user"></span><br>
            </div>
            <b>Hotel Hebat</b>
        </div>
        <!--================ Register logo =================-->

        <!--================ Register card body =================-->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Silahkan Daftar</p>
                <form action="<?= base_url('Auth/addusers') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan nama" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-card"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="Jenis_kelamin" class="form-control" placeholder="Masukkan jenis kelamin" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-transgender"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group-append mb-3">
                        <input type="date" name="tgllahir" class="form-control" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="nowa" class="form-control" placeholder="Masukkan kontak" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-address-book"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Masukkan Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-key"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-info btn-block">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form><br>
                <p class="mb-0">
                    <b>Sudah punya akun?</b><a href="<?= base_url('Auth/login') ?>" class="text-center">klik disini!</a>
                </p>
            </div>
        </div>
        <!--================ Register card body =================-->
    </div>
    <!--================ Register box =================-->

    <!-- jQuery -->
    <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
</body>

</html>