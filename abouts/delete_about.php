
<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];


$delete_about = "DELETE FROM abouts WHERE id=$id";
$delete_about_result = mysqli_query($db_connect, $delete_about);
$_SESSION['delete_user'] = 'About Deleted Successfully!';
header('location:about.php');

?>