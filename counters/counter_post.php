<?php
session_start();
require '../admins/db.php';

$icon = $_POST['icon'];
$number = $_POST['number'];
$name = $_POST['name'];

$insert_counter = "INSERT INTO counters(icon, number, name)VALUES('$icon', '$number', '$name')";
$insert_counter_result = mysqli_query($db_connect, $insert_counter);

$_SESSION['success'] = 'Counter Added Successfully!';
header('location:add_counter.php');

?>