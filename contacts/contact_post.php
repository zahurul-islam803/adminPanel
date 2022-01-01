<?php
session_start();
require '../admins/db.php';

$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$description = $_POST['description'];



$insert_contact = "INSERT INTO contacts(address, phone, email, description)VALUES('$address', '$phone', '$email', '$description')";
$insert_contact_result = mysqli_query($db_connect, $insert_contact);


$_SESSION['success'] = 'Contact Added Successfully!';
header('location:add_contact.php');


?>