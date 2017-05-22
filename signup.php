<?php
$name  = md5($_POST['username']);
$pwd = md5($_POST['password']);
$card = $_POST['card'];
$mobile = $_POST['mobile'];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ewallet";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users 
VALUES ('$name', '$mobile', '$card',0.0,'$pwd')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    $url="Location:dashboard.php?name=$name";
    header($url);
} else {
    header('Location:index.php?id=error');
}

$conn->close();
?>