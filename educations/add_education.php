<?php 
session_start();
require '../dashboard_includes/header.php';

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Education</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Education</h5>
                      </div>

                      <div class="card-body">
                          <form action="education_post.php" method="POST">
                             
                          <div class="form-group">
                                  <label for="">Education Date</label>
                                  <input type="text" class="form-control" name="date">
                              </div>
                              <div class="form-group">
                                  <label for="">Education Name</label>
                                  <input type="text" class="form-control" name="education_name">
                              </div>
                              <div class="form-group">
                                  <label for="">Education Percentage</label>
                                  <input type="text" class="form-control" name="percentage">
                              </div>
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Education</button>
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


    <?php if(isset($_SESSION['add_education'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['add_education']?>',
  
})
    </script>
    <?php } unset($_SESSION['add_education'])?>