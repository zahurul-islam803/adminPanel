<?php
require '../admins/db.php';

$id = $_GET['id'];

$select_image = "SELECT * FROM images WHERE id=$id";
$select_image_result = mysqli_query($db_connect, $select_image);
$after_assoc = mysqli_fetch_assoc($select_image_result);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE images SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location:image.php');
}
else{
    $update_status1 = "UPDATE images SET status=0";
    $update_status_result1 = mysqli_query($db_connect, $update_status1);

    $update_status = "UPDATE images SET status=1 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location:image.php');  
}
?>