<?php
session_start();
require 'db.php';
$id = $_GET['id'];

$update_admin = "UPDATE admins SET status=1 WHERE id=$id";
$update_admin_result = mysqli_query($db_connect, $update_admin);

$_SESSION['soft_del'] = "Admin Soft Deleted!";
header('location:admins.php');

?>