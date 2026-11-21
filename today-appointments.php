<?php include ('frontend_header.php'); ?>
<section class="today-appointments-page">

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

                    Today's Appointments

                </span>

            </div>

            <h1>

                Today's Appointments

            </h1>

            <p>

                View and manage all appointments scheduled for today.

            </p>

        </div>

    </section>


    <!--=========================================
            MAIN SECTION
    ==========================================-->

    <section class="today-appointments-main">

        <div class="container">

            <div class="today-appointments-layout">


                <!--=========================================
                        SIDEBAR
                ==========================================-->

                <aside class="today-appointments-sidebar">

                    <div class="today-appointments-sidebar-top">

                        <img id="todayAppointmentsDoctorImage" src="images/doctors/doctor1.jpg" alt="Doctor">

                        <h3 id="todayAppointmentsDoctorName">

                            Dr. John Smith

                        </h3>

                        <p>

                            Doctor ID :
                            <span id="todayAppointmentsDoctorId">

                                DOC1001

                            </span>

                        </p>

                    </div>


                    <ul class="today-appointments-menu">

                        <li>

                            <a href="#" class="nav-link today-appointments-menu-link" data-page="doctor-dashboard">

                                <i class="fa-solid fa-house"></i>

                                Dashboard

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link today-appointments-menu-link" data-page="doctor-profile">

                                <i class="fa-solid fa-user"></i>

                                My Profile

                            </a>

                        </li>

                        <li>

                            <a href="#" class="today-appointments-menu-link active">

                                <i class="fa-solid fa-calendar-check"></i>

                                Today's Appointments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link today-appointments-menu-link" data-page="setup-schedule">

                                <i class="fa-solid fa-clock"></i>

                                Setup Schedule

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link today-appointments-menu-link" data-page="add-leave">

                                <i class="fa-solid fa-calendar-xmark"></i>

                                Add Leave

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link today-appointments-menu-link" data-page="treatment">

                                <i class="fa-solid fa-notes-medical"></i>

                                Treatments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link today-appointments-menu-link" data-page="doctor-withdrawal">

                                <i class="fa-solid fa-wallet"></i>

                                Withdrawal

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link today-appointments-menu-link" data-page="home">

                                <i class="fa-solid fa-right-from-bracket"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </aside>


                <!--=========================================
                        CONTENT
                ==========================================-->

                <div class="today-appointments-content">

                    <div class="today-appointments-card">

                        <div class="today-appointments-header">

                            <h2>

                                Today's Appointment

                            </h2>

                            <p id="todayAppointmentsDate">

                                20 July 2026

                            </p>

                        </div>

                        <!--=========================================
        FILTER SECTION
==========================================-->

                        <div class="today-appointments-filter">

                            <div class="today-appointments-filter-group">

                                <label>

                                    Select Time Slot

                                </label>

                                <select id="todayAppointmentTime">

                                    <option value="all">

                                        All Time Slots

                                    </option>

                                    <option value="09:00 AM">

                                        09:00 AM - 10:00 AM

                                    </option>

                                    <option value="10:00 AM">

                                        10:00 AM - 11:00 AM

                                    </option>

                                    <option value="11:00 AM">

                                        11:00 AM - 12:00 PM

                                    </option>

                                    <option value="01:00 PM">

                                        01:00 PM - 02:00 PM

                                    </option>

                                    <option value="02:00 PM">

                                        02:00 PM - 03:00 PM

                                    </option>

                                    <option value="03:00 PM">

                                        03:00 PM - 04:00 PM

                                    </option>

                                </select>

                            </div>

                            <button id="todayAppointmentSearch" class="today-appointments-search-btn">

                                <i class="fa-solid fa-magnifying-glass"></i>

                                Search

                            </button>

                        </div>


                        <!--=========================================
        APPOINTMENTS TABLE
