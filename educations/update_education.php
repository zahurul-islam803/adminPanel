<?php
session_start();
require '../admins/db.php';

$id = $_POST['id'];
$date = $_POST['date'];
$education_name = $_POST['education_name'];
$percentage = $_POST['percentage'];

      
    $update_education = "UPDATE educations SET date='$date', education_name='$education_name', percentage='$percentage' WHERE id=$id";
    $update_education_result = mysqli_query($db_connect, $update_education);
   
    $_SESSION['update_user'] = 'Education Updated!';
    header('location:edit_education.php?id='.$id);
   
  
?>