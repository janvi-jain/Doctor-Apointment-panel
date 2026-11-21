<?php include ('frontend_header.php'); ?>
<section class="doctor-dashboard-page">
    <section class="page-banner">

        <div class="container">

            <div class="breadcrumb">

                <a href="#" class="nav-link" data-page="home">

                    Home

                </a>

                <span>›</span>

                <span>

                    Doctor Dashboard

                </span>

            </div>

            <h1>

                Doctor Dashboard

            </h1>

            <p>

                Manage appointments, patients, schedules and your professional profile from one place.

            </p>

        </div>

    </section>


    <!--=========================================
            MAIN DASHBOARD
    ==========================================-->

    <section class="doctor-dashboard-main">

        <div class="container">

            <div class="doctor-dashboard-layout">


                <!--=========================================
                        SIDEBAR
                ==========================================-->

                <aside class="doctor-dashboard-sidebar">

                    <div class="doctor-dashboard-profile">

                        <img src="images/doctors/doctor1.jpg" alt="Doctor">

                        <h3 id="dashboardDoctorName">

                            Dr. John Smith

                        </h3>

                        <p>

                            Doctor ID :
                            <span>

                                DOC1001

                            </span>

                        </p>

                    </div>


                    <ul class="doctor-dashboard-menu">

                        <li>

                            <a href="#" class="doctor-dashboard-menu-link active">

                                <i class="fa-solid fa-house"></i>

                                Dashboard

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-dashboard-menu-link" data-page="today-appointments">

                                <i class="fa-solid fa-calendar-check"></i>

                                Today's Appointments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-dashboard-menu-link" data-page="setup-schedule">

                                <i class="fa-solid fa-clock"></i>

                                Setup Schedule

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-dashboard-menu-link" data-page="add-leave">

                                <i class="fa-solid fa-calendar-xmark"></i>

                                Add Leave

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-dashboard-menu-link" data-page="treatment">

                                <i class="fa-solid fa-notes-medical"></i>

                                Treatments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-dashboard-menu-link" data-page="doctor-withdrawal">

                                <i class="fa-solid fa-wallet"></i>

                                Withdrawal

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-dashboard-menu-link" data-page="doctor-profile">

                                <i class="fa-solid fa-user-gear"></i>

                                My Profile

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link doctor-dashboard-menu-link" data-page="home">

                                <i class="fa-solid fa-right-from-bracket"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </aside>



                <!--=========================================
                        RIGHT SIDE
                ==========================================-->

                <div class="doctor-dashboard-content">

                    <div class="doctor-dashboard-header">

                        <h2>

                            Welcome Back,

                            <span id="dashboardDoctorTitle">

                                Dr. John Smith

                            </span>

                        </h2>

                        <p>

                            Here's a quick overview of today's activities.

                        </p>

                    </div>


                    <!--=========================================
                            PART 2
                    ==========================================-->

                    <div class="doctor-dashboard-stats">

                        <!-- Pending Appointments -->

                        <div class="doctor-dashboard-stat-card">

                            <div class="doctor-dashboard-stat-icon">

                                <i class="fa-solid fa-calendar-plus"></i>

                            </div>

                            <div class="doctor-dashboard-stat-info">

                                <h3 id="dashboardPendingAppointments">

                                    12

                                </h3>

                                <p>

                                    Pending Appointments

                                </p>

                            </div>

                        </div>


                        <!-- Today's Appointments -->

                        <div class="doctor-dashboard-stat-card">

                            <div class="doctor-dashboard-stat-icon">

                                <i class="fa-solid fa-calendar-check"></i>

                            </div>

                            <div class="doctor-dashboard-stat-info">

                                <h3 id="dashboardTodayAppointments">

                                    8

                                </h3>

                                <p>

                                    Today's Appointments

                                </p>

                            </div>

                        </div>


                        <!-- Total Patients -->

                        <div class="doctor-dashboard-stat-card">

                            <div class="doctor-dashboard-stat-icon">

                                <i class="fa-solid fa-user-group"></i>

                            </div>

                            <div class="doctor-dashboard-stat-info">

                                <h3 id="dashboardPatients">

                                    245

                                </h3>

                                <p>

                                    Total Patients

                                </p>

                            </div>

                        </div>


                        <!-- Today's Earnings -->

                        <div class="doctor-dashboard-stat-card">

                            <div class="doctor-dashboard-stat-icon">

                                <i class="fa-solid fa-wallet"></i>

                            </div>

                            <div class="doctor-dashboard-stat-info">

                                <h3 id="dashboardTodayEarning">

                                    ₹12,500

                                </h3>

                                <p>

                                    Today's Earnings

                                </p>

                            </div>

                        </div>


                        <!-- Lifetime Earnings -->

                        <div class="doctor-dashboard-stat-card">

                            <div class="doctor-dashboard-stat-icon">

                                <i class="fa-solid fa-sack-dollar"></i>

                            </div>

                            <div class="doctor-dashboard-stat-info">

                                <h3 id="dashboardLifetimeEarning">

                                    ₹18,75,000

                                </h3>

                                <p>

                                    Lifetime Earnings

                                </p>

                            </div>

                        </div>


                        <!-- Reviews -->

                        <div class="doctor-dashboard-stat-card">

                            <div class="doctor-dashboard-stat-icon">

                                <i class="fa-solid fa-star"></i>

                            </div>

                            <div class="doctor-dashboard-stat-info">

                                <h3 id="dashboardReviews">

                                    4.9 ★

                                </h3>

                                <p>

                                    Patient Reviews

                                </p>

                            </div>

                        </div>

                    </div>


                    <!--=========================================
                            PART 3
                    ==========================================-->

                    <div class="doctor-dashboard-appointments">

                        <div class="doctor-dashboard-section-header">

                            <h3>

                                <i class="fa-solid fa-calendar-day"></i>

                                Today's Appointments

                            </h3>

                            <a href="#" class="nav-link doctor-dashboard-view-all" data-page="today-appointments">

                                View All →

                            </a>

                        </div>

                        <div class="doctor-dashboard-table-wrapper">

                            <table class="doctor-dashboard-table">

                                <thead>

                                    <tr>

                                        <th>Patient</th>

                                        <th>Time</th>

                                        <th>Problem</th>

                                        <th>Status</th>

                                        <th>Action</th>

                                    </tr>

                                </thead>

                                <tbody id="dashboardAppointmentTable">

                                    <tr>

                                        <td>

                                            Rahul Patel

                                        </td>

                                        <td>

                                            09:00 AM

                                        </td>

                                        <td>

                                            Heart Checkup

                                        </td>

                                        <td>

                                            <span class="doctor-dashboard-status pending">

                                                Pending

                                            </span>

                                        </td>

                                        <td>

                                            <button class="doctor-dashboard-action-btn">

                                                View

                                            </button>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            Priya Shah

                                        </td>

                                        <td>

                                            10:30 AM

                                        </td>

                                        <td>

                                            ECG Review

                                        </td>

                                        <td>

                                            <span class="doctor-dashboard-status completed">

                                                Completed

                                            </span>

                                        </td>

                                        <td>

                                            <button class="doctor-dashboard-action-btn">

                                                Details

                                            </button>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            Amit Kumar

                                        </td>

                                        <td>

                                            11:15 AM

                                        </td>

                                        <td>

                                            Chest Pain

                                        </td>

                                        <td>

                                            <span class="doctor-dashboard-status ongoing">

                                                Ongoing

                                            </span>

                                        </td>

                                        <td>

                                            <button class="doctor-dashboard-action-btn">

                                                Treat

                                            </button>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            Neha Verma

                                        </td>

                                        <td>

                                            01:30 PM

                                        </td>

                                        <td>

                                            Blood Pressure

                                        </td>

                                        <td>

                                            <span class="doctor-dashboard-status pending">

                                                Pending

                                            </span>

                                        </td>

                                        <td>

                                            <button class="doctor-dashboard-action-btn">

                                                View

                                            </button>

                                        </td>

                                    </tr>

                                    <tr>

                                        <td>

                                            Rohan Mehta

                                        </td>

                                        <td>

                                            03:00 PM

                                        </td>

                                        <td>

                                            Follow-up

                                        </td>

                                        <td>

                                            <span class="doctor-dashboard-status pending">

                                                Pending

                                            </span>

                                        </td>

                                        <td>

                                            <button class="doctor-dashboard-action-btn">

                                                View

                                            </button>

                                        </td>

                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>


                    <!--=========================================
                            PART 4
                    ==========================================-->

                    <div class="doctor-dashboard-bottom">

                        <!--=========================================
            REVENUE SUMMARY
    ==========================================-->

                        <div class="doctor-dashboard-revenue-card">

                            <div class="doctor-dashboard-section-header">

                                <h3>

                                    <i class="fa-solid fa-chart-line"></i>

                                    Revenue Summary

                                </h3>

                            </div>

                            <div class="doctor-dashboard-revenue-list">

                                <div class="doctor-dashboard-revenue-item">

                                    <span>

                                        Today's Revenue

                                    </span>

                                    <strong id="dashboardRevenueToday">

                                        ₹12,500

                                    </strong>

                                </div>

                                <div class="doctor-dashboard-revenue-item">

                                    <span>

                                        This Week

                                    </span>

                                    <strong>

                                        ₹78,000

                                    </strong>

                                </div>

                                <div class="doctor-dashboard-revenue-item">

                                    <span>

                                        This Month

                                    </span>

                                    <strong>

                                        ₹3,45,000

                                    </strong>

                                </div>

                                <div class="doctor-dashboard-revenue-item">

                                    <span>

                                        Lifetime

                                    </span>

                                    <strong>

                                        ₹18,75,000

                                    </strong>

                                </div>

                            </div>

                        </div>



                        <!--=========================================
            RECENT PATIENTS
    ==========================================-->

                        <div class="doctor-dashboard-patients-card">

                            <div class="doctor-dashboard-section-header">

                                <h3>

                                    <i class="fa-solid fa-users"></i>

                                    Recent Patients

                                </h3>

                            </div>

                            <div class="doctor-dashboard-patient-list">

                                <div class="doctor-dashboard-patient-item">

                                    <img src="https://i.pravatar.cc/60?img=12" alt="Patient">

                                    <div>

                                        <h4>

                                            Rahul Patel

                                        </h4>

                                        <p>

                                            Heart Checkup

                                        </p>

                                    </div>

                                </div>

                                <div class="doctor-dashboard-patient-item">

                                    <img src="https://i.pravatar.cc/60?img=32" alt="Patient">

                                    <div>

                                        <h4>

                                            Priya Shah

                                        </h4>

                                        <p>

                                            ECG Review

                                        </p>

                                    </div>

                                </div>

                                <div class="doctor-dashboard-patient-item">

                                    <img src="https://i.pravatar.cc/60?img=25" alt="Patient">

                                    <div>

                                        <h4>

                                            Amit Kumar

                                        </h4>

                                        <p>

                                            Follow-up Visit

                                        </p>

                                    </div>

                                </div>

                                <div class="doctor-dashboard-patient-item">

                                    <img src="https://i.pravatar.cc/60?img=47" alt="Patient">

                                    <div>

                                        <h4>

                                            Neha Verma

                                        </h4>

                                        <p>

                                            Blood Pressure

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

</section>
<?php include ('frontend_footer.php'); ?>