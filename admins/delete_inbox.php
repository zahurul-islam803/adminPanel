<?php
session_start();
require 'db.php';

$id = $_GET['id'];
$delete_inbox = "DELETE FROM messages WHERE id=$id";
$delete_inbox_result = mysqli_query($db_connect, $delete_inbox);
$_SESSION['delete_inbox'] = 'Inbox Deleted Successfully!';
header('location:inbox.php');

?>