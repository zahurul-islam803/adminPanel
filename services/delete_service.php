
<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$delete_service = "DELETE FROM services WHERE id=$id";
$delete_service_result = mysqli_query($db_connect, $delete_service);
$_SESSION['delete_user'] = 'Service Deleted Successfully!';
header('location:service.php');

?>