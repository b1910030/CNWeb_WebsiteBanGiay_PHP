<?php
    require '../ct275_bt/connect.php';
    if(isset($_POST['btn-log'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $db= mysqli_connect("localhost", "root", "", "ct275_bt");

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
        $user = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($user);

        if(mysqli_num_rows($user) > 0){
            if($row['role'] == 1){
                header("location: product_list.php") ;
            }
            if($row['role'] == 0){
                header("location: index1.php") ;
            }
            
        }else{
            header("location: login.php") ;
            
        }
    }
?>