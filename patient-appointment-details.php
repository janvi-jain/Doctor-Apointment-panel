<?php include ('frontend_header.php'); ?>
<section class="patient-appointment-main">

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

                    My Appointments

                </span>

            </div>

            <h1>

                My Appointments

            </h1>

            <p>

                View and manage all your booked appointments.

            </p>

        </div>

    </section>


    <!--=====================================
            APPOINTMENT SECTION
    ======================================-->

    <section class="patient-appointment-section">

        <div class="container">

            <div class="patient-appointment-layout">


                <!--=====================================
                        SIDEBAR
                ======================================-->

                <aside class="patient-appointment-sidebar">

                    <div class="patient-appointment-sidebar-top">

                        <img id="patientAppointmentImage" src="images/patients/patient1.jpg" alt="Patient">

                        <h3 id="patientAppointmentName">

                            John Doe

                        </h3>

                        <p>

                            Patient ID :

                            <span id="patientAppointmentId">

                                #P001234

                            </span>

                        </p>

                    </div>


                    <ul class="patient-appointment-menu">

                        <li>

                            <a href="#" class="nav-link patient-appointment-menu-link" data-page="patient-dashboard">

                                <i class="fa-solid fa-house"></i>

                                Dashboard

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link patient-appointment-menu-link" data-page="patient-profile">

                                <i class="fa-solid fa-user"></i>

                                My Profile

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link patient-appointment-menu-link" data-page="make-appointment">

                                <i class="fa-solid fa-calendar-plus"></i>

                                Make Appointment

                            </a>

                        </li>

                        <li>

                            <a href="#" class="patient-appointment-menu-link active">

                                <i class="fa-solid fa-calendar-days"></i>

                                My Appointments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link patient-appointment-menu-link" data-page="home">

                                <i class="fa-solid fa-right-from-bracket"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </aside>


                <!--=====================================
                        CONTENT
                ======================================-->

                <div class="patient-appointment-content">

                    <div class="patient-appointment-header">

                        <h2>

                            Appointment History

                        </h2>

                        <p>

                            Track your upcoming, completed and cancelled appointments.

                        </p>

                    </div>


                    <!-- Statistics -->

                    <div class="patient-appointment-stats">

                        <!--=====================================
        STATISTICS CARDS
======================================-->

                        <div class="patient-appointment-stat-card">

                            <div class="patient-appointment-stat-icon">

                                <i class="fa-solid fa-calendar-check"></i>

                            </div>

                            <div>

                                <h3 id="patientAppointmentTotal">

                                    12

                                </h3>

                                <p>

                                    Total Appointments

                                </p>

                            </div>

                        </div>


                        <div class="patient-appointment-stat-card">

                            <div class="patient-appointment-stat-icon">

                                <i class="fa-solid fa-hourglass-half"></i>

                            </div>

                            <div>

                                <h3 id="patientAppointmentPending">

                                    3

                                </h3>

                                <p>

                                    Pending

                                </p>

                            </div>

                        </div>


                        <div class="patient-appointment-stat-card">

                            <div class="patient-appointment-stat-icon">

                                <i class="fa-solid fa-circle-check"></i>

                            </div>

                            <div>

                                <h3 id="patientAppointmentCompleted">

                                    8

                                </h3>

                                <p>

                                    Completed

                                </p>

                            </div>

                        </div>


                        <div class="patient-appointment-stat-card">

                            <div class="patient-appointment-stat-icon">

                                <i class="fa-solid fa-xmark-circle"></i>

                            </div>

                            <div>

                                <h3 id="patientAppointmentCancelled">

                                    1

                                </h3>

                                <p>

                                    Cancelled

                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="patient-appointment-toolbar">

                        <div class="patient-appointment-search">

                            <i class="fa-solid fa-magnifying-glass"></i>

                            <input type="text" id="patientAppointmentSearch"
                                placeholder="Search doctor, department or date...">

                        </div>

                        <div class="patient-appointment-filter">

                            <select id="patientAppointmentStatusFilter">

                                <option value="all">

                                    All Status

                                </option>

                                <option value="Pending">

                                    Pending

                                </option>

                                <option value="Confirmed">

                                    Confirmed

                                </option>

                                <option value="Completed">

                                    Completed

                                </option>

                                <option value="Cancelled">

                                    Cancelled

                                </option>

                            </select>

                        </div>

                    </div>


                    <!--=====================================
        APPOINTMENT TABLE
======================================-->

                    <div class="patient-appointment-table-wrapper">

                        <table class="patient-appointment-table">

                            <thead>

                                <tr>

                                    <th>#</th>

                                    <th>Doctor</th>

                                    <th>Department</th>

                                    <th>Date</th>

                                    <th>Time</th>

                                    <th>Status</th>

                                    <th>Actions</th>

                                </tr>

                            </thead>

                            <tbody id="patientAppointmentTableBody">


                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </section>

</section>
<?php include ('frontend_footer.php'); ?>