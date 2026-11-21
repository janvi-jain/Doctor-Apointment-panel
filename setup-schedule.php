<?php include ('frontend_header.php'); ?>
<section class="setup-schedule-page">

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

                    Setup Schedule

                </span>

            </div>

            <h1>

                Setup Schedule

            </h1>

            <p>

                Manage your consultation schedule and available appointment slots.

            </p>

        </div>

    </section>


    <!--=========================================
            MAIN
    ==========================================-->

    <section class="setup-schedule-main">

        <div class="container">

            <div class="setup-schedule-layout">


                <!--=========================================
                        SIDEBAR
                ==========================================-->

                <aside class="setup-schedule-sidebar">

                    <div class="setup-schedule-sidebar-top">

                        <img id="setupScheduleDoctorImage" src="images/doctors/doctor1.jpg" alt="Doctor">

                        <h3 id="setupScheduleDoctorName">

                            Dr. John Smith

                        </h3>

                        <p>

                            Doctor ID :
                            <span id="setupScheduleDoctorId">

                                DOC1001

                            </span>

                        </p>

                    </div>


                    <ul class="setup-schedule-menu">

                        <li>

                            <a href="#" class="nav-link setup-schedule-menu-link" data-page="doctor-dashboard">

                                <i class="fa-solid fa-house"></i>

                                Dashboard

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link setup-schedule-menu-link" data-page="doctor-profile">

                                <i class="fa-solid fa-user"></i>

                                My Profile

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link setup-schedule-menu-link" data-page="today-appointments">

                                <i class="fa-solid fa-calendar-check"></i>

                                Today's Appointments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="setup-schedule-menu-link active">

                                <i class="fa-solid fa-clock"></i>

                                Setup Schedule

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link setup-schedule-menu-link" data-page="add-leave">

                                <i class="fa-solid fa-calendar-xmark"></i>

                                Add Leave

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link setup-schedule-menu-link" data-page="treatment">

                                <i class="fa-solid fa-notes-medical"></i>

                                Treatments

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link setup-schedule-menu-link" data-page="doctor-withdrawal">

                                <i class="fa-solid fa-wallet"></i>

                                Withdrawal

                            </a>

                        </li>

                        <li>

                            <a href="#" class="nav-link setup-schedule-menu-link" data-page="home">

                                <i class="fa-solid fa-right-from-bracket"></i>

                                Logout

                            </a>

                        </li>

                    </ul>

                </aside>


                <!--=========================================
                        CONTENT
                ==========================================-->

                <div class="setup-schedule-content">

                    <div class="setup-schedule-card">

                        <div class="setup-schedule-header">

                            <h2>

                                Setup Your Schedule

                            </h2>

                            <p>

                                Add available consultation timings for patients.

                            </p>

                        </div>

                        <form id="setupScheduleForm">

                            <!--=========================================
            FORM GRID
    ==========================================-->

                            <div class="setup-schedule-form-grid">

                                <!-- Date -->

                                <div class="setup-schedule-form-group">

                                    <label>

                                        Select Date

                                    </label>

                                    <input type="date" id="scheduleDate" required>

                                </div>


                                <!-- Capacity -->

                                <div class="setup-schedule-form-group">

                                    <label>

                                        Patient Capacity

                                    </label>

                                    <input type="number" id="scheduleCapacity" placeholder="Enter capacity" min="1"
                                        value="10" required>

                                </div>


                                <!-- Start Time -->

                                <div class="setup-schedule-form-group">

                                    <label>

                                        Start Time

                                    </label>

                                    <input type="time" id="scheduleStartTime" required>

                                </div>


                                <!-- End Time -->

                                <div class="setup-schedule-form-group">

                                    <label>

                                        End Time

                                    </label>

                                    <input type="time" id="scheduleEndTime" required>

                                </div>


                                <!-- Consultation Fee -->

                                <div class="setup-schedule-form-group">

                                    <label>

                                        Consultation Fee (₹)

                                    </label>

                                    <input type="number" id="scheduleFee" placeholder="Enter consultation fee"
                                        value="500" min="0" required>

                                </div>


                                <!-- Room Number -->

                                <div class="setup-schedule-form-group">

                                    <label>

                                        Room Number

                                    </label>

                                    <input type="text" id="scheduleRoom" placeholder="Room No." value="101">

                                </div>

                            </div>


                            <!--=========================================
            BUTTON
    ==========================================-->

                            <div class="setup-schedule-buttons">

                                <button type="submit" class="setup-schedule-save-btn">

                                    <i class="fa-solid fa-calendar-plus"></i>

                                    Add Schedule

                                </button>

                                <button type="reset" class="setup-schedule-reset-btn">

                                    <i class="fa-solid fa-rotate-left"></i>

                                    Reset

                                </button>

                            </div>


                            <!--=========================================
            SCHEDULE TABLE
    ==========================================-->

                            <div class="setup-schedule-table-section">

                                <div class="setup-schedule-table-header">

                                    <h3>

                                        Existing Schedule

                                    </h3>

                                </div>

                                <div class="setup-schedule-table-wrapper">

                                    <table class="setup-schedule-table">

                                        <thead>

                                            <tr>

                                                <th>Date</th>

                                                <th>Start</th>

                                                <th>End</th>

                                                <th>Capacity</th>

                                                <th>Fee</th>

                                                <th>Room</th>

                                                <th>Action</th>

                                            </tr>

                                        </thead>

                                        <tbody id="scheduleTableBody">

                                            <!-- Schedule 1 -->

                                            <tr>

                                                <td>20 Jul 2026</td>

                                                <td>09:00 AM</td>

                                                <td>10:00 AM</td>

                                                <td>10</td>

                                                <td>₹500</td>

                                                <td>101</td>

                                                <td>

                                                    <button class="schedule-edit-btn">

                                                        <i class="fa-solid fa-pen-to-square"></i>

                                                    </button>

                                                    <button class="schedule-delete-btn">

                                                        <i class="fa-solid fa-trash"></i>

                                                    </button>

                                                </td>

                                            </tr>


                                            <!-- Schedule 2 -->

                                            <tr>

                                                <td>20 Jul 2026</td>

                                                <td>10:00 AM</td>

                                                <td>11:00 AM</td>

                                                <td>8</td>

                                                <td>₹500</td>

                                                <td>101</td>

                                                <td>

                                                    <button class="schedule-edit-btn">

                                                        <i class="fa-solid fa-pen-to-square"></i>

                                                    </button>

                                                    <button class="schedule-delete-btn">

                                                        <i class="fa-solid fa-trash"></i>

                                                    </button>

                                                </td>

                                            </tr>


                                            <!-- Schedule 3 -->

                                            <tr>

                                                <td>20 Jul 2026</td>

                                                <td>11:30 AM</td>

                                                <td>12:30 PM</td>

                                                <td>12</td>

                                                <td>₹700</td>

                                                <td>102</td>

                                                <td>

                                                    <button class="schedule-edit-btn">

                                                        <i class="fa-solid fa-pen-to-square"></i>

                                                    </button>

                                                    <button class="schedule-delete-btn">

                                                        <i class="fa-solid fa-trash"></i>

                                                    </button>

                                                </td>

                                            </tr>


                                            <!-- Schedule 4 -->

                                            <tr>

                                                <td>21 Jul 2026</td>

                                                <td>09:00 AM</td>

                                                <td>10:00 AM</td>

                                                <td>15</td>

                                                <td>₹600</td>

                                                <td>103</td>

                                                <td>

                                                    <button class="schedule-edit-btn">

                                                        <i class="fa-solid fa-pen-to-square"></i>

                                                    </button>

                                                    <button class="schedule-delete-btn">

                                                        <i class="fa-solid fa-trash"></i>

                                                    </button>

                                                </td>

                                            </tr>


                                            <!-- Schedule 5 -->

                                            <tr>

                                                <td>21 Jul 2026</td>

                                                <td>02:00 PM</td>

                                                <td>03:00 PM</td>

                                                <td>10</td>

                                                <td>₹500</td>

                                                <td>104</td>

                                                <td>

                                                    <button class="schedule-edit-btn">

                                                        <i class="fa-solid fa-pen-to-square"></i>

                                                    </button>

                                                    <button class="schedule-delete-btn">

                                                        <i class="fa-solid fa-trash"></i>

                                                    </button>

                                                </td>

                                            </tr>

                                        </tbody>

                                    </table>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

</section>
<?php include ('frontend_footer.php'); ?>