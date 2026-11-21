<?php include ('frontend_header.php'); ?>
<section class="patient-description-page">

    <section class="page-banner">

        <div class="container">

            <div class="breadcrumb">

                <a href="#" class="nav-link" data-page="home">

                    Home

                </a>

                <span>›</span>

                <span>

                    Prescription

                </span>

            </div>

            <h1>

                Patient Prescription

            </h1>

            <p>

                View and print your doctor's prescription.

            </p>

        </div>

    </section>


    <!--=========================================
            MAIN
    ==========================================-->

    <section class="patient-description-main">

        <div class="container">

            <div class="patient-description-layout">


                <!--=========================================
                        SIDEBAR
                ==========================================-->

                <aside class="patient-description-sidebar">

                    <div class="patient-description-sidebar-top">

                        <img id="patientDescriptionImage" src="images/patients/patient1.jpg" alt="Patient">

                        <h3 id="patientDescriptionName">

                            Rahul Patel

                        </h3>

                        <p>

                            Patient ID :
                            <span id="patientDescriptionId">

                                PAT1001

                            </span>

                        </p>

                    </div>


                    <ul class="patient-description-menu">

                        <li>

                            <a href="#" class="nav-link patient-description-menu-link" data-page="home">

                                <i class="fa-solid fa-house"></i>

                                Dashboard

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link patient-description-menu-link">

                                <i class="fa-solid fa-user"></i>

                                My Profile

                            </a>

                        </li>


                        <!-- Make Appointment -->

                        <li>

                            <a href="#" class="nav-link patient-description-menu-link" data-page="make-appointment">

                                <i class="fa-solid fa-calendar-plus"></i>

                                Make Appointment

                            </a>

                        </li>


                        <li>

                            <a href="#" class="nav-link patient-description-menu-link">

                                <i class="fa-solid fa-calendar-days"></i>

                                Appointments

                            </a>

                        </li>


                        <li>

                            <a href="#" class="nav-link patient-description-menu-link" data-page="home">

                                <i class="fa-solid fa-right-from-bracket"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </aside>


                <div class="patient-description-content">

                    <div class="prescription-card">

                        <div class="prescription-header">

                            <h2>

                                Prescription

                            </h2>

                        </div>

                        <div id="prescriptionArea">

                            <div class="hospital-header">

                                <h1>

                                    CarePlus Hospital

                                </h1>

                                <p>

                                    Healthcare Management System

                                </p>

                                <p>

                                    95 South Park Avenue, New York, USA

                                    |

                                    Phone : +1 (555) 123-4567

                                </p>

                            </div>

                            <div class="prescription-doctor">

                                <div>

                                    <h3 id="prescriptionDoctorName">

                                        Dr. John Smith

                                    </h3>

                                    <p id="prescriptionDoctorDegree">

                                        MBBS, FCPS

                                    </p>

                                    <p id="prescriptionDoctorDepartment">

                                        Cardiology

                                    </p>

                                </div>

                            </div>


                            <hr>

                            <div class="prescription-patient-info">

                                <div>

                                    <strong>

                                        Patient Name :

                                    </strong>

                                    <span id="prescriptionPatientName">

                                        Rahul Patel

                                    </span>

                                </div>

                                <div>

                                    <strong>

                                        Age :

                                    </strong>

                                    <span id="prescriptionAge">

                                        28 Years

                                    </span>

                                </div>

                                <div>

                                    <strong>

                                        Gender :

                                    </strong>

                                    <span id="prescriptionGender">

                                        Male

                                    </span>

                                </div>

                                <div>

                                    <strong>

                                        Date :

                                    </strong>

                                    <span id="prescriptionDate">

                                        --

                                    </span>

                                </div>

                                <div>

                                    <strong>

                                        Phone :

                                    </strong>

                                    <span id="prescriptionPhone">

                                        +91 9876543210

                                    </span>

                                </div>

                            </div>


                            <hr>

                            <div class="prescription-section">

                                <h3>

                                    Symptoms

                                </h3>

                                <p id="prescriptionSymptoms">

                                    -

                                </p>

                            </div>

                            <div class="prescription-section">

                                <h3>

                                    Diagnosis

                                </h3>

                                <p id="prescriptionDiagnosis">

                                    -

                                </p>

                            </div>

                            <div class="prescription-section">

                                <h3>

                                    Prescription

                                </h3>

                                <div class="prescription-table-wrapper">

                                    <table class="prescription-table">

                                        <thead>

                                            <tr>

                                                <th>#</th>

                                                <th>Medicine</th>

                                                <th>Type</th>

                                                <th>Dosage</th>

                                                <th>Days</th>

                                                <th>Time</th>

                                            </tr>

                                        </thead>

                                        <tbody id="prescriptionMedicineBody">

                                            <!-- Medicines will load from JavaScript -->

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                            <div class="prescription-section">

                                <h3>

                                    Recommended Tests

                                </h3>

                                <p id="prescriptionTests">

                                    -

                                </p>

                            </div>

                            <div class="prescription-section">

                                <h3>

                                    Doctor's Advice

                                </h3>

                                <p id="prescriptionAdvice">

                                    -

                                </p>

                            </div>
                            <div class="prescription-section">

                                <h3>

                                    Follow-up

                                </h3>

                                <p>

                                    <strong>Date :</strong>

                                    <span id="prescriptionFollowUp">

                                        -

                                    </span>

                                </p>

                            </div>


                            <div class="prescription-signature">

                                <div>

                                    ___________________________

                                    <br>

                                    <strong id="signatureDoctorName">

                                        Dr. John Smith

                                    </strong>

                                    <br>

                                    <span id="signatureDegree">

                                        MBBS, FCPS

                                    </span>

                                </div>

                            </div>

                        </div>



                        <div class="prescription-actions">

                            <button type="button" class="print-prescription-btn" id="printPrescriptionBtn">

                                <i class="fa-solid fa-print"></i>

                                Print Prescription

                            </button>

                            <button type="button" class="back-appointment-btn nav-link" data-page="appointments">

                                <i class="fa-solid fa-arrow-left"></i>

                                Back to Appointments

                            </button>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</section>
<?php include ('frontend_footer.php'); ?>