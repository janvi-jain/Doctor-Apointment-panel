<?php include ('frontend_header.php'); ?>
<section class="treatment-page">

    <!--=========================================
            PAGE BANNER
    ==========================================-->

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

                    Treatment

                </span>

            </div>

            <h1>

                Patient Treatment

            </h1>

            <p>

                Examine the patient, prescribe medicines and complete the treatment process.

            </p>

        </div>

    </section>


    <!--=========================================
            MAIN
    ==========================================-->

    <section class="treatment-main">

        <div class="container">

            <div class="treatment-layout">


                <!--=========================================
                        SIDEBAR
                ==========================================-->

                <aside class="treatment-sidebar">

                    <div class="treatment-sidebar-top">

                        <img id="treatmentDoctorImage" src="images/doctors/doctor1.jpg" alt="Doctor">

                        <h3 id="treatmentDoctorName">

                            Dr. John Smith

                        </h3>

                        <p>

                            Doctor ID :
                            <span id="treatmentDoctorId">

                                DOC1001

                            </span>

                        </p>

                    </div>


                    <ul class="treatment-menu">

                        <li>

                            <a href="#" class="nav-link treatment-menu-link" data-page="doctor-dashboard">

                                <i class="fa-solid fa-house"></i>

                                Dashboard

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link treatment-menu-link" data-page="doctor-profile">

                                <i class="fa-solid fa-user"></i>

                                My Profile

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link treatment-menu-link" data-page="today-appointments">

                                <i class="fa-solid fa-calendar-check"></i>

                                Today's Appointments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link treatment-menu-link" data-page="setup-schedule">

                                <i class="fa-solid fa-clock"></i>

                                Setup Schedule

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link treatment-menu-link" data-page="add-leave">

                                <i class="fa-solid fa-calendar-xmark"></i>

                                Add Leave

                            </a>

                        </li>

                        <li>

                            <a href="#" class="treatment-menu-link active">

                                <i class="fa-solid fa-notes-medical"></i>

                                Treatment

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link treatment-menu-link" data-page="doctor-withdrawal">

                                <i class="fa-solid fa-wallet"></i>

                                Withdrawal

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link treatment-menu-link" data-page="home">

                                <i class="fa-solid fa-right-from-bracket"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </aside>


                <!--=========================================
                        CONTENT
                ==========================================-->

                <div class="treatment-content">

                    <div class="treatment-card">

                        <div class="treatment-header">

                            <h2>

                                Patient Examination

                            </h2>

                            <p>

                                Record patient vitals, diagnosis, medicines and medical advice.

                            </p>

                        </div>

                        <form id="treatmentForm">

                            <!--=========================================
        TOP INFORMATION
==========================================-->

                            <div class="treatment-top-info">

                                <!-- Patient Information -->

                                <div class="treatment-info-card">

                                    <h3>

                                        <i class="fa-solid fa-user"></i>

                                        Patient Information

                                    </h3>

                                    <table class="treatment-info-table">

                                        <tr>

                                            <th>Patient Name</th>

                                            <td id="patientName">

                                                Rahul Patel

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Phone</th>

                                            <td id="patientPhone">

                                                +91 9876543210

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Age</th>

                                            <td id="patientAge">

                                                28 Years

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Gender</th>

                                            <td>

                                                Male

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Blood Group</th>

                                            <td>

                                                B+

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Email</th>

                                            <td>

                                                rahul@gmail.com

                                            </td>

                                        </tr>

                                    </table>

                                </div>


                                <!-- Appointment Information -->

                                <div class="treatment-info-card">

                                    <h3>

                                        <i class="fa-solid fa-calendar-check"></i>

                                        Appointment Information

                                    </h3>

                                    <table class="treatment-info-table">

                                        <tr>

                                            <th>Date</th>

                                            <td id="appointmentDate">

                                                20 Jul 2026

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Time</th>

                                            <td id="appointmentTime">

                                                09:00 AM

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Token</th>

                                            <td id="appointmentToken">

                                                101

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Fee</th>

                                            <td id="appointmentFee">

                                                ₹500

                                            </td>

                                        </tr>

                                        <tr>

                                            <th>Status</th>

                                            <td>

                                                <span class="appointment-status pending">

                                                    Pending

                                                </span>

                                            </td>

                                        </tr>

                                    </table>

                                </div>

                            </div>


                            <!--=========================================
        PHYSICAL EXAMINATION
