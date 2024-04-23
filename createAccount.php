<?php
    session_start();

    if (!isset($_SESSION['adminSession'])) {
        header("Location: login.php");
        exit();
    }

    include('dbConnection.php');
    include('functions.php');

    $queryAccounts = "SELECT * FROM staff";
    $resultAccounts = mysqli_query($conn, $queryAccounts);
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
    <title>GRMS - Absence</title>

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

        .password {
            -webkit-text-security: disc;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <aside id="sidebar" style="position: fixed; height: 100%;">
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

                        <li class="sidebar-item">
                            <a href="records-archived.php" class="sidebar-link">
                                Archived
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a href="createAccount.php" role="button" class="sidebar-link" class="btn">
                        <i class="fa-solid fa-shield-halved"></i>
                        <span>Create Staff Account</span>
                    </a>
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
                <p class="h1 mb-3 fw-bold text-center">Create Staff Account</p>
                <!-- Statistics Card -->
                <div class="row">

                    <!-- Add/Remove Button -->
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-4 mb-4">
                            <div class="button">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addRecordModal">Create Account</button>
                                <!-- <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Archive Record</button> -->
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="row mx-auto">
                        <div class="card text-center">
                            <div class="card-header mb-n5">
                                <p class="h3">Record Table</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="aaf-table" class="table table-striped data-table text-center" style="width: 100%">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Staff ID</th>
                                                <th class="text-center">First Name</th>
                                                <th class="text-center">Middle Name</th>
                                                <th class="text-center">Last Name</th>
                                                <th class="text-center">Contact Number</th>
                                                <th class="text-center">Username</th>
                                                <th class="text-center">Password</th>
                                                <!-- <th></th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                    while($row = mysqli_fetch_assoc($resultAccounts)) {
                                                        $staffID = $row['staff_ID'];
                                                ?>

                                                <td><?php echo $row['staff_ID']?></td>
                                                <td class="firstName"><?php echo $row['staff_firstName']?></td>
                                                <td class="middleName"><?php echo $row['staff_middleName']?></td>
                                                <td class="lastName"><?php echo $row['staff_lastName']?></td>
                                                <td class="contactNum"><?php echo $row['staff_contactNum']?></td>
                                                <td class="username"><?php echo $row['username']?></td>
                                                <td class="password"><?php echo $row['password']?></td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <!---------------------------RINGS----------------------------------->
            <div class="ring1"></div>
            <div class="ring2"></div>
            <div class="ring3"></div>
            <div class="ring4"></div>


            <!---------------------FOOTER------------------------------>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-body-secondary">
                        <div class="col-6 text-start ">
                            <a class="text-body-secondary" href=" #">
                                <strong>Guidance Record Management System</strong>
                            </a>
                        </div>
                        <div class="col-6 text-end text-body-secondary d-none d-md-block">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">Contact</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">About Us</a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="text-body-secondary" href="#">Terms & Conditions</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
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

    <!-- Create Account Modal -->
    <div class="modal fade" tabindex="-1" id="addRecordModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal-title">Create Staff Account</h1>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>
                <div class="modal-body">
                <form action="#" method="POST" class="form">
                        <div class="form-group">
                            <label for="firstName" class="mb-3">Personal Details</label>
                            <input id="firstName" name="firstName" placeholder="First Name" type="text" required="required" class="form-control mb-3">
                        </div>
                        <div class="form-group">
                            <input id="middleName" name="middleName" placeholder="Middle Name (Optional)" type="text" class="form-control mb-3">
                        </div>
                        <div class="form-group mb-3">
                            <input id="lastName" name="lastName" placeholder="Last Name" type="text" required="required" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input id="contactNum" name="contactNum" placeholder="Contact Number (Optional)" type="text" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="username" class="mb-3">Account</label>
                            <input id="username" name="username" placeholder="Username" type="text" required="required" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input id="password" name="password" placeholder="Password" type="password" required="required" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="col-3 d-grid offset-9">
                                <button name="createBtn" type="submit" class="btn btn-success">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/DataTables/js/dataTables.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
    <!-- <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script> -->

    <!-- <script>
        $('#other-table').dataTable({
            aLengthMenu: [
                [10, 20, 50, 100, -1],
                [10, 20, 50, 100, "All"]
            ],
            iDisplayLength: -1
        });
    </script> -->

    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Confirm Logout',
                text: 'Are you sure you want to logout?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms, proceed with logout
                    window.location.href = "logout.php";
                }
            });
        }
    </script>

    <?php createAccount($conn); ?>

    <script>
        $(document).ready(function () {
            // Setup - add a text input to each footer cell
            $('#aaf-table thead tr')
                .clone(true)
                .addClass('filters')
                .appendTo('#aaf-table thead');
        
            var table = $('#aaf-table').DataTable({
                orderCellsTop: true,
                fixedHeader: true,
                aLengthMenu: [
                    [10, 20, 50, 100, -1],
                    [10, 20, 50, 100, "All"]
                ],
                iDisplayLength: -1,
                initComplete: function () {
                    var api = this.api();
        
                    // For each column
                    api
                        .columns()
                        .eq(0)
                        .each(function (colIdx) {
                            // Set the header cell to contain the input element
                            var cell = $('.filters th').eq(
                                $(api.column(colIdx).header()).index()
                            );
                            var title = $(cell).text();
                            $(cell).html('<input type="text" class="w-75" placeholder="' + title + '" />');
        
                            // On every keypress in this input
                            $(
                                'input',
                                $('.filters th').eq($(api.column(colIdx).header()).index())
                            )
                                .off('keyup change')
                                .on('change', function (e) {
                                    // Get the search value
                                    $(this).attr('title', $(this).val());
                                    var regexr = '({search})'; //$(this).parents('th').find('select').val();
        
                                    var cursorPosition = this.selectionStart;
                                    // Search the column for that value
                                    api
                                        .column(colIdx)
                                        .search(
                                            this.value != ''
                                                ? regexr.replace('{search}', '(((' + this.value + ')))')
                                                : '',
                                            this.value != '',
                                            this.value == ''
                                        )
                                        .draw();
                                })
                                .on('keyup', function (e) {
                                    e.stopPropagation();
        
                                    $(this).trigger('change');
                                    $(this)
                                        .focus()[0]
                                        .setSelectionRange(cursorPosition, cursorPosition);
                                });
                        });
                },
            });
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