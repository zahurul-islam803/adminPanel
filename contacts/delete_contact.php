
<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$delete_contact = "DELETE FROM contacts WHERE id=$id";
$delete_contact_result = mysqli_query($db_connect, $delete_contact);
$_SESSION['delete_user'] = 'Contact Deleted Successfully!';
header('location:contacts.php');

?>