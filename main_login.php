<?php
$lte_v = 'v2.4.2';
$lte_path = 'lib/adminlte/';
session_start();
if (isset($_SESSION['username'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>AdminLTE 2 | Inicio de Sesion</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="<?=$lte_path?>bower_components/bootstrap/dist/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?=$lte_path?>bower_components/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="<?=$lte_path?>bower_components/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?=$lte_path?>dist/css/AdminLTE.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?=$lte_path?>plugins/iCheck/square/blue.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    </head>
    <body class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <a href="<?=$lte_path?>index2.html"><b>Admin</b>LTE</a>
            </div>
            <!-- /.login-logo -->
            <div class="login-box-body">
                <!-- <p class="login-box-msg">Sign in to start your session</p>-->

                <form class="form-signin" name="form1" method="post" action="checklogin.php">
                <h2 class="form-signin-heading" align="center">Por favor inicie sesion</h2>
                  <div class="form-group has-feedback">
                      <input type="text" name="myusername" id="myusername" class="form-control" placeholder="Usuario" autofocus>
                      <span class="glyphicon glyphicon-user form-control-feedback"></span>
                  </div>
                  <div class="form-group has-feedback">
                      <input type="password" name="mypassword" id="mypassword" class="form-control" placeholder="Contrasenha">
                      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                  </div>

                <button type="submit" id="submit" name="Submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesion</button>

                <div id="message"></div>
                </form>
                <!-- TODO: social
                <div class="social-auth-links text-center">
                    <p>- OR -</p>
                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
                </div>
                --><!-- /.social-auth-links -->

                <a href="#">Olvide mi contrasenha</a><br>
                <a href="register.html" class="text-center">Registrar nuevo usuario</a>
            </div>
            <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?=$lte_path?>bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?=$lte_path?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck
    <script src="<?=$lte_path?>plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script> -->
    <!-- The AJAX login script -->
    <script src="dist/js/login.js"></script>

    </body>
</html>
