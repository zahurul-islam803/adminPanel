<?php 
session_start();
require '../dashboard_includes/header.php';

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Counter</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Counter</h5>
                      </div>

                      <div class="card-body">
                          <form action="counter_post.php" method="POST">
                             
                              <div class="form-group">
                                  <label for="">Counter Icon</label>
                                  <input type="text" class="form-control" name="icon">
                              </div>
                              <div class="form-group">
                                  <label for="">Number</label>
                                  <input type="number" class="form-control" name="number">
                              </div>
                              <div class="form-group">
                                  <label for="">Topic Name</label>
                                  <input type="text" class="form-control" name="name">
                              </div>
                             
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Counter</button>
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



   
<?php if(isset($_SESSION['success'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['success']?>',
  
})
    </script>
    <?php } unset($_SESSION['success'])?>