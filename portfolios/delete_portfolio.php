
<?php
session_start();
require '../admins/db.php';

$id = $_GET['id'];

$delete_portfolio = "DELETE FROM portfolios WHERE id=$id";
$delete_portfolio_result = mysqli_query($db_connect, $delete_portfolio);
$_SESSION['delete_user'] = 'Portfolio Deleted Successfully!';
header('location:portfolios.php');

?>