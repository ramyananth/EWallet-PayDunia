<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pay Dunia!</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
    <link rel="stylesheet" href="dist/sweetalert-master/dist/sweetalert.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script srdc="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="bg-blue-active ">
<br>

<div class="row" style="background-color: #FFC107;">
    <div class="col-md-6 col-lg-offset-1" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <a href="#" class="navbar-brand" style="color: #fff; margin: -0% 0 0 0;font-size: 35px;"><b><i>Pay Dunia</i></b></a>
    </div>

</div>
<div class="row">
    <div class="col-lg-3 col-lg-offset-1 " style="color: #fff;background-color: #0091EA;">
        <h1 ><i>Sign In</i></h1>
        <form action="signin.php" method="post">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control " name="username" id="username" PLACEHOLDER="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " name="password" id="password" PLACEHOLDER="Password">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn-bitbucket" name="submit" id="submit" value="Sign In" PLACEHOLDER="Username">
            </div>
        </form>
    </div>
    <div class="col-lg-4 " style="background-color: #FFC107;color:#1A237E;">
        <h1 ><i>Sign Up with Us..</i></h1>
        <form action="signup.php" method="post">
            <div class="form-group">
                <label>User Name</label>
                <input type="text" class="form-control " name="username" id="username1" PLACEHOLDER="Username">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control " name="mobile" id="mobile" PLACEHOLDER="Mobile">
            </div>
            <div class="form-group">
                <label>Card No</label>
                <input type="text" class="form-control " name="card" id="card" PLACEHOLDER="Card No">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " name="password" id="password1" PLACEHOLDER="Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control " name="confirmpassword" id="cofirmpassword" PLACEHOLDER="Confirm Password">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn-bitbucket" name="submit" id="submit1" value="Sign In" PLACEHOLDER="Username">
            </div>
        </form>
    </div>
    <div class="col-md-3" style="background-color: #0091EA;">
        <div class="row">

            <h1 style="margin: 5% 0 0 5%;" ><i>We are </i></h1>

        <div class="col-md-4 ">
            <h1 ><i class="fa fa-shield" style="font-size: 75px" aria-hidden="true"></i></h1>
        </div>
        <div class="col-md-4 ">
            <h1 ><i class="fa fa-unlink (alias)" style="font-size: 75px" aria-hidden="true"></i></h1>
        </div>
        <div class="col-md-4 ">
            <h1 ><i class="fa  fa-fighter-jet" style="font-size: 75px" aria-hidden="true"></i></h1>
        </div>
        </div>
        <div class="row">

            <div class="col-md-4 ">
                <h3>Secure</h3>
            </div>
            <div class="col-md-4 ">
                <h3>Private</h3>
            </div>
            <div class="col-md-4 ">
                <h3 >Fast</h3>
            </div>
        </div>
    </div>
</div>
</body>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script src="dist/sweetalert-master/dist/sweetalert-dev.js"></script>
</html>
<?php
if($_GET['id']!=""){
if($_GET['id']=="error"){
    echo  "<script>swal(\"Error\", \"The User Already Exists\", \"error\");</script>";
}
    else if($_GET['id']=="errorp"){
        echo  "<script>swal(\"Error\", \"Username or Password Incorrect!\", \"error\");</script>";
    }
}
?>