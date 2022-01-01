<?php
session_start();
require '../admins/db.php';


    $description = mysqli_real_escape_string($db_connect, $_POST['description']);


    $insert_about = "INSERT INTO abouts(description)VALUES('$description')";
    $insert_about_result = mysqli_query($db_connect, $insert_about);
    
    $_SESSION['add_about'] = 'About Added Successfully!';
    header('location:add_about.php');

?>