<?php
require '../admins/session_check.php';
require '../dashboard_includes/header.php';

require '../admins/db.php';

$id = $_GET['id'];

$select_education = "SELECT * FROM educations WHERE id=$id";
$select_education_result = mysqli_query($db_connect, $select_education);
$after_assoc = mysqli_fetch_assoc($select_education_result);

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
              <h3 class="text-white">Users Individual Information</h3>
                 </div>
                  <div class="card-body">
                                        
                    <table class="table table-borderd">
                                            
                        <tbody>
                        <tr>
                         <td>Date</td>
                         <td><?=$after_assoc['date']?></td>
                         </tr>

                         <tr>
                         <td>Education Name</td>
                         <td><?=$after_assoc['education_name']?></td>
                         </tr>
                                                
                         <tr>
                         <td>Percentage</td>
                        <td><?=$after_assoc['percentage']?></td>
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

