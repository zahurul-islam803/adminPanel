<?php
session_start();
require '../admins/db.php';

$admin_id = $_POST['admin_id'];
$description = $_POST['description'];


$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'gif', 'webp');
if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size'] <= 5000000){
        $insert_portfolio = "INSERT INTO portfolios(admin_id,description)VALUES('$admin_id', '$description')";
        $insert_portfolio_result = mysqli_query($db_connect, $insert_portfolio);
        $id = mysqli_insert_id($db_connect);
        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/portfolios/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update_image = "UPDATE portfolios SET image='$file_name' WHERE id=$id";
        $update_image_result = mysqli_query($db_connect, $update_image);

        $_SESSION['add_portfolio'] = 'Portfolio Added Successfully!';
        header('location:add_portfolio.php');

    }
    else{
    $_SESSION['size'] = 'Maximum File Size 5 MB';
    header('location:add_portfolio.php');
   } 
}

else{
    $_SESSION['invalid_extension'] = 'Image Type Should Be (jpg, jpeg, png, gif, webp)';
    header('location:add_portfolio.php');
}

?>