<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ewallet";
$n=null;
$c=null;
$b=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    $url="Location:index.php?id=errorp";
    header($url);
}
$id=$_GET['name'];
$sql = "select * from users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row['name'] == $id) {
            $n = $row['mobile'];
            $c = $row['creditcard'];
            $b = $row['bal'];
        }
    }
} else {
    echo "else";
    $url="Location:index.php?id=errorp";
   # header($url);
}
?>
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
<body>
<br>

<div class="row" style="background-color: #FFC107;">
    <div class="col-md-6 col-lg-offset-1" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <a href="#" class="navbar-brand" style="color: #fff; margin: -0% 0 0 0;font-size: 35px;"><b><i>Pay Dunia - Dashboard</i></b></a>
    </div>

</div>
<div class="row">
    <div class="col-lg-3 col-lg-offset-1 " style="color: #fff;background-color: #0091EA;">
        <h1 ><i>Account</i></h1>
        <form action="signin.php" method="post">
            <div class="form-group">
                <label>Pay Dunia ID</label>
                <input type="text" class="form-control " name="username" id="username" PLACEHOLDER="" value="<?php echo $n;?>" readonly>
            </div>
            <div class="form-group">
                <label>Use the above ID to receive money</label>
                <br>
                <a href="index.php?id=success" style="color: white;">Log Out</a>
            </div>

        </form>
    </div>
    <div class="col-lg-4 bg-green-active " style="color:#fff;">
        <h1 ><i>Pay</i></h1>
        <form action="pay.php" method="post">
            <div class="form-group">
                <label>Pay Dunia ID of the Party</label>
                <input type="text" class="form-control " name="username" id="username1" PLACEHOLDER="Username" required>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control " name="mobile" id="mobile" value="<?php  echo $n;?>" required readonly PLACEHOLDER="Mobile">
            </div>
            <div class="form-group">
                <label>Amount</label>
                <input type="text" class="form-control " name="amt" id="amt"  PLACEHOLDER="Amount in Rs." required>
            </div>
            <div class="form-group">
                <label>Balance</label>
                <input type="text" class="form-control " name="bal" id="bal" value="<?php echo $b;?>" required readonly PLACEHOLDER="Mobile">
            </div>
            <div class="form-group">
                <label>Card No</label>
                <input type="text" class="form-control " name="card" id="card" PLACEHOLDER="Card No" required value="<?php echo $c; ?>" readonly>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " name="password" id="password1" required PLACEHOLDER="Password">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn-danger" name="submit" id="submit1" value="Pay" PLACEHOLDER="Username">
            </div>
        </form>
    </div>
    <div class="col-md-3" style="background-color: #0091EA;color: #fff;">
        <h1 ><i>Account Balance : Rs. <?php echo $b; ?> </i></h1>
        <form action="recharge.php" method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control " name="name" required id="name" value="<?php echo $id;?>" readonly >
            </div>
            <div class="form-group">
                <label>Amount</label>
                <input type="text" class="form-control " name="bal" required id="bal" PLACEHOLDER="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control " required name="password" id="password" PLACEHOLDER="Password">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn-danger" name="submit" id="submit" value="Recharge" PLACEHOLDER="Username">
            </div>
        </form>
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
        echo  "<script>swal(\"Error\", \"Recharge Unsuccessful \", \"error\");</script>";
    }
    else if($_GET['id']=="errorp"){
        echo  "<script>swal(\"Error\", \"Pay Unsuccessful\", \"error\");</script>";
    }
    else if($_GET['id']=="successs"){
        echo  "<script>swal(\"Success\", \"Reacharge Success\", \"success\");</script>";
    }
    else if($_GET['id']=="successp"){
        echo  "<script>swal(\"Success\", \"Pay Success\", \"success\");</script>";
    }
}
?>
