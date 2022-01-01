<?php 
session_start();
require '../dashboard_includes/header.php';
require '../admins/db.php';
$select_admin = "SELECT * FROM admins";
$select_admin_result = mysqli_query($db_connect, $select_admin);

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Portfolio</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Portfolio</h5>
                      </div>

                      <div class="card-body">
                          <form action="portfolio_post.php" method="POST" enctype="multipart/form-data">
                          <div class="form-group">                                 
                                  <input type="hidden" class="form-control" name="id" value="<?=(isset($_SESSION['id']))?$_SESSION['id']:'' ?>">
                              </div>
                          <div class="form-group">
                                 <select name="admin_id" class="form-control">
                                     <option value="">-- Select User --</option>
                                      <?php foreach($select_admin_result as $admin) { ?>
                                     <option value="<?=$admin['id']?>"><?=$admin['name']?></option>
                                     <?php } ?>
                                 </select>
                              </div>
                              <div class="form-group">
                                  <label for="">Image</label>
                                  <input type="file" class="form-control" name="image">
                              </div>
                              <div class="form-group">
                                  <label for="">Description</label>
                                  <textarea name="description" class="form-control"></textarea>
                              </div>
                             
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Portfolio</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
 </div>
</div>

<?php 
require '../dashboard_includes/footer.php';

?>


    <?php if(isset($_SESSION['add_portfolio'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['add_portfolio']?>',
  
})
    </script>
    <?php } unset($_SESSION['add_portfolio'])?>