<?php
    session_start();

    if (!isset($_SESSION['adminSession'])) {
        header("Location: login.php");
        exit();
    }

    include('dbConnection.php');
    include('functions.php');

    $queryAbsence = "SELECT * FROM absence_approval_form";
    $resultAbsence = mysqli_query($conn, $queryAbsence);

    $totalAbsenceRecord = getAbsenceRecords($conn);
    $totalAbsenceToday = getAbsenceRecordsCurrentDay($conn);
    $totalAbsenceRecordMonth = getAbsenceRecordsCurrentMonth($conn);
    $totalAbsenceRecordYear = getAbsenceRecordsCurrentYear($conn);

    deleteAbsenceRecord($conn);

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
                <p class="h1 mb-3 fw-bold text-center">Absence Approval Form</p>
                <!-- Statistics Card -->
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                        <div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(211, 183, 23, 0.5)">
                                <p class="fw-bold h4 d-flex justify-content-center">Overall Records</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(244, 246, 107, 0.28)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalAbsenceRecord ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                        <div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(211, 183, 23, 0.5)">
                                <p class="fw-bold h4 d-flex justify-content-center">Records This Day</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(244, 246, 107, 0.28)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalAbsenceToday ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                        <div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(211, 183, 23, 0.5)">
                                <p class="fw-bold h4 d-flex justify-content-center">Records This Month</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(244, 246, 107, 0.28)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalAbsenceRecordMonth ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                        <div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(211, 183, 23, 0.5)">
                                <p class="fw-bold h4 d-flex justify-content-center align-items-center">Records This Year</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(244, 246, 107, 0.28)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalAbsenceRecordYear ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div>

                    <!-- Add/Remove Button -->
                    <div class="row mt-5">
                        <div class="col-lg-4 col-md-4 mb-4">
                            <div class="button">
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addRecord">Add Record</button>
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Archive Record</button>
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
                                                <th class="text-center">Record ID</th>
                                                <th class="text-center">First Name</th>
                                                <th class="text-center">Middle Name</th>
                                                <th class="text-center">Last Name</th>
                                                <th class="text-center">Gender</th>
                                                <th class="text-center">Course</th>
                                                <th class="text-center">Year</th>
                                                <th class="text-center">Section</th>
                                                <th class="text-center">Reason</th>
                                                <th class="text-center">Remarks</th>
                                                <th class="text-center">Date Added</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <?php
                                                    while($row = mysqli_fetch_assoc($resultAbsence)) {
                                                        $recordID = $row['record_ID'];
                                                ?>

                                                <td><?php echo $row['record_ID']?></td>
                                                <td class="firstName"><?php echo $row['firstName']?></td>
                                                <td class="middleName"><?php echo $row['middleName']?></td>
                                                <td class="lastName"><?php echo $row['lastName']?></td>
                                                <td class="gender"><?php echo $row['gender']?></td>
                                                <td class="course"><?php echo $row['course']?></td>
                                                <td class="year"><?php echo $row['year']?></td>
                                                <td class="section"><?php echo $row['section']?></td>
                                                <td class="reason"><?php echo $row['reason']?></td>
                                                <td class="remarks"><?php echo $row['remarks']?></td>
                                                <td class="text-center"><?php echo date('M d Y', strtotime($row['date']))?></td>
                                                <td><a href="edit-absenceRecord.php?record_ID=<?php echo $recordID ?>" type="button" class="btn btn-warning edit-record-btn">Edit</a></td>
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

    <!-- Add Record Modal -->
    <div class="modal fade" tabindex="-1" id="addRecord">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal-title">Add Record - Absence Application Form</h1>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" class="form">
                        <div class="form-group">
                            <label for="record_firstName" class="mb-3">Personal Details</label>
                            <input id="record_firstName" name="record_firstName" placeholder="First Name" type="text" required="required" class="form-control mb-3">
                        </div>
                        <div class="form-group">
                            <input id="record_middleName" name="record_middleName" placeholder="Middle Name (Optional)" type="text" class="form-control mb-3">
                        </div>
                        <div class="form-group mb-3">
                            <input id="record_lastName" name="record_lastName" placeholder="Last Name" type="text" required="required" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_gender" class="mb-3">Gender</label>
                            <div>
                                <select id="record_gender" name="record_gender" class="form-select" placeholder="Gender" required="required" aria-describedby="record_genderHelpBlock">
                                    <option value="" selected hidden disabled>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Binary">Binary</option>
                                    <option value="Non-Binary">Non-Binary</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_department" class="mb-3">Course</label>
                            <div>
                                <select id="record_department" name="record_department" class="form-select" aria-describedby="record_departmentHelpBlock">
                                    <option value="N/A">N/A</option>
                                    <option value="Information System">Information System</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Nursing">Nursing</option>
                                    <option value="Psychology">Psychology</option>
                                    <option value="Midwifery">Midwifery</option>
                                </select>
                                <span id="record_departmentHelpBlock" class="form-text text-muted">*Do not fill up if not a student</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_year" class="mb-3">Year</label>
                            <div>
                                <select id="record_year" name="record_year" class="form-select" aria-describedby="record_yearHelpBlock">
                                    <option value="N/A">N/A</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                </select>
                                <span id="record_yearHelpBlock" class="form-text text-muted">*Do not fill up if not a student</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_section" class="mb-3">Section</label>
                            <input id="record_section" name="record_section" type="text" class="form-control" aria-describedby="record_sectionHelpBlock">
                            <span id="record_sectionHelpBlock" class="form-text text-muted">*Do not fill up if not a student</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_reason" class="mb-3">Reason</label>
                            <input id="record_reason" name="record_reason" type="text" class="form-control" aria-describedby="record_reasonHelpBlock" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_remarks" class="mb-3">Remarks</label>
                            <input id="record_remarks" name="record_remarks" type="text" class="form-control" aria-describedby="record_remarksHelpBlock" required="required">
                        </div>
                        <div class="form-group">
                            <div class="col-3 d-grid offset-9">
                                <button name="addRecord" type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Record Modal -->
    <div class="modal fade" tabindex="-1" id="deleteRecordModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal-title">Remove Record</h1>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST" class="form">
                        <div class="form-group row mb-3">
                        <label for="productName" class="col-4 col-form-label text-black">Record ID</label>
                            <div class="col-8">
                                <select name="record_ID" id="recordID" class="form-select" required="required" placeholder="Select Record ID">
                                    <?php
                                        $selectRecord = "SELECT * FROM absence_approval_form";
                                        $resultSelect = mysqli_query($conn, $selectRecord);

                                        while ($row = mysqli_fetch_assoc($resultSelect)) {
                                            echo "<option value=".$row['record_ID'].">".$row['record_ID']."</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-3 d-grid offset-9">
                                <button name="deleteRecord" type="submit" class="btn btn-success">Remove Record</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Record Modal -->
    <div class="modal fade" tabindex="-1" id="editRecordModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modal-title">Edit Record</h1>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></a>
                </div>
                <div class="modal-body">
                <form action="#" method="POST" class="form">
                        <div class="form-group">
                            <label for="record_firstName" class="mb-3">Personal Details</label>
                            <input id="record_firstName" name="record_firstName" placeholder="First Name" type="text" required="required" class="form-control mb-3">
                        </div>
                        <div class="form-group">
                            <input id="record_middleName" name="record_middleName" placeholder="Middle Name (Optional)" type="text" class="form-control mb-3">
                        </div>
                        <div class="form-group mb-3">
                            <input id="record_lastName" name="record_lastName" placeholder="Last Name" type="text" required="required" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_gender" class="mb-3">Gender</label>
                            <div>
                                <select id="record_gender" name="record_gender" class="form-select" placeholder="Gender" aria-describedby="record_genderHelpBlock">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Binary">Binary</option>
                                    <option value="Non-Binary">Non-Binary</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_department" class="mb-3">Course</label>
                            <div>
                                <select id="record_department" name="record_department" class="form-select" aria-describedby="record_departmentHelpBlock">
                                    <option value="N/A">N/A</option>
                                    <option value="Information System">Information System</option>
                                    <option value="Civil Engineering">Civil Engineering</option>
                                    <option value="Nursing">Nursing</option>
                                    <option value="Psychology">Psychology</option>
                                    <option value="Midwifery">Midwifery</option>
                                </select>
                                <span id="record_departmentHelpBlock" class="form-text text-muted">*Do not fill up if not a student</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_year" class="mb-3">Year</label>
                            <div>
                                <select id="record_year" name="record_year" class="form-select" aria-describedby="record_yearHelpBlock">
                                    <option value="N/A">N/A</option>
                                    <option value="1st Year">1st Year</option>
                                    <option value="2nd Year">2nd Year</option>
                                    <option value="3rd Year">3rd Year</option>
                                    <option value="4th Year">4th Year</option>
                                </select>
                                <span id="record_yearHelpBlock" class="form-text text-muted">*Do not fill up if not a student</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_section" class="mb-3">Section</label>
                            <input id="record_section" name="record_section" type="text" class="form-control" aria-describedby="record_sectionHelpBlock">
                            <span id="record_sectionHelpBlock" class="form-text text-muted">*Do not fill up if not a student</span>
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_reason" class="mb-3">Reason</label>
                            <input id="record_reason" name="record_reason" type="text" class="form-control" aria-describedby="record_reasonHelpBlock" required="required">
                        </div>
                        <div class="form-group mb-3">
                            <label for="record_remarks" class="mb-3">Remarks</label>
                            <input id="record_remarks" name="record_remarks" type="text" class="form-control" aria-describedby="record_remarksHelpBlock" required="required">
                        </div>
                        <div class="form-group">
                            <div class="col-3 d-grid offset-9">
                                <button name="editRecord" type="submit" class="btn btn-success">Submit</button>
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

    <?php addAbsenceRecord($conn); ?>

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