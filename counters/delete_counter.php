
<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$delete_counter = "DELETE FROM counters WHERE id=$id";
$delete_counter_result = mysqli_query($db_connect, $delete_counter);
$_SESSION['delete_user'] = 'Counter Deleted Successfully!';
header('location:counter.php');

?>