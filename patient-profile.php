<?php include ('frontend_header.php'); 
if(!isset($_SESSION['patientData'])) {
    header('location:patient-login.php');
}
?>
<section class="patient-profile-main">

    <!--=====================================
            PAGE BANNER
    ======================================-->

    <section class="page-banner">

        <div class="container">

            <div class="breadcrumb">

                <a href="#" class="nav-link" data-page="home">

                    Home

                </a>

                <span>›</span>

                <a href="#" class="nav-link" data-page="patient-dashboard">

                    Patient Dashboard

                </a>

                <span>›</span>

                <span>

                    My Profile

                </span>

            </div>

            <h1>

                My Profile

            </h1>

            <p>

                Manage your personal information and account settings.

            </p>

        </div>

    </section>


    <!--=====================================
            PROFILE SECTION
    ======================================-->

    <section class="patient-profile-section">

        <div class="container">

            <div class="patient-profile-layout">


                <!--=====================================
                        SIDEBAR
                ======================================-->

               <?php include ('patient-aside.php'); ?>


                <!--=====================================
                        CONTENT
                ======================================-->

                <div class="patient-profile-content">

                    <div class="patient-profile-header">

                        <h2>

                            Personal Information

                        </h2>

                        <p>

                            Keep your profile updated for better healthcare services.

                        </p>

                    </div>


                    <!-- Profile Form -->

                    <form id="patientProfileForm" class="patient-profile-form">

                        <!--=====================================
        PROFILE IMAGE
======================================-->

                        <div class="patient-profile-image-section">

                            <img id="patientProfilePreview" src="images/patients/patient1.jpg" alt="Patient">

                            <label for="patientProfileUpload" class="patient-profile-upload-btn">

                                <i class="fa-solid fa-camera"></i>

                                Change Photo

                            </label>

                            <input type="file" id="patientProfileUpload" accept="image/*" hidden>

                        </div>


                        <!--=====================================
        FORM GRID
======================================-->

                        <div class="patient-profile-grid">

                            <!-- Full Name -->

                            <div class="patient-profile-group">

                                <label>

                                    Full Name

                                </label>

                                <input type="text" id="patientProfileName" placeholder="Enter Full Name">

                            </div>


                            <!-- Email -->

                            <div class="patient-profile-group">

                                <label>

                                    Email Address

                                </label>

                                <input type="email" id="patientProfileEmail" placeholder="Enter Email Address">

                            </div>


                            <!-- Phone -->

                            <div class="patient-profile-group">

                                <label>

                                    Phone Number

                                </label>

                                <input type="text" id="patientProfilePhone" placeholder="Enter Phone Number">

                            </div>


                            <!-- Gender -->

                            <div class="patient-profile-group">

                                <label>

                                    Gender

                                </label>

                                <select id="patientProfileGender">

                                    <option>Male</option>

                                    <option>Female</option>

                                    <option>Other</option>

                                </select>

                            </div>


                            <!-- Date of Birth -->

                            <div class="patient-profile-group">

                                <label>

                                    Date of Birth

                                </label>

                                <input type="date" id="patientProfileDob">

                            </div>


                            <!-- Blood Group -->

                            <div class="patient-profile-group">

                                <label>

                                    Blood Group

                                </label>

                                <select id="patientProfileBloodGroup">

                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>O+</option>
                                    <option>O-</option>

                                </select>

                            </div>


                            <!-- Height -->

                            <div class="patient-profile-group">

                                <label>

                                    Height (cm)

                                </label>

                                <input type="number" id="patientProfileHeight" placeholder="170">

                            </div>


                            <!-- Weight -->

                            <div class="patient-profile-group">

                                <label>

                                    Weight (kg)

                                </label>

                                <input type="number" id="patientProfileWeight" placeholder="65">

                            </div>

                        </div>


                        <!--=====================================
        ADDRESS
======================================-->

                        <div class="patient-profile-group patient-profile-full">

                            <label>

                                Address

                            </label>

                            <textarea id="patientProfileAddress" rows="4"
                                placeholder="Enter your complete address"></textarea>

                        </div>


                        <!--=====================================
        CHANGE PASSWORD
======================================-->

                        <div class="patient-profile-password-card">

                            <h3>

                                <i class="fa-solid fa-lock"></i>

                                Change Password

                            </h3>

                            <div class="patient-profile-grid">

                                <!-- Current Password -->

                                <div class="patient-profile-group">

                                    <label>

                                        Current Password

                                    </label>

                                    <input type="password" id="patientProfileCurrentPassword"
                                        placeholder="Enter Current Password">

                                </div>

                                <!-- New Password -->

                                <div class="patient-profile-group">

                                    <label>

                                        New Password

                                    </label>

                                    <input type="password" id="patientProfileNewPassword"
                                        placeholder="Enter New Password">

                                </div>

                                <!-- Confirm Password -->

                                <div class="patient-profile-group">

                                    <label>

                                        Confirm Password

                                    </label>

                                    <input type="password" id="patientProfileConfirmPassword"
                                        placeholder="Confirm New Password">

                                </div>

                            </div>

                        </div>


                        <!--=====================================
        ACTION BUTTONS
======================================-->

                        <div class="patient-profile-actions">

                            <button type="submit" class="patient-profile-save-btn">

                                <i class="fa-solid fa-floppy-disk"></i>

                                Save Changes

                            </button>

                            <button type="reset" class="patient-profile-reset-btn">

                                <i class="fa-solid fa-rotate-left"></i>

                                Reset

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </section>
</section>
<?php include ('frontend_footer.php'); ?>