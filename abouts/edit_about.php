<?php
require '../admins/session_check.php';
require '../dashboard_includes/header.php';

require '../admins/db.php';


$id = $_GET['id'];
$select_about = "SELECT * FROM abouts WHERE id=$id";
$select_about_result = mysqli_query($db_connect, $select_about);
$after_assoc = mysqli_fetch_assoc($select_about_result);
?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">


        <div class="row">
            <div class="col-lg-6 m-auto">
              <div class="card">
                  <div class="card-header bg-primary text-center">
                      <h3 class="text-white">Edit About Information</h3>
                  </div>
                  <?php if(isset($_SESSION['update_user'])){ ?>
                    <div class="alert alert-success">
                        <?=$_SESSION['update_user'];?>
                    </div>
                    <?php } unset($_SESSION['update_user']);?>
                  <div class="card-body bg-secondary">
                      <form action="update_about.php" method="POST">
                     

                        <div class="mb-3">
                        <input type="hidden" name="id" value="<?=$after_assoc['id']?>">
                            <label for="exampleInputEmail1" class="form-label text-white">Description</label>
                            <textarea name="description" class="form-control"><?=$after_assoc['description']?></textarea>
                        </div>

               
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