
<?php
require 'session_check.php';
require '../dashboard_includes/header.php';

require 'db.php';

$select_trash_admins = "SELECT * FROM admins WHERE status=1";
$select_trash_admins_result = mysqli_query($db_connect, $select_trash_admins);
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
      </nav>

      <div class="sl-pagebody">

        <div class="row">
            <div class="col-lg-10 m-auto">
               
                <div class="card mt-5">
                    <div class="card-header bg-secondary text-center">
                        <h3 class="text-white">Trash
                     </h3>                        
                    </div>                  
                <?php if(isset($_SESSION['delete_admin'])){ ?>
                    <div class="alert alert-success mt-2">
                        <?=$_SESSION['delete_admin']?>
                    </div>
                    <?php } unset($_SESSION['delete_admin'])?>
                    
                <?php if(isset($_SESSION['restore'])){ ?>
                    <div class="alert alert-success mt-2">
                        <?=$_SESSION['restore']?>
                    </div>
                    <?php } unset($_SESSION['restore'])?>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Designation</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                             <tbody>
                                 <?php foreach($select_trash_admins_result as $key=>$trash_admin) { ?>
                                 <tr>
                                     <th scope="row"><?=$key+1?></th>
                                     <td><?=$trash_admin['name']?></td>
                                     <td><?=$trash_admin['email']?></td>
                                     
                                    <td><?=substr($trash_admin['designation'], 0, 50)?></td>
                                   
                                     <td><img width="50" src="../uploads/admins/<?=$trash_admin['profile_photo']?>" alt=""></td>
                                     <td><?=$trash_admin['created_at']?></td>
                                     <td>
                                                          
                                    <a href="restore.php?id=<?=$trash_admin['id']?>" class="btn btn-info">Restore</a>              
                                    <a data-bs-toggle="modal" data-bs-target="#mod<?=$trash_admin['id']?>" class="btn btn-danger">Delete</a>
                                 </td> 
                                </tr>
                                <!-- Modal -->
                                <div class="modal fade" id="mod<?=$trash_admin['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                        <a  href="delete.php?id=<?=$trash_admin['id']?>" class="btn btn-danger">Yes Delete</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                 <?php } ?>
                             </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php require '../dashboard_includes/footer.php'; ?>