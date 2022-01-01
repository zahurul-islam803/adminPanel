<?php 
session_start();
require 'db.php';

$errors = [];
$field_names = ['name'=>'Name Required', 'email'=>'Email Required','password'=>'Password Rerquired'];

foreach($field_names as $field_name => $message){
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $message;
    }
    else if(empty($_POST[$field_name])){
        $errors [$field_name] = $message;
    }
    else if(empty($_POST[$field_name])){
        $errors [$field_name] = $message;
    }
}
if(count($errors)==0){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $designation = $_POST['designation'];
    $after_hash = password_hash($password, PASSWORD_DEFAULT);
    date_default_timezone_set('Asia/Dhaka');
    $created_at = date ('d-m-y h:i:s a');
    $country =$_POST['country'];
    $role =$_POST['role'];

    $select_admins = "SELECT COUNT(*) as email_exist FROM admins WHERE email='$email'";
    $select_admins_result = mysqli_query($db_connect, $select_admins);
    $after_assoc = mysqli_fetch_assoc($select_admins_result);

    if($after_assoc['email_exist']==0){
       
        $uploaded_file = $_FILES['profile_image'];
        $after_explode = explode('.', $uploaded_file['name']);
        $extension = end($after_explode);
       $allowed = array('jpg', 'jpeg', 'png', 'webp', 'gif');
       if(in_array($extension, $allowed)){
         if($uploaded_file['size']<5000000){
           
        $insert = "INSERT INTO admins(name,email,password,designation,country,created_at,role)VALUES('$name','$email', '$after_hash', '$designation', '$country', '$created_at', '$role')";
        $insert_result = mysqli_query($db_connect,$insert);

        $admin_id = mysqli_insert_id($db_connect);
        $file_name = $admin_id.'.'.$extension;
        $new_location = '../uploads/admins/'.$file_name;
        move_uploaded_file($uploaded_file['tmp_name'], $new_location);

        $update_admin = "UPDATE admins SET profile_photo='$file_name' WHERE id=$admin_id";
        $update_admin_result = mysqli_query($db_connect, $update_admin);

        $_SESSION['success'] = 'Registerd Successfully!';
        header('location:register.php');
         }
         else{
          echo 'File Size Maximum 5 Mb';
         }
       }
       else{
         echo 'Invalid Extension';
       }
            
    }
    else{
        $_SESSION['email_exist'] = 'Email Allready Exist!';
        header('location:register.php');
    }

    }
    else{
    $_SESSION['errors'] = $errors;
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header('location:register.php');
    }
    ?>