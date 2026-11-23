
<?php
include ('frontend_header.php');
if(!isset($_GET['token'])){
    header("Location: ./patient-login.php");
}
$error_message = "";
$success_message = "";

if(isset($_POST['submit'])){
    try{
        // print_r($_POST);
        $password = $_POST['password']?$_POST['password']:'';
        $cpassword = $_POST['cpassword']?$_POST['cpassword']:'';
        if($password == ''){
            throw new Exception("Password is required");
        }

        if($cpassword == ''){
            throw new Exception("Confirm Password is required");
        }
        if($password !== $cpassword){
            throw new Exception("Passwords do not match");
        }                                                    

        $token = $_GET['token'];
        $hashpassword = password_hash($password,PASSWORD_DEFAULT);
        $query = "UPDATE patients SET password='$hashpassword' WHERE token = '$token'";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            header("Location: ./patient-login.php");
        }else {
            throw new Exception("Failed to register patient. Please try again.");
        }
    }
    catch(Exception $e){
        $error_message = $e->getMessage();
    }
}
?>


<!-- //31:37 video 10.1 -->
<!-- PATIENT REGISTRATION -->
<section id="patient">
    <section class="page-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="./index.php" class="nav-link" data-page="home">Home</a>
                <span>›</span>
                Reset Password
            </div>

            <h1>Reset Password</h1>
            <p>
                Reset your password and regain access to your account.
            </p>

        </div>

    </section>
    <div class="container">
        <section class="login-section">
            <div class="container">
                <div class="login-card">
                    <div class="login-icon">
                        🙍‍♂️
                    </div>

                    <h2>Welcome to Our Platform</h2>
                    <p class="login-subtitle">
                        Reset your Password
                    </p>

                    <?php if($error_message != '') { ?>
                    <div style="background:#fff1f0; color:#c0392b;
                                border:1px solid #f5c6c3; border-left:4px solid #dc3545;
                                padding:12px 15px; border-radius:6px;
                                font-size:15.5px; margin-bottom:15px;">

                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <b><?php echo htmlspecialchars($error_message); ?></b>
                    </div>
                    <?php } ?>
                    <?php if($success_message != '') { ?>
                        <div style="background:#eaf7ef; color:#218838;
                                    border:1px solid #b9e2c8; border-left:4px solid #28a745;
                                    padding:12px 15px; border-radius:6px;
                                    font-size:15.5px; margin-bottom:15px;">

                            <i class="fas fa-check-circle mr-2"></i>
                            <b><?php echo htmlspecialchars($success_message); ?></b>    
                        </div>
                    <?php } ?>
                    <form id="patientLoginForm" method="POST" novalidate>
                        <div class="input-group">
                            <label for="patientPassword">
                                Password
                            </label>

                            <div class="password-box">
                                <input type="password" id="patientPassword" name = "password" placeholder="••••••••" required>
                                <span class="toggle-password" id="togglePatientPassword">👁</span>
                            </div>
                        </div>

                        <div class="input-group">
                            <label for="patientConfirmPassword">
                                Confirm Password
                            </label>

                            <div class="password-box">
                                <input type="password" id="patientConfirmPassword" name = "cpassword" placeholder="••••••••" required>
                                <span class="toggle-password" id="togglePatientConfirmPassword">👁</span>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="login-btn">
                            Reset Password
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</section>
<?php include ('frontend_footer.php'); ?>