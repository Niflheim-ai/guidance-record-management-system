<?php
    session_start();

    if (!isset($_SESSION['userSession'])) {
        header("Location: login.php");
        exit();
    }

    include('dbConnection.php');
    include('functions.php');

    $queryLeave = "SELECT * FROM leave_of_absence";
    $resultLeave = mysqli_query($conn, $queryLeave);

    $queryAbsence = "SELECT * FROM absence_approval_form";
    $resultAbsence = mysqli_query($conn, $queryAbsence);

    $queryCounselling = "SELECT * FROM counselling";
    $resultCounselling = mysqli_query($conn, $queryCounselling);

    $queryOthers = "SELECT * FROM others";
    $resultOthers = mysqli_query($conn, $queryOthers);

    $allRecords = getAllTable($conn);

    $totalLeaveRecord = getLeaveRecords($conn);
    $totalAbsenceRecord = getAbsenceRecords($conn);
    $totalCounsellingRecord = getCounsellingRecords($conn);
    $totalOtherRecord = getOtherRecords($conn);

    $totalLeaveRecordToday = getLeaveRecordsCurrentDay($conn);
    $totalAbsenceRecordToday = getAbsenceRecordsCurrentDay($conn);
    $totalCounsellingRecordToday = getCounsellingRecordsCurrentDay($conn);
    $totalOtherRecordToday = getOtherRecordsCurrentDay($conn);

    $totalLeaveRecordMonth = getLeaveRecordsCurrentMonth($conn);
    $totalAbsenceRecordMonth = getAbsenceRecordsCurrentMonth($conn);
    $totalCounsellingRecordMonth = getCounsellingRecordsCurrentMonth($conn);
    $totalOtherRecordMonth = getOtherRecordsCurrentMonth($conn);
    
    

    $totalRecordDay = $totalLeaveRecordToday + $totalCounsellingRecordToday + $totalAbsenceRecordToday + $totalOtherRecordToday;
    $totalRecordMonth = $totalLeaveRecordMonth + $totalCounsellingRecordMonth + $totalAbsenceRecordMonth + $totalOtherRecordMonth;

    $getRecordsToday = getTodayRecords($conn);
    $getRecordsMonth = getMonthRecords($conn);

    $overallRecords = $totalLeaveRecord + $totalCounsellingRecord + $totalAbsenceRecord + $totalOtherRecord;
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="assets/DataTables/css/dataTables.dataTables.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" type="image/x-icon" href="images/kld-logo.png">
    <title>GRMS - Home</title>

    <style>
        *{
            scroll-behavior: smooth;
        }

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
                    <a href="home.php">Guidance Record Management System</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="staffProfile.php" class="sidebar-link">
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-list-check"></i>
                        <span>Overview</span>
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
                            <a href="records-loa.php" class="sidebar-link">
                                Leave of Absence
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="records-aaf.php" class="sidebar-link">
                                Absence Approval Form
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="records-counselling.php" class="sidebar-link">
                                Couseling/Consultation
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a href="records-other.php" class="sidebar-link">
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
                <p class="h6 fw-bold">You are logged in as: <?php echo $_SESSION['userSession'] ?></p>
            </nav>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <div class="mb-3">
                        <h3 class="fw-bold fs-4 mb-3">Overview</h3>
                        <div class="row mb-3">
                        <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <a href="#all-table"><div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(211, 183, 23, 0.5)">
                                <p class="fw-bold h4 d-flex justify-content-center">Overall Records</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(244, 246, 107, 0.28)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $overallRecords ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div></a>

                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <a href="#today-table">
                        <div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(211, 183, 23, 0.5)">
                                <p class="fw-bold h4 d-flex justify-content-center">Records This Day</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(244, 246, 107, 0.28)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalRecordDay ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div></a>

                    <div class="col-lg-4 col-md-6 col-sm-8 mb-4">
                        <a href="#month-table">
                        <div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(211, 183, 23, 0.5)">
                                <p class="fw-bold h4 d-flex justify-content-center">Records This Month</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(244, 246, 107, 0.28)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalRecordMonth ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div></a>

                    <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                        <a href="#loa-table"><div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(179, 200, 207, 1)">
                                <p class="fw-bold h4 d-flex justify-content-center align-items-center">Leave of Absence Records</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(179, 200, 207, 0.5)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalLeaveRecord ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div></a>

                    <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                        <a href="#aaf-table"><div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(200, 179, 207, 1)">
                                <p class="fw-bold h4 d-flex justify-content-center align-items-center">Absence Application Records</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(200, 179, 207, 0.5)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalAbsenceRecord ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div></a>

                    <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                        <a href="#counselling-table"><div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(250, 112, 112, 1)">
                                <p class="fw-bold h4 d-flex justify-content-center align-items-center">Counselling Records</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(250, 112, 112, 0.5)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalCounsellingRecord ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div></a>

                    <div class="col-lg-3 col-md-6 col-sm-8 mb-4">
                        <a href="#other-table"><div class="card w-100 mx-auto">
                            <div class="card-header statistics" style="background-color: rgba(175, 209, 152, 1)">
                                <p class="fw-bold h4 d-flex justify-content-center align-items-center">Other Records</p>
                            </div>
                            <div class="card-body statistics-body" style="background-color: rgba(175, 209, 152, 0.5)">
                                <p class="fw-bold h1 d-flex justify-content-center align-items-center pt-3"><?php echo $totalOtherRecord ?></p>
                            </div>
                            <div class="card-footer">
                                <span class="text-muted d-flex justify-content-center">Total # of Records</span>
                            </div>
                        </div>
                    </div></a>

                        <!-- All Records Table -->
                        <div class="row mx-auto mb-3">
                            <div class="card text-center">
                                <div class="card-header d-flex justify-content-between mb-n5">
                                    <p class="h3">All Records</p>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table id="all-table" class="table table-striped data-table text-center" style="width: 100%">
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
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Remarks</th>
                                                    <th class="text-center">Date Added</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                    <?php
                                                        while($row = mysqli_fetch_assoc($allRecords)) {
                                                            if ($row['status'] == 'Approved') {
                                                                $bgColor = 'text-white badge bg-success';
                                                            }
                                                            else if ($row['status'] == 'Pending') {
                                                                $bgColor = 'text-muted badge bg-warning';
                                                            }
                                                            else if ($row['status'] == 'Rejected') {
                                                                $bgColor = 'text-white badge bg-danger';
                                                            }
                                                            else {
                                                                $bgColor = '';
                                                            }
                                                    ?>

                                                    <td class="text-center"><?php echo $row['record_ID']?></td>
                                                    <td class="text-center"><?php echo $row['firstName']?></td>
                                                    <td class="text-center"><?php echo $row['middleName']?></td>
                                                    <td class="text-center"><?php echo $row['lastName']?></td>
                                                    <td class="text-center"><?php echo $row['gender']?></td>
                                                    <td class="text-center"><?php echo $row['course']?></td>
                                                    <td class="text-center"><?php echo $row['year']?></td>
                                                    <td class="text-center"><?php echo $row['section']?></td>
                                                    <td class="text-center"><?php echo $row['reason']?></td>
                                                    <td class="text-center"><span class="<?php echo $bgColor ?>"><?php echo $row['status']?></span></td>
                                                    <td class="text-center"><?php echo $row['remarks']?></td>
                                                    <td class="text-center"><?php echo date('M d Y', strtotime($row['date']))?></td>
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

                        <!-- Records Today Table -->
                        <div class="row mx-auto mb-3">
                            <div class="card text-center">
                                <div class="card-header d-flex justify-content-between mb-n5">
                                    <p class="h3">Records This Day <?php echo '('. date('F j, Y'). ')'; ?></p>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table id="today-table" class="table table-striped data-table text-center" style="width: 100%">
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
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Remarks</th>
                                                    <th class="text-center">Date Added</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                    <?php
                                                    if ($getRecordsToday != false) {
                                                        while($row = mysqli_fetch_assoc($getRecordsToday)) {
                                                            if ($row['status'] == 'Approved') {
                                                                $bgColor = 'text-white badge bg-success';
                                                            }
                                                            else if ($row['status'] == 'Pending') {
                                                                $bgColor = 'text-muted badge bg-warning';
                                                            }
                                                            else if ($row['status'] == 'Rejected') {
                                                                $bgColor = 'text-white badge bg-danger';
                                                            }
                                                            else {
                                                                $bgColor = '';
                                                            }
                                                    ?>

                                                    <td class="text-center"><?php echo $row['record_ID']?></td>
                                                    <td class="text-center"><?php echo $row['firstName']?></td>
                                                    <td class="text-center"><?php echo $row['middleName']?></td>
                                                    <td class="text-center"><?php echo $row['lastName']?></td>
                                                    <td class="text-center"><?php echo $row['gender']?></td>
                                                    <td class="text-center"><?php echo $row['course']?></td>
                                                    <td class="text-center"><?php echo $row['year']?></td>
                                                    <td class="text-center"><?php echo $row['section']?></td>
                                                    <td class="text-center"><?php echo $row['reason']?></td>
                                                    <td class="text-center"><span class="<?php echo $bgColor ?>"><?php echo $row['status']?></span></td>
                                                    <td class="text-center"><?php echo $row['remarks']?></td>
                                                    <td class="text-center"><?php echo date('M d Y', strtotime($row['date']))?></td>
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Records This Month Table -->
                        <div class="row mx-auto mb-3">
                            <div class="card text-center">
                                <div class="card-header d-flex justify-content-between mb-n5">
                                    <p class="h3">Records This Month <?php echo '('. date("F, Y") .')'; ?></p>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table id="month-table" class="table table-striped data-table text-center" style="width: 100%">
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
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Remarks</th>
                                                    <th class="text-center">Date Added</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                    <?php
                                                    if ($getRecordsMonth != false) {
                                                        while($row = mysqli_fetch_assoc($getRecordsMonth)) {
                                                            if ($row['status'] == 'Approved') {
                                                                $bgColor = 'text-white badge bg-success';
                                                            }
                                                            else if ($row['status'] == 'Pending') {
                                                                $bgColor = 'text-muted badge bg-warning';
                                                            }
                                                            else if ($row['status'] == 'Rejected') {
                                                                $bgColor = 'text-white badge bg-danger';
                                                            }
                                                            else {
                                                                $bgColor = '';
                                                            }
                                                    ?>

                                                    <td class="text-center"><?php echo $row['record_ID']?></td>
                                                    <td class="text-center"><?php echo $row['firstName']?></td>
                                                    <td class="text-center"><?php echo $row['middleName']?></td>
                                                    <td class="text-center"><?php echo $row['lastName']?></td>
                                                    <td class="text-center"><?php echo $row['gender']?></td>
                                                    <td class="text-center"><?php echo $row['course']?></td>
                                                    <td class="text-center"><?php echo $row['year']?></td>
                                                    <td class="text-center"><?php echo $row['section']?></td>
                                                    <td class="text-center"><?php echo $row['reason']?></td>
                                                    <td class="text-center"><span class="<?php echo $bgColor ?>"><?php echo $row['status']?></span></td>
                                                    <td class="text-center"><?php echo $row['remarks']?></td>
                                                    <td class="text-center"><?php echo date('M d Y', strtotime($row['date']))?></td>
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- LoA Table -->
                        <div class="row mx-auto mb-3">
                            <div class="card text-center">
                                <div class="card-header d-flex justify-content-between mb-n5">
                                    <p class="h3">Leave of Absence Record</p>
                                    <a type="button" href="records-loa.php" class="btn btn-primary">Go To Page</a>
                                </div>
                                <div class="card-body">
                                    <div class="table table-responsive">
                                        <table id="loa-table" class="table table-striped data-table text-center" style="width: 100%">
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
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Remarks</th>
                                                    <th class="text-center">Date Added</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                        while($row = mysqli_fetch_assoc($resultLeave)) {
                                                            if ($row['status'] == 'Approved') {
                                                                $bgColor = 'text-white badge bg-success';
                                                            }
                                                            else if ($row['status'] == 'Pending') {
                                                                $bgColor = 'text-muted badge bg-warning';
                                                            }
                                                            else {
                                                                $bgColor = 'text-white badge bg-danger';
                                                            }
                                                    ?>

                                                    <td class="text-center"><?php echo $row['record_ID']?></td>
                                                    <td class="text-center"><?php echo $row['firstName']?></td>
                                                    <td class="text-center"><?php echo $row['middleName']?></td>
                                                    <td class="text-center"><?php echo $row['lastName']?></td>
                                                    <td class="text-center"><?php echo $row['gender']?></td>
                                                    <td class="text-center"><?php echo $row['department']?></td>
                                                    <td class="text-center"><?php echo $row['year']?></td>
                                                    <td class="text-center"><?php echo $row['section']?></td>
                                                    <td class="text-center"><?php echo $row['reason']?></td>
                                                    <td class="text-center"><span class="<?php echo $bgColor ?>"><?php echo $row['status']?></span></td>
                                                    <td class="text-center"><?php echo $row['remarks']?></td>
                                                    <td class="text-center"><?php echo date('M d Y', strtotime($row['date']))?></td>
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

                        <!-- AAF Table -->
                        <div class="row mx-auto mb-3">
                            <div class="card text-center">
                                <div class="card-header d-flex justify-content-between mb-n5">
                                    <p class="h3">Absence Approval Form Record</p>
                                    <a type="button" href="records-aaf.php" class="btn btn-primary">Go To Page</a>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                        while($row = mysqli_fetch_assoc($resultAbsence)) {
                                                    ?>  

                                                    <td class="text-center"><?php echo $row['record_ID']?></td>
                                                    <td class="text-center"><?php echo $row['firstName']?></td>
                                                    <td class="text-center"><?php echo $row['middleName']?></td>
                                                    <td class="text-center"><?php echo $row['lastName']?></td>
                                                    <td class="text-center"><?php echo $row['gender']?></td>
                                                    <td class="text-center"><?php echo $row['course']?></td>
                                                    <td class="text-center"><?php echo $row['year']?></td>
                                                    <td class="text-center"><?php echo $row['section']?></td>
                                                    <td class="text-center"><?php echo $row['reason']?></td>
                                                    <td class="text-center"><?php echo $row['remarks']?></td>
                                                    <td class="text-center"><?php echo date('M d Y', strtotime($row['date']))?></td>
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

                        <!-- Counselling Table -->
                        <div class="row mx-auto mb-3">
                            <div class="card text-center">
                                <div class="card-header d-flex justify-content-between mb-n5">
                                    <p class="h3">Counselling / Consultation Record</p>
                                    <a type="button" href="records-counselling.php" class="btn btn-primary">Go To Page</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="counselling-table" class="table table-striped data-table text-center" style="width: 100%">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                        while($row = mysqli_fetch_assoc($resultCounselling)) {
                                                    ?>

                                                    <td class="text-center"><?php echo $row['record_ID']?></td>
                                                    <td class="text-center"><?php echo $row['firstName']?></td>
                                                    <td class="text-center"><?php echo $row['middleName']?></td>
                                                    <td class="text-center"><?php echo $row['lastName']?></td>
                                                    <td class="text-center"><?php echo $row['gender']?></td>
                                                    <td class="text-center"><?php echo $row['course']?></td>
                                                    <td class="text-center"><?php echo $row['year']?></td>
                                                    <td class="text-center"><?php echo $row['section']?></td>
                                                    <td class="text-center"><?php echo $row['reason']?></td>
                                                    <td class="text-center"><?php echo $row['remarks']?></td>
                                                    <td class="text-center"><?php echo date('M d Y', strtotime($row['date']))?></td>
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

                        <!-- Other Table -->
                        <div class="row mx-auto mb-3">
                            <div class="card text-center">
                                <div class="card-header d-flex justify-content-between mb-n5">
                                    <p class="h3">Other Record</p>
                                    <a type="button" href="records-other.php" class="btn btn-primary">Go To Page</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="other-table" class="table table-striped data-table text-center" style="width: 100%">
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <?php
                                                        while($row = mysqli_fetch_assoc($resultOthers)) {
                                                    ?>

                                                    <td class="text-center"><?php echo $row['record_ID']?></td>
                                                    <td class="text-center"><?php echo $row['firstName']?></td>
                                                    <td class="text-center"><?php echo $row['middleName']?></td>
                                                    <td class="text-center"><?php echo $row['lastName']?></td>
                                                    <td class="text-center"><?php echo $row['gender']?></td>
                                                    <td class="text-center"><?php echo $row['course']?></td>
                                                    <td class="text-center"><?php echo $row['year']?></td>
                                                    <td class="text-center"><?php echo $row['section']?></td>
                                                    <td class="text-center"><?php echo $row['reason']?></td>
                                                    <td class="text-center"><?php echo $row['remarks']?></td>
                                                    <td class="text-center"><?php echo date('M d Y', strtotime($row['date']))?></td>
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

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script src="assets/DataTables/js/dataTables.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    <!-- <script>
        $('#loa-table').dataTable({
            aLengthMenu: [
                [10, 20, 50, 100, -1],
                [10, 20, 50, 100, "All"]
            ],
            iDisplayLength: -1
        });
    </script>

    <script>
        $('#counselling-table').dataTable({
            aLengthMenu: [
                [10, 20, 50, 100, -1],
                [10, 20, 50, 100, "All"]
            ],
            iDisplayLength: -1
        });
    </script>

    <script>
        $('#other-table').dataTable({
            aLengthMenu: [
                [10, 20, 50, 100, -1],
                [10, 20, 50, 100, "All"]
            ],
            iDisplayLength: -1
        });
    </script> -->

    <!-- <script>
        $(document).ready(function() {
            $(".data-table").each(function(_, table) {
                $(table).DataTable();
            });
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

    <script>
        $(document).ready(function () {
            // Initialize DataTables for each table
            $('.data-table').each(function () {
                var table = $(this).DataTable({
                    orderCellsTop: true,
                    fixedHeader: true,
                    initComplete: function () {
                        var api = this.api();

                        // For each column
                        api.columns().eq(0).each(function (colIdx) {
                            // Set the header cell to contain the input element
                            var cell = $('.filters th').eq($(api.column(colIdx).header()).index());
                            var title = $(cell).text();
                            $(cell).html('<input type="text" class="w-75" placeholder="' + title + '" />');

                            // On every keypress in this input
                            $('input', $('.filters th').eq($(api.column(colIdx).header()).index()))
                                .off('keyup change')
                                .on('change', function (e) {
                                    // Get the search value
                                    $(this).attr('title', $(this).val());
                                    var regexr = '({search})'; //$(this).parents('th').find('select').val();

                                    var cursorPosition = this.selectionStart;
                                    // Search the column for that value
                                    api.column(colIdx)
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
                                    $(this).focus()[0].setSelectionRange(cursorPosition, cursorPosition);
                                });
                        });
                    }
                });
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