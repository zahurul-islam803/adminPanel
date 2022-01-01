<?php
session_start();
require 'db.php';
$id = $_GET['id'];

$update_admin = "UPDATE admins SET status=0 WHERE id=$id";
$update_admin_result = mysqli_query($db_connect, $update_admin);

$_SESSION['restore'] = "Admin Restored Successfully!";
header('location:admins.php');

?>