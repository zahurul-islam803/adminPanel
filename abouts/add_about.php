<?php 
session_start();
require '../dashboard_includes/header.php';

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">About</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add About</h5>
                      </div>

                      <div class="card-body">
                          <form action="about_post.php" method="POST">
                           
                              <div class="form-group">
                                  <label for="">Description</label>
                                  <textarea name="description" class="form-control"></textarea>
                              </div>
                            
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add About</button>
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


    <?php if(isset($_SESSION['add_about'])){ ?>
    <script>
        Swal.fire({
  icon: 'success',
  title: 'Congratulations',
  text: '<?=$_SESSION['add_about']?>',
  
})
    </script>
    <?php } unset($_SESSION['add_about'])?>