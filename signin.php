<?php
$name  = md5($_POST['username']);
$pwd = md5($_POST['password']);
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

$sql = "select * from users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['name']." ".$name."\n";
        echo $row['password']." ".$pwd."\n";
        if($row['name']==$name && $row['password']==$pwd) {
            $url = "Location:dashboard.php?name=$name";
            echo "if";
            header($url);
        }
    }
} else {
    echo "else";
    $url="Location:index.php?id=errorp";
   header($url);
}
$url="Location:index.php?id=errorp";
#header($url);
$conn->close();
?>