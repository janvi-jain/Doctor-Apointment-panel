<?php include ('frontend_header.php'); ?>
<section id="doctors">
    <section class="page-banner">

        <div class="container">

            <div class="breadcrumb">
                <a href="#">Home</a>
                <span>›</span>
                Doctors
            </div>

            <h1>Our Doctors</h1>

            <p>
                Find and book appointments with our expert specialists.
            </p>

        </div>

    </section>

    <div class="container">
        <div class="doctor-search">

            <button class="search-doctors-btn nav-link" data-page="search-doctors">

                Find Your Doctor

            </button>

            <input type="text" placeholder="Search Doctor">

            <select id="departmentFilter">
                <option value="All">All Departments</option>
                <option value="Cardiology">Cardiology</option>
                <option value="Neurology">Neurology</option>
                <option value="Orthopedic">Orthopedic</option>
                <option value="Pediatrician">Pediatrician</option>
                <option value="Dermatologist">Dermatologist</option>
                <option value="ENT Specialist">ENT Specialist</option>
            </select>

        </div>

        <div class="doctor-container">

            <div class="doctor-card" data-department="Cardiology">

                <div class="doctor-image">
                    <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png">
                </div>

                <div class="doctor-info">

                    <h3>Dr. John Smith</h3>

                    <h4>Cardiologist</h4>

                    <p>15 Years Experience</p>

                    <a href="#" class="nav-link" data-page="appointment">

                        Book Appointment

                    </a>

                </div>

            </div>

            <div class="doctor-card" data-department="Neurology">

                <div class="doctor-image">
                    <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png">
                </div>

                <div class="doctor-info">

                    <h3>Dr. George Steven</h3>

                    <h4>Neurologist</h4>

                    <p>12 Years Experience</p>

                    <a href="#" class="nav-link" data-page="appointment">

                        Book Appointment

                    </a>

                </div>

            </div>

            <div class="doctor-card" data-department="Orthopedic">

                <div class="doctor-image">
                    <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png">
                </div>

                <div class="doctor-info">

                    <h3>Dr. Michael Williams</h3>

                    <h4>Orthopedic</h4>

                    <p>10 Years Experience</p>

                    <a href="#" class="nav-link" data-page="appointment">

                        Book Appointment

                    </a>

                </div>

            </div>

            <div class="doctor-card" data-department="Pediatrician">

                <div class="doctor-image">
                    <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png">
                </div>

                <div class="doctor-info">

                    <h3>Dr. Rex Davis</h3>

                    <h4>Pediatrician</h4>

                    <p>9 Years Experience</p>

                    <a href="#" class="nav-link" data-page="appointment">

                        Book Appointment

                    </a>

                </div>

            </div>

            <div class="doctor-card" data-department="Dermatologist">

                <div class="doctor-image">
                    <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png">
                </div>

                <div class="doctor-info">

                    <h3>Dr. Emma Wilson</h3>

                    <h4>Dermatologist</h4>

                    <p>11 Years Experience</p>

                    <a href="#" class="nav-link" data-page="appointment">

                        Book Appointment

                    </a>

                </div>

            </div>

            <div class="doctor-card" data-department="ENT Specialist">

                <div class="doctor-image">
                    <img src="https://cdn-icons-png.flaticon.com/512/3774/3774299.png">
                </div>

                <div class="doctor-info">

                    <h3>Dr. Sophia Brown</h3>

                    <h4>ENT Specialist</h4>

                    <p>14 Years Experience</p>

                    <a href="#" class="nav-link" data-page="appointment">

                        Book Appointment

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>
<?php include ('frontend_footer.php'); ?>