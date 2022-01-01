<?php
session_start();
require '../admins/db.php';


$description = $_POST['description'];
$name = $_POST['name'];
$designation = $_POST['designation'];

$uploaded_file = $_FILES['image'];
$after_explode = explode('.', $uploaded_file['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'gif', 'webp');
if(in_array($extension, $allowed_extension)){
    if($uploaded_file['size'] <= 5000000){
        $insert_testimonial = "INSERT INTO testimonials(description, name, designation)VALUES('$description', '$name', '$designation')";
        $insert_testimonial_result = mysqli_query($db_connect, $insert_testimonial);
        $id = mysqli_insert_id($db_connect);
        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/testimonials/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        $update_image = "UPDATE testimonials SET image='$file_name' WHERE id=$id";
        $update_image_result = mysqli_query($db_connect, $update_image);


        $_SESSION['add_testimonial'] = 'Testimonial Added Successfully!';
        header('location:add_testimonial.php');

    }
    else{
    $_SESSION['size'] = 'Maximum File Size 5 MB';
    header('location:add_testimonial.php');
   } 
}

else{
    $_SESSION['invalid_extension'] = 'Image Type Should Be (jpg, jpeg, png, gif, webp)';
    header('location:add_testimonial.php');
}

?>