<?php
session_start();
require 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$designation = $_POST['designation'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if(empty($_POST['password'])){
  if($_FILES['profile_photo']['name'] != ''){

    $uploaded_file = $_FILES['profile_photo'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extension = array('jpg', 'jpeg', 'png', 'webp', 'gif');

    if(in_array($extension, $allowed_extension)){
      if($uploaded_file['size'] < 5000000){
        $select_img = "SELECT * FROM admins WHERE id=$id";
        $select_img_result = mysqli_query($db_connect, $select_img);
        $after_assoc = mysqli_fetch_assoc($select_img_result);

        $delete_from = '../uploads/admins/'.$after_assoc['profile_photo'];
        unlink($delete_from);
    
        $update_admin = "UPDATE admins SET name='$name', email='$email', designation='$designation' WHERE id=$id";
        $update_admin_result = mysqli_query($db_connect, $update_admin);
    
        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/admins/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        
        $update_image = "UPDATE admins SET profile_photo='$file_name' WHERE id=$id";
        $update_image_result = mysqli_query($db_connect, $update_image);

        $_SESSION['update_admin'] = 'Admin Updated!';
        header('location:edit.php?id='.$id);
      }
    else{
        $_SESSION['file_size'] = 'File Size Maximum 5 Mb!';
        header('location:edit.php?id='.$id); 
    }
    }
    else{
        $_SESSION['extension'] = 'Invalid Extension!';
        header('location:edit.php?id='.$id);
    }
  }

  else{

    $update_admin = "UPDATE admins SET name='$name', email='$email', designation='$designation' WHERE id=$id";
    $update_admin_result = mysqli_query($db_connect, $update_admin);
    
    $_SESSION['update_admin'] = 'Admin Updated!';
    header('location:edit.php?id='.$id);
  }
}
else{
  if($_FILES['profile_photo']['name'] != ''){

    $uploaded_file = $_FILES['profile_photo'];
    $after_explode = explode('.', $uploaded_file['name']);
    $extension = end($after_explode);
    $allowed_extension = array('jpg', 'jpeg', 'png', 'webp', 'gif');

    if(in_array($extension, $allowed_extension)){
      if($uploaded_file['size'] < 5000000){
        $select_img = "SELECT * FROM admins WHERE id=$id";
        $select_img_result = mysqli_query($db_connect, $select_img);
        $after_assoc = mysqli_fetch_assoc($select_img_result);

        $delete_from = '../uploads/admins/'.$after_assoc['profile_photo'];
        unlink($delete_from);
    
        $update_admin = "UPDATE admins SET name='$name', email='$email', designation='$designation', password='$password' WHERE id=$id";
        $update_admin_result = mysqli_query($db_connect, $update_admin);
    
        $file_name = $id.'.'.$extension;
        $new_location = '../uploads/admins/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);
        
        $update_image = "UPDATE admins SET profile_photo='$file_name' WHERE id=$id";
        $update_image_result = mysqli_query($db_connect, $update_image);

        $_SESSION['update_admin'] = 'Admin Updated!';
        header('location:edit.php?id='.$id);
      }
    else{
        $_SESSION['file_size'] = 'File Size Maximus 5 Mb!';
        header('location:edit.php?id='.$id); 
    }
    }
    else{
        $_SESSION['extension'] = 'Invalid Extension!';
        header('location:edit.php?id='.$id);
    }
  }

  else{

    $update_admin = "UPDATE admins SET name='$name', email='$email', designation='$designation', password='$password' WHERE id=$id";
    $update_admin_result = mysqli_query($db_connect, $update_admin);
    
    $_SESSION['update_admin'] = 'Admin Updated!';
    header('location:edit.php?id='.$id);
  }
}
    
  
?>