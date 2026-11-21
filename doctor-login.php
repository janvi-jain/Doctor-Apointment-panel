<?php include ('frontend_header.php'); ?>
<section id="doctor-login">

    <section class="page-banner">

        <div class="container">

            <div class="breadcrumb">

                <a href="#" class="nav-link" data-page="home">Home</a>

                <span>›</span>

                Doctor Login

            </div>

            <h1>Doctor Login</h1>

            <p>
                Sign in to your professional portal.
            </p>

        </div>

    </section>

    <section class="login-section">

        <div class="container">

            <div class="login-card">
                <div class="login-icon">
                    👨‍⚕️
                </div>

                <h2>Doctor Login</h2>
                <p class="login-subtitle">
                    Sign in to your professional portal
                </p>

                <form id="doctorLoginForm">
                    <div class="input-group">
                        <label for="doctorEmail">
                            Doctor ID / Email
                        </label>
                        <input type="email" id="doctorEmail" placeholder="doctor@dokapp.com" required>
                    </div>

                    <div class="input-group">

                        <label for="doctorPassword">

                            Password

                        </label>

                        <div class="password-box">

                            <input type="password" id="doctorPassword" placeholder="••••••••" required>

                            <span id="toggleDoctorPassword" class="toggle-password">

                                👁

                            </span>

                        </div>

                    </div>

                    <div class="login-options">

                        <label class="remember">

                            <input type="checkbox" id="rememberDoctor">

                            Remember me

                        </label>

                        <a href="#">

                            Forgot password?

                        </a>

                    </div>

                    <button type="submit" class="doctor-login-btn">

                        Login to Portal →

                    </button>

                </form>

                <div class="login-footer">
                    <p>
                        Need portal access?
                        <a href="#">
                            Contact Admin
                        </a>
                    </p>
                </div>


                <div class="login-divider">
                    <span>
                        Are you a patient?
                    </span>
                </div>


                <!-- Patient Login Button -->

                <button type="button" class="patient-switch-btn">

                    Patient Login →

                </button>

            </div>

        </div>

    </section>

</section>
<?php include ('frontend_footer.php'); ?>