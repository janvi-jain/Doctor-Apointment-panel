<?php include ('frontend_header.php'); 
if(!isset($_SESSION['patientData'])) {
    header('location:patient-login.php');
    exit();
}
// print_r($_SESSION['patientData']);
$error_message = "";
$success_message = "";

if(isset($_POST['submit'])) {
    // print_r($_POST);
    try {
        $name = isset($_POST['patientname'])? $_POST['patientname'] : "";
        $email = isset($_POST['patientemail'])? $_POST['patientemail'] : '';
        $phone = isset($_POST['patientphone'])? $_POST['patientphone'] : '';
        $gender = isset($_POST['patientgender'])? $_POST['patientgender'] : '';
        $dob = isset($_POST['patientdob'])? $_POST['patientdob'] : '';
        $bloodgrp = isset($_POST['patientbloodgrp'])? $_POST['patientbloodgrp'] : '';
        $state = isset( $_POST['patientstate'])? $_POST['patientstate'] : '';
        $city = isset($_POST['patientcity'])? $_POST['patientcity'] : '';
        $zip = isset($_POST['patientzip'])? $_POST['patientzip'] : '';
        $profilephoto =isset($_FILES['patientprofilephoto'])?$_FILES['patientprofilephoto']['name']:'';
        move_uploaded_file($_FILES['patientprofilephoto']['tmp_name'],"./frontend_dist/images/patients/".$profilephoto);
        
        $uniqueid = $_SESSION['patientData']['id'];
        if($profilephoto == ''){
            $profilephoto = $_SESSION['patientData']['profile_photo'];
        }
        
        $updatequery = "UPDATE patients SET name='$name', email='$email', phone='$phone', gender='$gender', dob='$dob', blood_group='$bloodgrp', state='$state', city='$city', zip='$zip', profile_photo='$profilephoto' WHERE id='$uniqueid'";
        // print_r( $dob);
        $updateresult = mysqli_query($conn,$updatequery);
        if($updateresult){
            $query = "SELECT * FROM patients WHERE id='$uniqueid'";
            $result =  mysqli_query($conn,$query);
            $data = mysqli_fetch_array($result);
            $_SESSION['patientData'] = $data;
            $success_message = "Patient Profile Updated Sucessfully.";
        }else{
            throw new exception("something went wrong in query");
        }
    } catch (exception $e) {
        $error_message = $e ->getmessage(); 
    }
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
                    <div class="patient-profile-header">
                        <h2>Personal Information</h2>
                        <p>Keep your profile updated for better healthcare services.</p>
                    </div>
                    <form id="patientProfileForm" class="patient-profile-form" method="post" enctype="multipart/form-data">
                        <div class="patient-profile-image-section">
                            <img id="patientProfilePreview" src="./frontend_dist/images/patients/<?php echo @$_SESSION['patientData']['profile_photo'];?>" alt="Patient">
                            <label for="patientProfileUpload" class="patient-profile-upload-btn">
                                <i class="fa-solid fa-camera"></i>Change Photo
                            </label>
                            <input type="file" id="patientProfileUpload" name = "patientprofilephoto" accept="image/*" hidden>
                        </div>
                        <div class="patient-profile-grid">
                            <div class="patient-profile-group">
                                <label>Full Name</label>
                                <input type="text" id="patientProfileName" name="patientname" placeholder="Enter Full Name" value ="<?php echo $_SESSION['patientData']['name']?>">
                            </div>

                            <div class="patient-profile-group">
                                <label>Email Address</label>
                                <input type="email" id="patientProfileEmail" name="patientemail" placeholder="Enter Email Address" value ="<?php echo $_SESSION['patientData']['email']?>">
                            </div>

                            <div class="patient-profile-group">
                                <label>Phone Number</label>
                                <input type="text" id="patientProfilePhone" name="patientphone" placeholder="Enter Phone Number" value ="<?php echo @$_SESSION['patientData']['phone']?>">
                            </div>

                            <div class="patient-profile-group">
                                <label>Gender</label>
                                <select id="patientProfileGender" name="patientgender">
                                    <option value="">Select Gender</option>
                                    <option value = "Male" <?php if(@$_SESSION['patientData']['gender']=='Male'){ echo "selected"; }?>>Male</option>
                                    <option value = "Female" <?php if(@$_SESSION['patientData']['gender']=='Female'){ echo "selected"; }?>>Female</option>
                                    <option value = "Other"  <?php if(@$_SESSION['patientData']['gender']=='Other'){ echo "selected"; }?>>Other</option>
                                </select>
                            </div>

                            <div class="patient-profile-group" >
                                <label>Date of Birth</label>
                                <input type="date" id="patientProfileDob" name="patientdob" value ="<?php echo @$_SESSION['patientData']['dob']?>">
                            </div>

                            <div class="patient-profile-group">
                                <label>
                                    Blood Group
                                </label>

                                <select id="patientProfileBloodGroup" name="patientbloodgrp">
                                    <option value="">Select Blood Group</option>
                                    <option value="A+" <?php if(@$_SESSION['patientData']['blood_group']=='A+'){ echo "selected"; }?>>A+</option>
                                    <option value="A-" <?php if(@$_SESSION['patientData']['blood_group']=='A-'){ echo "selected"; }?>>A-</option>
                                    <option value="B+" <?php if(@$_SESSION['patientData']['blood_group']=='B+'){ echo "selected"; }?>>B+</option>
                                    <option value="B-" <?php if(@$_SESSION['patientData']['blood_group']=='B-'){ echo "selected"; }?>>B-</option>
                                    <option value="AB+" <?php if(@$_SESSION['patientData']['blood_group']=='AB+'){ echo "selected"; }?>>AB+</option>
                                    <option value="AB-" <?php if(@$_SESSION['patientData']['blood_group']=='AB-'){ echo "selected"; }?>>AB-</option>
                                    <option value="O+" <?php if(@$_SESSION['patientData']['blood_group']=='O+'){ echo "selected"; }?>>O+</option>
                                    <option value="O-" <?php if(@$_SESSION['patientData']['blood_group']=='O-'){ echo "selected"; }?>>O-</option>
                                </select>
                            </div>
                            <div class="patient-profile-group">
                                <label>State</label>
                                <input type="text" id="patientProfileHeight" name="patientstate" placeholder="Enter Your State" value ="<?php echo @$_SESSION['patientData']['state']?>">
                            </div>
                            <div class="patient-profile-group">
                                <label>City</label>
                                <input type="text" id="patientProfileWeight" name="patientcity" placeholder="Enter Your City" value ="<?php echo @$_SESSION['patientData']['city']?>">
                            </div>
                        </div>

                        <div class="patient-profile-group patient-profile-full">
                            <label>Zip code</label>
                            <input type="text" id="patientProfileAddress" name="patientzip" placeholder="Enter Your Zipcode" value ="<?php echo @$_SESSION['patientData']['zip']?>">
                        </div>

                        <div class="patient-profile-actions">
                            <button type="submit" name="submit" class="patient-profile-save-btn"><i class="fa-solid fa-floppy-disk"></i>Save Changes</button>
                            <button type="reset" class="patient-profile-reset-btn"><i class="fa-solid fa-rotate-left"></i>Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</section>
<?php include ('frontend_footer.php'); ?>