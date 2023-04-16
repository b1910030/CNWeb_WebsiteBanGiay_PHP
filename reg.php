<?php
require '../ct275_bt/connect.php';
if(isset($_POST['btn-reg'])){
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    if(!empty($username)&&!empty($fullname)&&!empty($password)
    &&!empty($email)&&!empty($address)&&!empty($gender)){
        $sql = "INSERT INTO `users` (`fullname`, `username`,
        `password`, `email`, `address`, `gender`) VALUE('$fullname',
        '$username', '$password', '$email', '$address', '$gender') ";

        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "ssiisi", $username, $fullname, $password, $email,$address, $gender);

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header('location: login.php');
        }
    }else{
        echo "Ban can nhap day du thong tin";
    }
}
?>