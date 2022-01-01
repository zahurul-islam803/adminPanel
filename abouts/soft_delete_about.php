<?php
session_start();
require '../admins/db.php';
$id = $_GET['id'];

$update_about = "UPDATE abouts SET status=1 WHERE id=$id";
$update_about_result = mysqli_query($db_connect, $update_about);

$_SESSION['soft_del'] = "About Soft Deleted!";
header('location:about.php');

?>