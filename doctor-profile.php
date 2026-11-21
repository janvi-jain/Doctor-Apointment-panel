<?php include ('frontend_header.php'); ?>
<section class="doctor-profile-page">
    <section class="page-banner">
        <div class="container">
            <div class="breadcrumb">
                <a href="#" class="nav-link" data-page="home">
                    Home
                </a>
                <span>›</span>
                <a href="#" class="nav-link" data-page="doctor-dashboard">
                    Doctor Dashboard
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
                Update your personal information, profile picture and account details.
            </p>
        </div>
    </section>

    <section class="doctor-profile-main">
        <div class="container">
            <div class="doctor-profile-layout">
                <aside class="doctor-profile-sidebar">
                    <div class="doctor-profile-sidebar-top">
                        <img id="doctorProfileSidebarImage" src="images/doctors/doctor1.jpg" alt="Doctor">
                        <h3 id="doctorProfileSidebarName">
                            Dr. John Smith
                        </h3>
                        <p>
                            Doctor ID :
                            <span id="doctorProfileSidebarId">
                                DOC1001
                            </span>
                        </p>
                    </div>
                    <ul class="doctor-profile-menu">
                        <li>
                            <a href="#" class="nav-link doctor-profile-menu-link" data-page="doctor-dashboard">

                                <i class="fa-solid fa-house"></i>

                                Dashboard

                            </a>

                        </li>

                        <li>

                            <a href="#" class="doctor-profile-menu-link active">

                                <i class="fa-solid fa-user"></i>

                                My Profile

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-profile-menu-link" data-page="today-appointments">

                                <i class="fa-solid fa-calendar-check"></i>

                                Today's Appointments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-profile-menu-link" data-page="setup-schedule">

                                <i class="fa-solid fa-clock"></i>

                                Setup Schedule

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-profile-menu-link" data-page="add-leave">

                                <i class="fa-solid fa-calendar-xmark"></i>

                                Add Leave

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-profile-menu-link" data-page="doctor-dashboard">

                                <i class="fa-solid fa-right-from-bracket"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </aside>
                <div class="doctor-profile-content">

                    <div class="doctor-profile-card">

                        <div class="doctor-profile-card-header">

                            <h2>

                                Update Profile

                            </h2>

                            <p>

                                Keep your professional information up to date.

                            </p>

                        </div>

                        <form id="doctorProfileForm">

                            <div class="doctor-profile-image-section">

                                <div class="doctor-profile-image-preview">

                                    <img id="doctorProfilePreview" src="images/doctors/doctor1.jpg" alt="Doctor">

                                </div>

                                <div class="doctor-profile-upload">

                                    <label for="doctorProfileImage">

                                        Profile Photo

                                    </label>

                                    <input type="file" id="doctorProfileImage" accept="image/*">

                                    <small>

                                        JPG, PNG or JPEG (Max 2MB)

                                    </small>

                                </div>

                            </div>

                            <div class="doctor-profile-form-grid">

                                <!-- Full Name -->

                                <div class="doctor-profile-form-group">

                                    <label>

                                        Full Name

                                    </label>

                                    <input type="text" id="doctorName" value="Dr. John Smith" required>

                                </div>

                                <!-- Email -->

                                <div class="doctor-profile-form-group">

                                    <label>

                                        Email Address

                                    </label>

                                    <input type="email" id="doctorEmail" value="doctor@careplus.com" required>

                                </div>

                                <!-- Phone -->

                                <div class="doctor-profile-form-group">

                                    <label>

                                        Phone Number

                                    </label>

                                    <input type="tel" id="doctorPhone" value="+91 9876543210" required>

                                </div>

                                <!-- Department -->

                                <div class="doctor-profile-form-group">

                                    <label>

                                        Department

                                    </label>

                                    <select id="doctorDepartment">

                                        <option>

                                            Cardiology

                                        </option>

                                        <option>

                                            Neurology

                                        </option>

                                        <option>

                                            Orthopedic

                                        </option>

                                        <option>

                                            Pediatrics

                                        </option>

                                        <option>

                                            Dermatology

                                        </option>

                                        <option>

                                            Eye Care

                                        </option>

                                    </select>

                                </div>

                                <!-- Qualification -->

                                <div class="doctor-profile-form-group">

                                    <label>

                                        Qualification

                                    </label>

                                    <input type="text" id="doctorQualification" value="MBBS, FCPS">

                                </div>

                                <!-- Experience -->

                                <div class="doctor-profile-form-group">

                                    <label>

                                        Experience

                                    </label>

                                    <input type="text" id="doctorExperience" value="15 Years">

                                </div>

                                <!-- Hospital -->

                                <div class="doctor-profile-form-group">

                                    <label>

                                        Hospital / Clinic

                                    </label>

                                    <input type="text" id="doctorHospital" value="Main Hospital">

                                </div>

                                <!-- City -->

                                <div class="doctor-profile-form-group">

                                    <label>

                                        City

                                    </label>

                                    <input type="text" id="doctorCity" value="Ahmedabad">

                                </div>

                            </div>
                            <div class="doctor-profile-form-group doctor-profile-full">

                                <label>

                                    Biography

                                </label>

                                <textarea id="doctorBiography" rows="6" placeholder="Write about yourself...">
                                    Dr. John Smith is an experienced Cardiologist dedicated to providing quality healthcare with modern treatment methods. He specializes in heart disease diagnosis, prevention, and advanced cardiac care.
                                </textarea>
                            </div>

                            <div class="doctor-profile-form-grid">

                                <div class="doctor-profile-form-group">

                                    <label>

                                        New Password

                                    </label>

                                    <input type="password" id="doctorPassword" placeholder="Enter new password">

                                </div>

                                <div class="doctor-profile-form-group">

                                    <label>

                                        Confirm Password

                                    </label>

                                    <input type="password" id="doctorConfirmPassword" placeholder="Confirm password">

                                </div>

                            </div>

                            <div class="doctor-profile-buttons">

                                <button type="submit" class="doctor-profile-save-btn">

                                    <i class="fa-solid fa-floppy-disk"></i>

                                    Update Profile

                                </button>

                                <button type="reset" class="doctor-profile-reset-btn">

                                    <i class="fa-solid fa-rotate-left"></i>

                                    Reset

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>
</section>
<?php include ('frontend_footer.php'); ?>