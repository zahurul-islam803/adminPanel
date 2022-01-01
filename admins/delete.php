
<?php
session_start();
require 'db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM admins WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc($select_img_result);
$delete_from = '../uploads/admins/'.$after_assoc['profile_photo'];
unlink($delete_from);

$delete_admin = "DELETE FROM admins WHERE id=$id";
$delete_admin_result = mysqli_query($db_connect, $delete_admin);
$_SESSION['delete_admin'] = 'User Deleted Successfully!';
header('location:admins.php');

?>