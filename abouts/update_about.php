<?php
session_start();
require '../admins/db.php';

$id = $_POST['id'];
$description = $_POST['description'];

       
    $update_about = "UPDATE abouts SET description='$description' WHERE id=$id";
    $update_about_result = mysqli_query($db_connect, $update_about);

    $_SESSION['update_user'] = 'About Updated!';
    header('location:edit_about.php?id='.$id);
   
?>