==========================================-->

                        <div class="today-appointments-table-wrapper">

                            <table class="today-appointments-table">

                                <thead>

                                    <tr>

                                        <th>SL</th>

                                        <th>Patient</th>

                                        <th>Age</th>

                                        <th>Fee</th>

                                        <th>Token</th>

                                        <th>Time</th>

                                        <th>Status</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody id="todayAppointmentsTable">

                                    <!-- Appointment 1 -->

                                    <tr data-time="09:00 AM">

                                        <td>1</td>

                                        <td>

                                            <strong>Rahul Patel</strong>

                                            <br>

                                            <small>+91 9876543210</small>

                                        </td>

                                        <td>28</td>

                                        <td>₹500</td>

                                        <td>101</td>

                                        <td>09:00 AM</td>

                                        <td>

                                            <span class="today-appointments-status completed">

                                                Completed

                                            </span>

                                        </td>

                                        <td>

                                            <button class="today-appointments-view-btn" data-patient="Rahul Patel">

                                                <i class="fa-solid fa-eye"></i>

                                            </button>

                                        </td>

                                    </tr>


                                    <!-- Appointment 2 -->

                                    <tr data-time="10:00 AM">

                                        <td>2</td>

                                        <td>

                                            <strong>Priya Shah</strong>

                                            <br>

                                            <small>+91 9876500001</small>

                                        </td>

                                        <td>35</td>

                                        <td>₹500</td>

                                        <td>102</td>

                                        <td>10:00 AM</td>

                                        <td>

                                            <span class="today-appointments-status pending">

                                                Pending

                                            </span>

                                        </td>

                                        <td>

                                            <button class="today-appointments-view-btn" data-patient="Priya Shah">

                                                <i class="fa-solid fa-eye"></i>

                                            </button>

                                        </td>

                                    </tr>


                                    <!-- Appointment 3 -->

                                    <tr data-time="11:00 AM">

                                        <td>3</td>

                                        <td>

                                            <strong>Amit Kumar</strong>

                                            <br>

                                            <small>+91 9988776655</small>

                                        </td>

                                        <td>42</td>

                                        <td>₹700</td>

                                        <td>103</td>

                                        <td>11:00 AM</td>

                                        <td>

                                            <span class="today-appointments-status ongoing">

                                                Ongoing

                                            </span>

                                        </td>

                                        <td>

                                            <button class="today-appointments-view-btn" data-patient="Amit Kumar">

                                                <i class="fa-solid fa-eye"></i>

                                            </button>

                                        </td>

                                    </tr>


                                    <!-- Appointment 4 -->

                                    <tr data-time="01:00 PM">

                                        <td>4</td>

                                        <td>

                                            <strong>Neha Verma</strong>

                                            <br>

                                            <small>+91 9123456780</small>

                                        </td>

                                        <td>31</td>

                                        <td>₹500</td>

                                        <td>104</td>

                                        <td>01:00 PM</td>

                                        <td>

                                            <span class="today-appointments-status pending">

                                                Pending

                                            </span>

                                        </td>

                                        <td>

                                            <button class="today-appointments-view-btn" data-patient="Neha Verma">

                                                <i class="fa-solid fa-eye"></i>

                                            </button>

                                        </td>

                                    </tr>


                                    <!-- Appointment 5 -->

                                    <tr data-time="03:00 PM">

                                        <td>5</td>

                                        <td>

                                            <strong>Rohan Mehta</strong>

                                            <br>

                                            <small>+91 9011223344</small>

                                        </td>

                                        <td>46</td>

                                        <td>₹600</td>

                                        <td>105</td>

                                        <td>03:00 PM</td>

                                        <td>

                                            <span class="today-appointments-status completed">

                                                Completed

                                            </span>

                                        </td>

                                        <td>

                                            <button class="today-appointments-view-btn" data-patient="Rohan Mehta">

                                                <i class="fa-solid fa-eye"></i>

                                            </button>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</section>
<?php include ('frontend_footer.php'); ?>