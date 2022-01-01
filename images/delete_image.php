
<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$select_img = "SELECT * FROM images WHERE id=$id";
$select_img_result = mysqli_query($db_connect, $select_img);
$after_assoc = mysqli_fetch_assoc($select_img_result);
$delete_from = '../uploads/images/'.$after_assoc['image'];
unlink($delete_from);

$delete_image = "DELETE FROM images WHERE id=$id";
$delete_image_result = mysqli_query($db_connect, $delete_image);
$_SESSION['delete_user'] = 'Image Deleted Successfully!';
header('location:image.php');

?>