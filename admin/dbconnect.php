<?php
$connect = mysqli_connect("localhost", "root", "", "sbobet");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>