<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$select_educations = "SELECT * FROM educations WHERE id=$id";
$select_educations_result = mysqli_query($db_connect, $select_educations);
$after_assoc = mysqli_fetch_assoc($select_educations_result);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE educations SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location:education.php');
}
else{

    $count_educations = "SELECT COUNT(*) as total_active FROM educations WHERE status=1";
    $count_educations_result = mysqli_query($db_connect, $count_educations);
    $after_count_assoc = mysqli_fetch_assoc($count_educations_result);
    if($after_count_assoc['total_active'] == 4) {

    $_SESSION['limit'] = 'You can not active more than 4 educations';
    header('location:education.php');
    }
    else{

        $update_status = "UPDATE educations SET status=1 WHERE id=$id";
        $update_status_result = mysqli_query($db_connect, $update_status);
        header('location:education.php'); 
    }
     
}
?>