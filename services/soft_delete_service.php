<?php
session_start();
require '../admins/db.php';
$id = $_GET['id'];

$update_service = "UPDATE services SET status=1 WHERE id=$id";
$update_service_result = mysqli_query($db_connect, $update_service);

$_SESSION['soft_del'] = "Service Soft Deleted!";
header('location:service.php');

?>