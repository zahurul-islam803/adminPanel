<?php 
session_start();
require '../dashboard_includes/header.php';
require 'db.php';

$select_message = "SELECT * FROM messages";
$select_message_result = mysqli_query($db_connect, $select_message);
?>

<!-- ########## START: MAIN PANEL ########## -->
 <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Dashboard</a>
        
      </nav>

      <div class="sl-pagebody">
        <div class="card">
            <div class="card-header">
                <h3>Messages</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                  <tr>
                      <th>SL</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Messages</th>
                      <th>Action</th>
                  </tr>
                  <?php foreach($select_message_result as $key=>$message){ ?>
                  <tr>
                      <td><?=$key+1?></td>
                      <td><?=$message['name']?></td>
                      <td><?=$message['email']?></td>
                      <td><?=$message['message']?></td>
                      <td>
                          <a href="delete_inbox.php?id=<?=$message['id']?>" class="btn btn-danger">Delete</a>
                      </td>
                  </tr>
                  <?php } ?>
                </table>
            </div>
        </div>
         
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


<?php 
require '../dashboard_includes/footer.php'; 
?>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
 $('.click').click(function(){
        Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
     window.location.href=$(this).attr('id');
    }
    })
 });
 </script>
 <?php if(isset($_SESSION['delete_inbox'])) {?>
<script>
     swal.fire(
     'Deleted!',
     'Your file has been deleted.',
     'success'
 )
</script>
<?php } unset($_SESSION['delete_inbox'])?>