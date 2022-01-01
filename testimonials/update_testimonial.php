<?php
session_start();
require '../admins/db.php';

$id = $_POST['id'];
$description = $_POST['description'];
$name = $_POST['name'];
$designation = $_POST['designation'];


if($_FILES['image']['name'] != ''){

    $uploaded_file = $_FILES['image'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extension = array('jpg', 'jpeg', 'png', 'webp', 'gif');

    if(in_array($extension, $allowed_extension)){
      if($uploaded_file['size'] < 5000000) {
        $select_img = "SELECT * FROM testimonials WHERE id=$id";
        $select_img_result = mysqli_query($db_connect, $select_img);
        $after_assoc = mysqli_fetch_assoc($select_img_result);

        $delete_from = '../uploads/testimonials/'.$after_assoc['image'];
        unlink($delete_from);
      
        $update_testimonial = "UPDATE testimonials SET description='$description', name='$name', designation='$designation' WHERE id=$id";
        $update_testimonial_result = mysqli_query($db_connect, $update_testimonial);
    
        $file_name = $id.'.'.$extension;
          $new_location = '../uploads/testimonials/'.$file_name;
          move_uploaded_file($uploaded_file['tmp_name'], $new_location);
          
          $update_image = "UPDATE testimonials SET image='$file_name' WHERE id=$id";
          $update_image_result = mysqli_query($db_connect, $update_image);

        $_SESSION['update_user'] = 'Testimonial Updated!';
        header('location:edit_testimonial.php?id='.$id);
    }
      else{
          $_SESSION['file_size'] = 'File Maximum 5 Mb!';
          header('location:edit_testimonial.php?id='.$id); 
      }
      }
      else{
          $_SESSION['extension'] = 'Invalid Extension!';
          header('location:edit_testimonial.php?id='.$id);
      }
    }
  
    else{

      $update_testimonial = "UPDATE testimonials SET description='$description', name='$name', designation='$designation' WHERE id=$id";
      $update_testimonial_result = mysqli_query($db_connect, $update_testimonial);
      
      $_SESSION['update_user'] = 'Testimonial Updated!';
      header('location:edit_testimonial.php?id='.$id);
    }
  
?>