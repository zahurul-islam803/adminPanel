<?php
session_start();
require '../admins/db.php';

$id = $_POST['id'];
$icon = $_POST['icon'];
$title = $_POST['title'];
$description = $_POST['description'];


  
          $update_service = "UPDATE services SET icon='$icon', title='$title', description='$description' WHERE id=$id";
          $update_service_result = mysqli_query($db_connect, $update_service);
      
       

          $_SESSION['update_user'] = 'Service Updated!';
          header('location:edit_service.php?id='.$id);
  

?>