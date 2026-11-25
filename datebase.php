
<?php

$servername = "localhost";
$username = "root";
$password = "Y.a.sin81";
$dbname = "yasin";

$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $dbname
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";

?>