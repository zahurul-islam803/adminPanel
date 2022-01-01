
<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$delete_education = "DELETE FROM educations WHERE id=$id";
$delete_education_result = mysqli_query($db_connect, $delete_education);
$_SESSION['delete_user'] = 'Education Deleted Successfully!';
header('location:education.php');

?>