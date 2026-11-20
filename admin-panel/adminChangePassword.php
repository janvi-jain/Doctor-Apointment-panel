<?php
  include('./adminHeader.php');
  if(isset($_POST['submit'])){
    try{
      if(empty($_POST['oldPassword'])){
        throw new Exception("Old Password Required !");
      }
      if(empty($_POST['newPassword'])){
        throw new Exception("New Password Required !");
      }
      if(empty($_POST['cPassword'])){
        throw new Exception("Confirm Password Required !");
      }
      if($_POST['newPassword'] != $_POST['cPassword']){
        throw new Exception("New Password and Confirm Password Not Matched !");
      }
      
      $dbPassword = $_SESSION['admindata']['password'];
      $oldPassword = $_POST['oldPassword'];
      $newPassword = $_POST['newPassword'];
      $cPassword = $_POST['cPassword'];

      if(password_verify($oldPassword, $dbPassword)){

    if($oldPassword != $newPassword){

        if(strlen($newPassword) >= 6){

            if($newPassword == $cPassword){

                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);

                $email = $_SESSION['admindata']['email'];

                $query = "UPDATE admin SET password = '$newPasswordHash' WHERE email = '$email' AND role = 'admin'";
                $result = mysqli_query($conn, $query);

                header("Location: adminLogout.php");
                exit();

            }else{
                throw new Exception("New Password and Confirm Password Not Matched !");
            }

        }else{
            throw new Exception("New Password Must be 6 Characters Long !");
        }

    }else{
        throw new Exception("Old Password and New Password Cannot be Same !");
    }

}else{
    throw new Exception("Old Password Not Matched !");
}
    }catch(Exception $e){
      $error_message = $e->getMessage();
    }
  }
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Change Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Password</h3>
              </div>
              <?php if(isset($error_message)): ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error_message; ?>
                </div>
              <?php endif; ?>
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Enter Old Password</label>
                    <input type="password" name="oldPassword" class="form-control" id="exampleInputPassword1" placeholder="Old Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword2">Enter New Password</label>
                    <input type="password" name="newPassword" class="form-control" id="exampleInputPassword2" placeholder="New Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword3">Confirm New Password</label>
                    <input type="password" name="cPassword" class="form-control" id="exampleInputPassword3" placeholder="Confirm New Password">
                  </div>
                  
                </div>

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Reset Password</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <?php include('./adminFooter.php'); ?>