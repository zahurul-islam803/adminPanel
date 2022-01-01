<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$select_portfolio = "SELECT * FROM portfolios WHERE id=$id";
$select_portfolio_result = mysqli_query($db_connect, $select_portfolio);
$after_assoc = mysqli_fetch_assoc($select_portfolio_result);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE portfolios SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location:portfolios.php');
}
else{

    $count_portfolio = "SELECT COUNT(*) as total_active FROM portfolios WHERE status=1";
    $count_portfolio_result = mysqli_query($db_connect, $count_portfolio);
    $after_count_assoc = mysqli_fetch_assoc($count_portfolio_result);
    if($after_count_assoc['total_active'] == 6) {

    $_SESSION['limit'] = 'You can not active more than 6 Portfolio';
    header('location:portfolios.php');
    }
    else{

        $update_status = "UPDATE portfolios SET status=1 WHERE id=$id";
        $update_status_result = mysqli_query($db_connect, $update_status);
        header('location:portfolios.php'); 
    }
     
}
?>