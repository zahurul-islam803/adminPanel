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
                      <h3 class="text-white">Edit Education Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update_education.php" method="POST">
                           
                      <div class="mb-3">
                      <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">Education Date</label>
                            <input value="<?=$after_assoc['date']?>" type="text" name="date" class="form-control">

                        <div class="mb-3">                            
                            <label for="exampleInputEmail1" class="form-label text-white">Education Name</label>
                            <input value="<?=$after_assoc['education_name']?>" type="text" name="education_name" class="form-control">
                            </div>

                            <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white">Percentage</label>
                            <input value="<?=$after_assoc['percentage']?>" type="text" name="percentage" class="form-control">
                                              
                                              
                         
               
                           <div align="center" class="mt-2">
                             <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                      </form>
                  </div>
                  <form> 
              </div>
            </div>
        </div>
      </div>
    </div>
<?php require '../dashboard_includes/footer.php'; ?>