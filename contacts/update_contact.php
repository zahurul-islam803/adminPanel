<?php
session_start();
require '../admins/db.php';

$id = $_POST['id'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$description = $_POST['description'];


  
$update_contact = "UPDATE contacts SET address='$address', phone='$phone', email='$email',  description='$description' WHERE id=$id";
$update_contact_result = mysqli_query($db_connect, $update_contact);



$_SESSION['update_user'] = 'Contact Updated!';
header('location:edit_contact.php?id='.$id);
  

?>