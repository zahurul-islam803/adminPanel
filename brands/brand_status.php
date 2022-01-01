<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$select_brands = "SELECT * FROM brands WHERE id=$id";
$select_brands_result = mysqli_query($db_connect, $select_brands);
$after_assoc = mysqli_fetch_assoc($select_brands_result);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE brands SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location:brand.php');
}
else{

    $count_brands = "SELECT COUNT(*) as total_active FROM brands WHERE status=1";
    $count_brands_result = mysqli_query($db_connect, $count_brands);
    $after_count_assoc = mysqli_fetch_assoc($count_brands_result);
    if($after_count_assoc['total_active'] == 6) {

    $_SESSION['limit'] = 'You can not active more than 5 brands';
    header('location:brand.php');
    }
    else{

        $update_status = "UPDATE brands SET status=1 WHERE id=$id";
        $update_status_result = mysqli_query($db_connect, $update_status);
        header('location:brand.php'); 
    }
     
}
?>