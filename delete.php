<?php
    require '../ct275_bt/connect.php';
    
    $id = $_GET['id'];
    $sql = "DELETE FROM products where prd_id = $id";
    $query = mysqli_query($conn, $sql);
    header('location: product_list.php');
?>