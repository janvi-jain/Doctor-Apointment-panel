<?php include ('frontend_header.php'); 
if(!isset($_SESSION['patientData'])) {
    header('location:patient-login.php');
}
?>
<section class="make-appointment-page">

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

                    Make Appointment

                </span>

            </div>

            <h1>

                Make Appointment

            </h1>

            <p>

                Book an appointment with your preferred doctor quickly and securely.

            </p>

        </div>

    </section>

    <section class="make-appointment-main">

        <div class="container">

            <div class="make-appointment-layout">

                <?php include ('./patient-aside.php'); ?>
                <div class="make-appointment-content">

                    <div class="make-appointment-card">

                        <div class="make-appointment-header">

                            <h2>

                                Book Appointment

                            </h2>

                            <p>

                                Select your preferred department, doctor, date and available time slot.

                            </p>

                        </div>

                        <form id="appointmentForm">

                            <div class="appointment-form-grid">

                                <!-- Department -->

                                <div class="appointment-form-group">

                                    <label>

                                        Department

                                    </label>

                                    <select id="appointmentDepartment" required>

                                        <option value="">

                                            Select Department

                                        </option>

                                        <option value="Cardiology">

                                            Cardiology

                                        </option>

                                        <option value="Neurology">

                                            Neurology

                                        </option>

                                        <option value="Orthopedic">

                                            Orthopedic

                                        </option>

                                        <option value="Dermatology">

                                            Dermatology

                                        </option>

                                        <option value="ENT">

                                            ENT Specialist

                                        </option>

                                        <option value="Pediatrics">

                                            Pediatrics

                                        </option>

                                    </select>

                                </div>


                                <!-- Doctor -->

                                <div class="appointment-form-group">

                                    <label>

                                        Doctor

                                    </label>

                                    <select id="appointmentDoctor" required>

                                        <option value="">

                                            Select Doctor

                                        </option>

                                    </select>

                                </div>


                                <!-- Date -->

                                <div class="appointment-form-group">

                                    <label>

                                        Appointment Date

                                    </label>

                                    <input type="date" id="appointmentDate" required>

                                </div>


                                <!-- Time -->

                                <div class="appointment-form-group">

                                    <label>

                                        Time Slot

                                    </label>

                                    <select id="appointmentTime" required>

                                        <option value="">

                                            Select Time Slot

                                        </option>

                                        <option>

                                            09:00 AM - 10:00 AM

                                        </option>

                                        <option>

                                            10:00 AM - 11:00 AM

                                        </option>

                                        <option>

                                            11:00 AM - 12:00 PM

                                        </option>

                                        <option>

                                            02:00 PM - 03:00 PM

                                        </option>

                                        <option>

                                            03:00 PM - 04:00 PM

                                        </option>

                                        <option>

                                            04:00 PM - 05:00 PM

                                        </option>

                                    </select>

                                </div>


                                <!-- Consultation Fee -->

                                <div class="appointment-form-group">

                                    <label>

                                        Consultation Fee

                                    </label>

                                    <input type="text" id="consultationFee" value="₹500" readonly>

                                </div>


                                <!-- Payment Method -->

                                <div class="appointment-form-group">

                                    <label>

                                        Payment Method

                                    </label>

                                    <select id="paymentMethod" required>

                                        <option value="">

                                            Select Payment Method

                                        </option>

                                        <option>

                                            Cash

                                        </option>

                                        <option>

                                            UPI

                                        </option>

                                        <option>

                                            Credit Card

                                        </option>

                                        <option>

                                            Debit Card

                                        </option>

                                    </select>

                                </div>


                                <!-- Notes -->

                                <div class="appointment-form-group appointment-full">

                                    <label>

                                        Appointment Notes

                                    </label>

                                    <textarea id="appointmentNotes" rows="5"
                                        placeholder="Describe your symptoms or reason for visit..."></textarea>

                                </div>

                            </div>
                            <div class="appointment-summary">

                                <h3>

                                    Appointment Summary

                                </h3>

                                <div class="summary-grid">

                                    <div>

                                        <span>Department</span>

                                        <strong id="summaryDepartment">

                                            -

                                        </strong>

                                    </div>

                                    <div>

                                        <span>Doctor</span>

                                        <strong id="summaryDoctor">

                                            -

                                        </strong>

                                    </div>

                                    <div>

                                        <span>Date</span>

                                        <strong id="summaryDate">

                                            -

                                        </strong>

                                    </div>

                                    <div>

                                        <span>Time</span>

                                        <strong id="summaryTime">

                                            -

                                        </strong>

                                    </div>

                                    <div>

                                        <span>Consultation Fee</span>

                                        <strong id="summaryFee">

                                            ₹500

                                        </strong>

                                    </div>

                                </div>

                            </div>

                            <div class="appointment-actions">

                                <button type="submit" class="appointment-book-btn">

                                    <i class="fa-solid fa-calendar-check"></i>

                                    Confirm Appointment

                                </button>

                                <button type="reset" class="appointment-reset-btn">

                                    <i class="fa-solid fa-rotate-left"></i>

                                    Reset

                                </button>

                            </div>

                            <div class="appointment-guidelines">

                                <h3>

                                    <i class="fa-solid fa-circle-info"></i>

                                    Appointment Guidelines

                                </h3>

                                <ul>

                                    <li>

                                        Please arrive at least <strong>15 minutes</strong> before your appointment.

                                    </li>

                                    <li>

                                        Carry your previous medical reports and prescriptions if available.

                                    </li>

                                    <li>

                                        Keep your mobile number active for appointment updates.

                                    </li>

                                    <li>

                                        If you are unable to attend, please cancel or reschedule your appointment.

                                    </li>

                                    <li>

                                        Consultation fees may vary depending on the selected doctor.

                                    </li>

                                </ul>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>

</section>
<?php include ('frontend_footer.php'); ?>