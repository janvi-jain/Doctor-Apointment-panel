 <?php
 include ('frontend_header.php');
 if(isset($_SESSION['patientData'])) {
    header('location:patient-dashboard.php');
}

$error_message = "";

if(isset($_POST['login-btn'])){
    try{
        if(empty($_POST['patientEmail'])){
          throw new Exception("Email Required !");
        }

        if(!filter_var($_POST['patientEmail'], FILTER_VALIDATE_EMAIL)){
          throw new Exception("Please Enter Valid Email !");
        }

        if(empty($_POST['password'])){
          throw new Exception("Password Required !");
        }
        $email = $_POST['patientEmail'];
        $query = "SELECT * FROM patients WHERE email = '$email' AND status = 'active'";
        $result = mysqli_query($conn,$query);
        $count = mysqli_num_rows($result);
        if($count == 1){
          $data = mysqli_fetch_array($result);
          if(!password_verify($_POST['password'],$data['password'])){
            throw new Exception("InValid Password !");
          }else{
            $_SESSION['patientData'] = $data;
            // print_r(patientData);
            // exit();
            header("location:patient-dashboard.php");
          }
        }else{
          throw new Exception("Invalid Email Address !");
        }

    }catch(Exception $e){
        $error_message = $e->getMessage();
    }
}
?>
<!-- PATIENT LOGIN -->
<section id="patient">
    <section class="page-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="./index.php" class="nav-link" data-page="home">Home</a>
                <span>›</span>
                Patient Login
            </div>

            <h1>Patient Login</h1>
            <p>
                Access your personal health dashboard.
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

                    <h2>Welcome Back</h2>
                    <p class="login-subtitle">
                        Sign in to your patient account
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
                    <form id="patientLoginForm" method="post" novalidate>
                        <div class="input-group">
                            <label for="patientEmail" >
                                Email Address
                            </label>
                            <input type="email" id="patientEmail" name="patientEmail" placeholder="patient@email.com" required>
                        </div>

                        <div class="input-group">
                            <label for="patientPassword">
                                Password
                            </label>

                            <div class="password-box">
                                <input type="password" id="patientPassword"  name="password" placeholder="••••••••" required>
                                <span class="toggle-password" id="togglePatientPassword">
                                    👁
                                </span>
                            </div>
                        </div>

                        <div class="login-options">
                            <label class="remember">
                                <input type="checkbox" id="rememberPatient">
                                Remember Me
                            </label>

                            <a href="./patient-forget-password.php">
                                Forgot Password?
                            </a>

                        </div>

                        <button type="submit" class="login-btn" name="login-btn">
                            Login to Dashboard
                        </button>

                    </form>

                    <div class="login-footer">
                        <p>
                            New here?
                            <a href="./patient-registration.php">
                                Create an Account
                            </a>
                        </p>
                    </div>

                    <div class="login-divider">
                        <span>
                            Are you a doctor?
                        </span>
                    </div>
                    <a href="./doctor-login.php">
                        <button class="doctor-switch-btn " data-page="doctor-login">
                            Doctor Login →
                        </button>
                    </a>
                </div>
            </div>
        </section>
    </div>
</section>
<?php include ('frontend_footer.php'); ?>