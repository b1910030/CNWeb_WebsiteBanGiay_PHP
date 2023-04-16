<?php
// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ct275_bt";

$conn = mysqli_connect("localhost", "root", "", "ct275_bt");

if($conn === false){
    die("Kết nối không thành công:". mysqli_connect_error());
}
?>