<?php
session_start();
require '../admins/db.php';

$date = $_POST['date'];
$education_name = $_POST['education_name'];
$percentage = $_POST['percentage'];

$insert_education = "INSERT INTO educations(date, education_name, percentage)VALUES('$date', '$education_name', '$percentage')";
$insert_education_result = mysqli_query($db_connect, $insert_education);

$_SESSION['add_education'] = 'Education Added Successfully!';
header('location:add_education.php');

?>