==========================================-->

                            <div class="treatment-section">

                                <h3>

                                    <i class="fa-solid fa-heart-pulse"></i>

                                    Physical Examination

                                </h3>

                                <div class="treatment-form-grid">

                                    <div class="treatment-form-group">

                                        <label>

                                            Height (cm)

                                        </label>

                                        <input type="number" id="height" placeholder="170">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Weight (kg)

                                        </label>

                                        <input type="number" id="weight" placeholder="65">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Temperature (°C)

                                        </label>

                                        <input type="number" step="0.1" id="temperature" placeholder="36.8">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Pulse (Per Minute)

                                        </label>

                                        <input type="number" id="pulse" placeholder="72">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Respiration (Per Minute)

                                        </label>

                                        <input type="number" id="respiration" placeholder="18">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Blood Pressure

                                        </label>

                                        <input type="text" id="bloodPressure" placeholder="120 / 80">

                                    </div>

                                </div>

                            </div>


                            <!--=========================================
        SYMPTOMS & DIAGNOSIS
==========================================-->

                            <div class="treatment-section">

                                <h3>

                                    <i class="fa-solid fa-stethoscope"></i>

                                    Symptoms & Diagnosis

                                </h3>

                                <div class="treatment-form-grid">

                                    <div class="treatment-form-group">

                                        <label>

                                            Chief Complaint

                                        </label>

                                        <input type="text" id="chiefComplaint" placeholder="Chest Pain">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Symptoms

                                        </label>

                                        <input type="text" id="symptoms" placeholder="Fever, Cough, Headache">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Diagnosis

                                        </label>

                                        <input type="text" id="diagnosis" placeholder="Viral Fever">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Allergy

                                        </label>

                                        <input type="text" id="allergy" placeholder="No Known Allergy">

                                    </div>

                                </div>


                                <div class="treatment-form-group treatment-full">

                                    <label>

                                        Problem Description

                                    </label>

                                    <textarea id="problemDescription" rows="5"
                                        placeholder="Write complete examination details..."></textarea>

                                </div>

                            </div>


                            <!--=========================================
        PRESCRIPTION
==========================================-->

                            <div class="treatment-section">

                                <h3>

                                    <i class="fa-solid fa-prescription-bottle-medical"></i>

                                    Prescription

                                </h3>

                                <div id="medicineContainer">

                                    <div class="medicine-row">

                                        <select class="medicine-type">

                                            <option>Tablet</option>

                                            <option>Capsule</option>

                                            <option>Syrup</option>

                                            <option>Injection</option>

                                        </select>

                                        <input type="text" class="medicine-name" placeholder="Medicine Name">

                                        <input type="text" class="medicine-dosage" placeholder="1-0-1">

                                        <input type="number" class="medicine-days" placeholder="5">

                                        <select class="medicine-time">

                                            <option>Before Meal</option>

                                            <option>After Meal</option>

                                            <option>Morning</option>

                                            <option>Night</option>

                                        </select>

                                    </div>

                                </div>

                                <button type="button" id="addMedicineBtn" class="add-medicine-btn">

                                    <i class="fa-solid fa-plus"></i>

                                    Add Medicine

                                </button>

                            </div>


                            <!--=========================================
        TESTS & ADVICE
==========================================-->

                            <div class="treatment-section">

                                <h3>

                                    <i class="fa-solid fa-flask-vial"></i>

                                    Test & Advice

                                </h3>

                                <div class="treatment-form-grid">

                                    <div class="treatment-form-group">

                                        <label>

                                            Recommended Tests

                                        </label>

                                        <textarea id="recommendedTests" rows="5"
                                            placeholder="Blood Test, ECG, X-Ray, MRI..."></textarea>

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Doctor's Advice

                                        </label>

                                        <textarea id="doctorAdvice" rows="5"
                                            placeholder="Provide medical advice for the patient..."></textarea>

                                    </div>

                                </div>

                            </div>


                            <!--=========================================
        FOLLOW UP
==========================================-->

                            <div class="treatment-section">

                                <h3>

                                    <i class="fa-solid fa-calendar-days"></i>

                                    Follow Up

                                </h3>

                                <div class="treatment-form-grid">

                                    <div class="treatment-form-group">

                                        <label>

                                            Follow-up Date

                                        </label>

                                        <input type="date" id="followUpDate">

                                    </div>

                                    <div class="treatment-form-group">

                                        <label>

                                            Follow-up Notes

                                        </label>

                                        <input type="text" id="followUpNotes" placeholder="Review after 7 days">

                                    </div>

                                </div>

                            </div>


                            <!--=========================================
        ACTION BUTTONS
==========================================-->

                            <div class="treatment-actions">

                                <button type="button" class="treatment-save-btn" id="saveTreatmentBtn">

                                    <i class="fa-solid fa-floppy-disk"></i>

                                    Save Treatment

                                </button>

                                <button type="submit" class="treatment-complete-btn">

                                    <i class="fa-solid fa-circle-check"></i>

                                    Complete Treatment

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