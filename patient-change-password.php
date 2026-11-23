<?php include ('frontend_header.php'); 
if(!isset($_SESSION['patientData'])) {
    header('location:patient-login.php');
}

$error_message ="";
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
      
      $dbPassword = $_SESSION['patientData']['password'];
      $oldPassword = $_POST['oldPassword'];
      $newPassword = $_POST['newPassword'];
      $cPassword = $_POST['cPassword'];

      if(password_verify($oldPassword, $dbPassword)){
        if($oldPassword != $newPassword){
            if($newPassword == $cPassword){
                $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
                $email = $_SESSION['patientData']['email'];
                $query = "UPDATE patients SET password = '$newPasswordHash' WHERE email = '$email'";
                $result = mysqli_query($conn, $query);
                header("Location:patient-logout.php");
                exit();
            }else{
                throw new Exception("New Password and Confirm Password Not Matched !");
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
<section class="patient-profile-main">
    <section class="page-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="#" class="nav-link" data-page="home">Home</a>
                <span>›</span>
                <a href="./patient-dashboard.php" class="nav-link" data-page="patient-dashboard">Patient Dashboard</a>
                <span>›</span>
                <span>My Profile</span>
            </div>
            <h1>My Profile</h1>
            <p>Manage your personal information and account settings.</p>
        </div>
    </section>

    <section class="patient-profile-section">
        <div class="container">
            <div class="patient-profile-layout">
               <?php include ('patient-aside.php'); ?>
                <div class="patient-profile-content">
                    <div class="patient-profile-header">
                        <h2>Settings</h2>
                        <p>Change your password at any time.</p>
                    </div>
                    <?php if($error_message != '') { ?>
                    <div style="background:#fff1f0; color:#c0392b;
                                border:1px solid #f5c6c3; border-left:4px solid #dc3545;
                                padding:12px 15px; border-radius:6px;
                                font-size:15.5px; margin-bottom:15px;">

                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <b><?php echo htmlspecialchars($error_message); ?></b>
                    </div>
                    <?php } ?>
                    <form id="patientProfileForm" class="patient-profile-form" method="post">
                        <div class="patient-profile-password-card">
                            <h3><i class="fa-solid fa-lock"></i>Change Password</h3>
                            <div class="patient-profile-grid">
                                <div class="patient-profile-group">
                                    <label>Current Password</label>
                                    <input type="password" name="oldPassword" id="patientProfileCurrentPassword"
                                        placeholder="Enter Current Password">
                                </div>

                                <div class="patient-profile-group">
                                    <label>New Password</label>
                                    <input type="password" name="newPassword" id="patientProfileNewPassword"
                                        placeholder="Enter New Password">
                                </div>

                                <div class="patient-profile-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="cPassword" id="patientProfileConfirmPassword"
                                        placeholder="Confirm New Password">
                                </div>
                            </div>
                        </div>

                        <div class="patient-profile-actions">
                            <button type="submit" name="submit" class="patient-profile-save-btn"><i class="fa-solid fa-floppy-disk"></i>Change password</button>
                            <button type="reset" class="patient-profile-reset-btn"><i class="fa-solid fa-rotate-left"></i>Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
<?php include ('frontend_footer.php'); ?>