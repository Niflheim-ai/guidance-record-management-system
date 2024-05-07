<?php
    session_start();

    // Redirect user to homepage if user is already logged in
    if (isset($_SESSION['userSession'])) {
        header("Location: home.php");
        exit();
    }
    else if (isset($_SESSION['adminSession'])) {
        header("Location: admin.php");
        exit();
    }
    else if (isset($_SESSION['studentSession'])) {
        header("Location: studenView.php");
        exit();
    }

    include('dbConnection.php');
    include('functions.php');

    $feedback = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- MDB CSS -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-icon" href="images/kld-logo.png">
    <title>GRMS - Register</title>

    <style>
        a:hover {
            color: skyblue;
        }

        .container {
            min-height: 600px;
        }
    </style>
</head>
<body>
    <!--                    Navbar                 -->

    <nav class="navbar navbar-expand-lg fixed-top navbar-white bg-white mb-5" style="border-bottom: 3px solid white; background-color: #597E52 !important; position: relative;">
        <div class="container-fluid">

            <div class="navbar-brand navbar-logo text-center">
                <a href="index.php" class="logo">
                    <p class="h3 text-white">Guidance Record Management System</p>
                </a>
            </div>

            <!--                    Collapse on smaller screens                 -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler mt-2"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></span>
            </button>

            <div class="navbar-collapse collapse text-start" id="navbarToggler">
                <ul class="items navbar-nav ms-auto">
                    <li class="nav-item mx-2">
                        <a data-bs-toggle="modal" data-bs-target="#T&CModal1" class="btn nav-link text-white">Terms & Conditions</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </nav>

    <!-- Ignore -->

    <div class="ring1"></div>
    <div class="ring2"></div>
    <div class="ring3"></div>
    <div class="ring4"></div>

    <!-- Register Form -->

    <section class="main">
        <div class="container main-container" id="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-container sign-in">
                        <form action="register.php" method="POST" class="form">
                            <span class="feedback text-danger"><?php echo $feedback; ?></span>
                            <h1>Sign Up</h1>
                            <input placeholder = "KLD ID" name = "student_username" required="required">
                            <input type ="password" placeholder = "Password" name = "student_password" required="required">
                            <input type ="password" placeholder = "Confirm Password" name = "student_confirmPassword" required="required">
                            <input placeholder = "First Name" name = "student_firstName" required="required">
                            <input placeholder = "Middle Name" name = "student_middleName" required="required">
                            <input placeholder = "Last Name" name = "student_lastName" required="required">
                            <select id="student_course" name="student_course" class="form-select" required="required">
                                <option value="" selected disabled hidden>-- Select Course --</option>
                                <option value="Information System">Information System</option>
                                <option value="Civil Engineering">Civil Engineering</option>
                                <option value="Nursing">Nursing</option>
                                <option value="Psychology">Psychology</option>
                                <option value="Midwifery">Midwifery</option>
                            </select>
                            <input placeholder = "Section" name = "student_section" required="required">
                            <button type="submit" id="registerBTN" name="btnRegister">Register</button>
                            <a href="login.php">Already have an account? Click Here</a>
                        </form>
                    </div>
                    <div class="toggle-container">
                        <div class="toggle">
                            <div class="toggle-panel toggle-right">
                                <img class="img-fluid" src="images/login-panel.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->

    <div class="modal fade" tabindex="-1" id="T&CModal" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal-title">Terms & Conditions</h1>
                </div>
                <div class="modal-body">
                    <p>
                        The terms and conditions outline the data collection, storage, retention, and analysis procedures for a system facilitating 
                        guidance and record management services provided by an institution. Users are required to provide accurate information, 
                        respect privacy, and refrain from unlawful activities. The institution ensures data privacy and security through 
                        encryption and compliance with relevant regulations. It disclaims liability for damages and reserves the right to 
                        terminate or suspend user access for violations. Disputes are subject to legal resolution, and users are notified of 
                        any updates or modifications to the terms. The system is intended solely for institutional purposes, and users must 
                        adhere to specified usage guidelines, with monitoring conducted to maintain system integrity.
                    </p>
                </div>
                <div class="modal-footer">
                    <input class="form-check-input" type="checkbox" id="agreeCheckbox">
                            <label class="form-check-label" for="agreeCheckbox">
                                I agree to the terms & conditions
                            </label>
                    <a href="terms-and-conditions.php" class="btn btn-secondary">View Details</a>
                    <a data-bs-dismiss="modal" class="btn btn-success disabled" id="acceptButton">I Accept</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="T&CModal1">
        <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal-title">Terms & Conditions</h1>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>
                <div class="modal-body">
                    <p>
                        The terms and conditions outline the data collection, storage, retention, and analysis procedures for a system facilitating 
                        guidance and record management services provided by an institution. Users are required to provide accurate information, 
                        respect privacy, and refrain from unlawful activities. The institution ensures data privacy and security through 
                        encryption and compliance with relevant regulations. It disclaims liability for damages and reserves the right to 
                        terminate or suspend user access for violations. Disputes are subject to legal resolution, and users are notified of 
                        any updates or modifications to the terms. The system is intended solely for institutional purposes, and users must 
                        adhere to specified usage guidelines, with monitoring conducted to maintain system integrity.
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="terms-and-conditions.php" class="btn btn-secondary">View Details</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>