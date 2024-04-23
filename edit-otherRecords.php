<?php
    session_start();

    if (!isset($_SESSION['adminSession'])) {
        header("Location: login.php");
        exit();
    }

    include('dbConnection.php');
    include('functions.php');

    EditOtherRecord($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet">
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="assets/DataTables/css/dataTables.dataTables.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/records-loa.css">
    <link rel="icon" type="image/x-icon" href="images/kld-logo.png">
    <title>GRMS - Leave of Absence</title>

    <style>
        @media (max-width: 768px) {
            .img-fluid {
                max-width: 5vw !important;
            }

            #currentTime {
                display: none;
            }
        }

        @media (max-width: 426px) {
            .img-fluid {
                max-width: 10vw !important;
            }

            #currentTime {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar" style="position: fixed; height: 100%; box-shadow: 14px 6px 18px -2px rgba(0,0,0,0.42); -webkit-box-shadow: 14px 6px 18px -2px rgba(0,0,0,0.42); -moz-box-shadow: 14px 6px 18px -2px rgba(0,0,0,0.42);">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-bars"></i> </button>
                <div class="sidebar-logo mt-3">
                    <a href="admin.php">Guidance Record Management System</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="adminprofile.php" class="sidebar-link">
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="admin.php" class="sidebar-link">
                        <i class="fa-solid fa-list-check"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#multi" aria-expanded="false" aria-controls="multi">
                        <i class="fa-solid fa-table-cells-large"></i>
                        <span>Records</span>
                    </a>
                    <ul id="multi" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="admin-records-loa.php" class="sidebar-link">
                                Leave of Absence
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="admin-records-aaf.php" class="sidebar-link">
                                Absence Approval Form
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="admin-records-counselling.php" class="sidebar-link">
                                Couseling/Consultation
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="admin-records-other.php" class="sidebar-link">
                                Others
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a role="button" class="sidebar-link" onclick="confirmLogout()">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </aside>

        <!------------------------------------------------MAIN--------------------------------------------------------------->

        <div class="main" style="margin-left: 70px">
            <nav class="navbar d-flex px-4 py-2" style="background-color: #f5f5f5; box-shadow: -8px 17px 14px -11px rgba(0,0,0,0.42); -webkit-box-shadow: -8px 17px 14px -11px rgba(0,0,0,0.42); -moz-box-shadow: -8px 17px 14px -11px rgba(0,0,0,0.42);">
                <a href="home.php"><img src="images/kld-logo.png" alt="" class="img-fluid" style="max-width: 3vw;"></a>
                <p id="currentTime" class="h6 fw-bold ms-auto" style="margin-right: 20px">Time</p>
                <p class="h6 fw-bold">You are logged in as: <?php echo $_SESSION['adminSession'] ?></p>
            </nav>

            <main class="content px-3 py-4">
                <p class="h1 mb-3 fw-bold text-center">Edit Record</p>
                    <!-- Table -->
                    <?php fetchOtherRecordDetails($conn); ?>
                </div>
            </main>

            <!---------------------------RINGS----------------------------------->
            <div class="ring1"></div>
            <div class="ring2"></div>
            <div class="ring3"></div>
            <div class="ring4"></div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" tabindex="-1" id="logoutModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal-title">Confirm Logout</h1>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                    <a href="logout.php"><button type="button" class="btn btn-success">Yes</button></a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/DataTables/js/dataTables.js"></script>
    <script src="js/script.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script> -->

    <script>
        $('#loa-table').dataTable({
            aLengthMenu: [
                [10, 20, 50, 100, -1],
                [10, 20, 50, 100, "All"]
            ],
            iDisplayLength: -1
        });
    </script>

    <script>
        // Function to update current date and time
        function updateCurrentDateTime() {
            var currentDateTime = new Date();

            var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
            var monthIndex = currentDateTime.getMonth();
            var month = months[monthIndex];
            var day = currentDateTime.getDate();
            var year = currentDateTime.getFullYear();

            var hours = currentDateTime.getHours();
            var minutes = currentDateTime.getMinutes();
            var ampm = hours >= 12 ? 'PM' : 'AM';

            // Convert hours from 24-hour to 12-hour format
            hours = hours % 12;
            hours = hours ? hours : 12; // 0 should be treated as 12

            // Add leading zero if single digit
            hours = (hours < 10 ? "0" : "") + hours;
            minutes = (minutes < 10 ? "0" : "") + minutes;

            // Format the date and time
            var formattedDateTime = month + " " + day + ", " + year + " / " + hours + ":" + minutes + " " + ampm;

            // Update the content of the span element
            document.getElementById('currentTime').textContent = formattedDateTime;
        }

        // Call the function to update current date and time immediately
        updateCurrentDateTime();

        // Update current date and time every minute
        setInterval(updateCurrentDateTime, 60000);
    </script>
</body>
</html>