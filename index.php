<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sistem Penentuan Jurusan dengan Fuzzy Tsukamoto</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<?php
include 'koneksi.php';
if (isset($_POST['login'])) {
    session_start();
    $email  = $_POST['email'];
    $pass  = ($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM data_user WHERE email = '$email' AND password = '$pass'");
    $cek   = mysqli_num_rows($query);



    if ($cek > 0) {
        $data  = mysqli_fetch_assoc($query);
        if ($data['role'] == 'admin') {
            $_SESSION['akses']    = 'Login';
            $_SESSION['id']       = $data['id_user'];
            $_SESSION['email']     = $data['email'];
            echo "<script>alert('Selamat Datang, anda login sebagai Admin');window.location='admin/index.php'</script>";
        } else if ($data['role'] == 'mahasiswa') {
            $_SESSION['akses']    = 'Login';
            $_SESSION['id']       = $data['id_user'];
            $_SESSION['email']     = $data['email'];
            echo "<script>alert('Selamat Datang, anda login sebagai Mahasiswa');window.location='admin/index.php'</script>";
        }
    } else {
        echo "<script>alert('Periksa Email dan Password Anda');window.location='index.php'</script>";
    }
}
?>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>FUZZY TSUKAMOTO</b></a>
            <small>Sistem Penentuan Jurusan</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" name="login" id="login">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
</body>

</html>