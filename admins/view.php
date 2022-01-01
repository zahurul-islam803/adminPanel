<?php
require 'session_check.php';
require '../dashboard_includes/header.php';

require 'db.php';

$id = $_GET['id'];

$select_admins = "SELECT * FROM admins WHERE id=$id";
$select_admins_result = mysqli_query($db_connect, $select_admins);
$after_assoc = mysqli_fetch_assoc($select_admins_result);

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">

      <div class="row">
      <div class="col-lg-8 m-auto">
          <div class="card">
             <div class="card-header bg-primary text-center">
              <h3 class="text-white">Admins Individual Information</h3>
                 </div>
                  <div class="card-body">
                                        
                    <table class="table table-borderd">
                                            
                        <tbody>
                         <tr>
                         <td>Name</td>
                         <td><?=$after_assoc['name']?></td>
                         </tr>
                                                
                         <tr>
                         <td>Email</td>
                        <td><?=$after_assoc['email']?></td>
                          </tr>
                          <tr>
                         <td>Designation</td>
                        <td><?=$after_assoc['designation']?></td>
                          </tr>
                          <tr>
                         <td>Profile Photo</td>
                         <td><img width="100" src="../uploads/admins/<?=$after_assoc['profile_photo']?>" alt=""></td>
                          </tr>                
                         <tr>
                          <td>Created At</td>
                         <td><?=$after_assoc['created_at']?></td>
                          </tr>                    
                        </tbody>
                           </table>
                            </div>
                             </div>
                        </div>
                           <div>                                                      
                        </div>
                        </div>
  <?php require '../dashboard_includes/footer.php'; ?>

