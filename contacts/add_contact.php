<?php 
session_start();
require '../dashboard_includes/header.php';

?>
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Contact</a>
      </nav>

      <div class="sl-pagebody">
          <div class="row">
              <div class="col-lg-8 m-auto">
                  <div class="card">
                      <div class="card-header">
                          <h5>Add Contact</h5>
                      </div>

                      <div class="card-body">
                          <form action="contact_post.php" method="POST">

                          <div class="form-group">
                                  <label for="">Contact Address</label>
                                  <input type="text" class="form-control" name="address">
                              </div>

                              <div class="form-group">
                                  <label for="">Phone</label>
                                  <input type="text" class="form-control" name="phone">
                              </div>
                              <div class="form-group">
                                  <label for="">Email</label>
                                  <input type="email" class="form-control" name="email">
                              </div>

                              <div class="form-group">
                                  <label for="">Contact Description</label>
                                  <textarea name="description" class="form-control"></textarea>
                              </div>
                                                                                    
                              <div class="form-group">
                                  <button type="submit" class="btn btn-primary">Add Contact</button>
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