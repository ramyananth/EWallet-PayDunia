<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ewallet";
$b=$_POST['bal'];
$bal=null;
$name=null;
$n=$_POST['name'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql1 = "select * from users";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if ($row['name'] == $n) {
            $bal = $row['bal'];
            $name=$row['name'];
        }
    }
} else {
    echo "else";
    $url="Location:index.php?id=error&name=$name";
    header($url);
}
$b=$b+$bal;
echo $bal;
$sql = "UPDATE users SET bal=$b WHERE name='$n'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    $url="Location:dashboard.php?id=successs&name=$name";
   header($url);
} else {
    $url="Location:index.php?id=error&name=$name";
    header($url);
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>