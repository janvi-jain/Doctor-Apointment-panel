<?php include ('frontend_header.php'); 
if(!isset($_SESSION['patientData'])) {
    header('location:patient-login.php');
}
?>
<section class="patient-profile-main">
    <section class="page-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="#" class="nav-link" data-page="home">Home</a>
                <span>›</span>
                <a href="#" class="nav-link" data-page="patient-dashboard">Patient Dashboard</a>
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
                            <button type="submit" class="patient-profile-save-btn"><i class="fa-solid fa-floppy-disk"></i>Change password</button>
                            <button type="reset" class="patient-profile-reset-btn"><i class="fa-solid fa-rotate-left"></i>Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
<?php include ('frontend_footer.php'); ?>