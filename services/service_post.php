<?php
session_start();
require '../admins/db.php';

$icon = $_POST['icon'];
$title = $_POST['title'];
$description = $_POST['description'];



        $insert_service = "INSERT INTO services(icon, title, description)VALUES('$icon', '$title', '$description')";
        $insert_service_result = mysqli_query($db_connect, $insert_service);
       

        $_SESSION['success'] = 'Service Added Successfully!';
        header('location:add_service.php');


?>