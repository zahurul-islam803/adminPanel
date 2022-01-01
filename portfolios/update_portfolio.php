<?php
session_start();
require '../admins/db.php';

$id = $_POST['id'];
$description = $_POST['description'];


      
$update_portfolio = "UPDATE portfolios SET description='$description' WHERE id=$id";
$update_portfolio_result = mysqli_query($db_connect, $update_portfolio);

$_SESSION['update_user'] = 'Portfolio Updated!';
header('location:edit_portfolio.php?id='.$id);
   
  
?>