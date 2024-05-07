<?php

    include('dbConnection.php');

    function getLeaveRecords($conn) {
        $queryLeave = "SELECT * FROM leave_of_absence";

        if ($resultLeave = mysqli_query($conn, $queryLeave)) {
            $leaveRowCount = mysqli_num_rows($resultLeave);

            mysqli_free_result($resultLeave);

            return $leaveRowCount;
        }
        else {
            return false;
        }
    }

    function getCounsellingRecords($conn){
        $queryCounselling = "SELECT * FROM counselling";

        if ($resultCounselling = mysqli_query($conn,$queryCounselling)) {
            $counsellingRowCount = mysqli_num_rows($resultCounselling);

            mysqli_free_result($resultCounselling);

            return $counsellingRowCount;
        }
        else{
            return false;
        }
    }
        
    function getAbsenceRecords($conn){
        $queryAbsence = "SELECT * FROM absence_approval_form";
    
        if ($resultAbsence = mysqli_query($conn,$queryAbsence)) {
            $absenceRowCount = mysqli_num_rows($resultAbsence);
    
            mysqli_free_result($resultAbsence);
    
            return $absenceRowCount;
        }
        else{
            return false;
        }
    }

    function getLeaveRecordsCurrentDay($conn) {
        $currentDate = date('Y-m-d');
    
        $queryLeave = "SELECT * FROM leave_of_absence WHERE DATE(date) = '$currentDate'";
    
        if ($resultLeave = mysqli_query($conn, $queryLeave)) {
            $leaveRowCount = mysqli_num_rows($resultLeave);
    
            mysqli_free_result($resultLeave);
    
            return $leaveRowCount;
        } else {
            return false;
        }
    }
    

    function getLeaveRecordsCurrentMonth($conn) {
        $currentMonth = date('m');
        $currentYear = date('Y');
    
        $queryLeave = "SELECT * FROM leave_of_absence WHERE MONTH(date) = $currentMonth AND YEAR(date) = $currentYear";
    
        if ($resultLeave = mysqli_query($conn, $queryLeave)) {
            $leaveRowCount = mysqli_num_rows($resultLeave);
    
            mysqli_free_result($resultLeave);
    
            return $leaveRowCount;
        } else {
            return false;
        }
    }
    
    function getLeaveRecordsCurrentYear($conn) {
        $currentYear = date('Y');
    
        $queryLeave = "SELECT * FROM leave_of_absence WHERE YEAR(date) = $currentYear";
    
        if ($resultLeave = mysqli_query($conn, $queryLeave)) {
            $leaveRowCount = mysqli_num_rows($resultLeave);
    
            mysqli_free_result($resultLeave);
    
            return $leaveRowCount;
        } else {
            return false;
        }
    }

    function getAbsenceRecordsCurrentDay($conn) {
        $currentDate = date('Y-m-d');
    
        $queryAbsence = "SELECT * FROM absence_approval_form WHERE DATE(date) = '$currentDate'";
    
        if ($resultAbsence = mysqli_query($conn, $queryAbsence)) {
            $absenceRowCount = mysqli_num_rows($resultAbsence);
    
            mysqli_free_result($resultAbsence);
    
            return $absenceRowCount;
        } else {
            return false;
        }
    }
    

    function getAbsenceRecordsCurrentMonth($conn) {
        $currentMonth = date('m');
        $currentYear = date('Y');
    
        $queryAbsence = "SELECT * FROM absence_approval_form WHERE MONTH(date) = $currentMonth AND YEAR(date) = $currentYear";
    
        if ($resultAbsence = mysqli_query($conn, $queryAbsence)) {
            $absenceRowCount = mysqli_num_rows($resultAbsence);
    
            mysqli_free_result($resultAbsence);
    
            return $absenceRowCount;
        } else {
            return false;
        }
    }
    
    function getAbsenceRecordsCurrentYear($conn) {
        $currentYear = date('Y');
    
        $queryAbsence = "SELECT * FROM absence_approval_form WHERE YEAR(date) = $currentYear";
    
        if ($resultAbsence = mysqli_query($conn, $queryAbsence)) {
            $absenceRowCount = mysqli_num_rows($resultAbsence);
    
            mysqli_free_result($resultAbsence);
    
            return $absenceRowCount;
        } else {
            return false;
        }
    }

    function getCounsellingRecordsCurrentDay($conn) {
        $currentDate = date('Y-m-d');
    
        $queryLeave = "SELECT * FROM counselling WHERE DATE(date) = '$currentDate'";
    
        if ($resultLeave = mysqli_query($conn, $queryLeave)) {
            $leaveRowCount = mysqli_num_rows($resultLeave);
    
            mysqli_free_result($resultLeave);
    
            return $leaveRowCount;
        } else {
            return false;
        }
    }
    

    function getCounsellingRecordsCurrentMonth($conn) {
        $currentMonth = date('m');
        $currentYear = date('Y');
    
        $queryLeave = "SELECT * FROM counselling WHERE MONTH(date) = $currentMonth AND YEAR(date) = $currentYear";
    
        if ($resultLeave = mysqli_query($conn, $queryLeave)) {
            $leaveRowCount = mysqli_num_rows($resultLeave);
    
            mysqli_free_result($resultLeave);
    
            return $leaveRowCount;
        } else {
            return false;
        }
    }
    
    function getCounsellingRecordsCurrentYear($conn) {
        $currentYear = date('Y');
    
        $queryLeave = "SELECT * FROM counselling WHERE YEAR(date) = $currentYear";
    
        if ($resultLeave = mysqli_query($conn, $queryLeave)) {
            $leaveRowCount = mysqli_num_rows($resultLeave);
    
            mysqli_free_result($resultLeave);
    
            return $leaveRowCount;
        } else {
            return false;
        }
    }

    function getOtherRecordsCurrentDay($conn) {
        $currentDate = date('Y-m-d');
    
        $queryOther = "SELECT * FROM others WHERE DATE(date) = '$currentDate'";
    
        if ($resultOther = mysqli_query($conn, $queryOther)) {
            $otherRowCount = mysqli_num_rows($resultOther);
    
            mysqli_free_result($resultOther);
    
            return $otherRowCount;
        } else {
            return false;
        }
    }
    
    function getOtherRecordsCurrentMonth($conn) {
        $currentMonth = date('m');
        $currentYear = date('Y');
    
        $queryOther = "SELECT * FROM others WHERE MONTH(date) = $currentMonth AND YEAR(date) = $currentYear";
    
        if ($resultOther = mysqli_query($conn, $queryOther)) {
            $otherRowCount = mysqli_num_rows($resultOther);
    
            mysqli_free_result($resultOther);
    
            return $otherRowCount;
        } else {
            return false;
        }
    }
    
    function getOtherRecordsCurrentYear($conn) {
        $currentYear = date('Y');
    
        $queryOther = "SELECT * FROM others WHERE YEAR(date) = $currentYear";
    
        if ($resultOther = mysqli_query($conn, $queryOther)) {
            $otherRowCount = mysqli_num_rows($resultOther);
    
            mysqli_free_result($resultOther);
    
            return $otherRowCount;
        } else {
            return false;
        }
    }

    function getTodayRecords($conn) {
        $today = date('Y-m-d');
        $queryTodayRecords = "SELECT 'leave_of_absence' AS source, record_ID, firstName, middleName, lastName, gender, department AS course, year, section, reason, status, remarks, date FROM leave_of_absence WHERE DATE(date) = '$today'
        UNION ALL
        SELECT 'absence_approval_form' AS source, record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date FROM absence_approval_form WHERE DATE(date) = '$today'
        UNION ALL
        SELECT 'counselling' AS source, record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date FROM counselling WHERE DATE(date) = '$today'
        UNION ALL
        SELECT 'others' AS source, record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date FROM others WHERE DATE(date) = '$today'";
    
        $resultTodayRecords = mysqli_query($conn, $queryTodayRecords);
    
        if ($resultTodayRecords && mysqli_num_rows($resultTodayRecords) > 0) {
            return $resultTodayRecords;
        }
        else {
            return false;
        }
    }

    function getMonthRecords($conn) {
        $month = date('M');
        $queryMonthRecords = "SELECT 'leave_of_absence' AS source, record_ID, firstName, middleName, lastName, gender, department AS course, year, section, reason, status, remarks, date FROM leave_of_absence WHERE MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())
        UNION ALL
        SELECT 'absence_approval_form' AS source, record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date FROM absence_approval_form WHERE MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())
        UNION ALL
        SELECT 'counselling' AS source, record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date FROM counselling WHERE MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())
        UNION ALL
        SELECT 'others' AS source, record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date FROM others WHERE MONTH(date) = MONTH(CURDATE()) AND YEAR(date) = YEAR(CURDATE())";

        $resultMonthRecords = mysqli_query($conn, $queryMonthRecords);
    
        if ($resultMonthRecords && mysqli_num_rows($resultMonthRecords) > 0) {
            return $resultMonthRecords;
        }
        else {
            return false ;
        }
    }
    
    function addLeaveRecord($conn) {
        if (isset($_POST['addRecord'])) {
            $document = $_FILES['record_documents']['name'];
            $tempDocument = $_FILES['record_documents']['tmp_name'];
            $firstName = $_POST['record_firstName'];
            $middleName = $_POST['record_middleName'];
            $lastName = $_POST['record_lastName'];
            $gender = $_POST['record_gender'];
            $department = $_POST['record_department'];
            $year = $_POST['record_year'];
            $section = $_POST['record_section'];
            $reason = $_POST['record_reason'];
            $status = $_POST['record_status'];
            $remarks = $_POST['record_remarks'];
    
            // Check if required fields are filled
            if ($firstName == '' or $lastName == '' or $reason == '') {
                echo '<script>alert("Please fill all required fields")</script>';
                exit();
            }

            $fileExtension = pathinfo($document, PATHINFO_EXTENSION);
            $recordDocumentWithoutExtension = pathinfo($document, PATHINFO_FILENAME);
            move_uploaded_file($tempDocument, './images/'.$document);
    
            // Get the next ID for leave_of_absence
            $query = "SELECT COALESCE(MAX(CAST(SUBSTRING(record_ID, 2) AS UNSIGNED)), 0) + 1 AS max_id FROM leave_of_absence";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $nextID = $row['max_id'];
    
            // Format the next ID with 'L' prefix and leading zeros
            $formattedID = 'L' . str_pad($nextID, 4, '0', STR_PAD_LEFT);
    
            // Inserting record with formatted ID
            $insertRecord = "INSERT INTO leave_of_absence (record_ID, firstName, middleName, lastName, gender, department, year, section, reason, document, status, remarks, date)
            VALUES ('$formattedID', '$firstName', '$middleName', '$lastName', '$gender', '$department', '$year', '$section', '$reason', '$recordDocumentWithoutExtension', '$status', '$remarks', NOW())";
    
            $resultQuery = mysqli_query($conn, $insertRecord);
    
            if ($resultQuery) {
                if (isset($_SESSION['adminSession'])) {
                    echo '<script>
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Are you sure you want to add this record?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, add it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Record added successfully",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "admin-records-loa.php";
                                    }
                                });
                            }
                        });
                    </script>';
                }
                else {
                    echo '<script>
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Are you sure you want to add this record?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, add it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Record added successfully",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "records-loa.php";
                                    }
                                });
                            }
                        });
                    </script>';
                }
            } else {
                echo '<script>Swal("Error", "Record failed to be added", "error");</script>';
            }
        }
    }
    
    function deleteLeaveRecord($conn) {
        if (isset($_POST['deleteRecord'])) {
            $recordID = $_POST['record_ID'];
    
            $deleteQuery = "DELETE FROM leave_of_absence WHERE record_ID = '$recordID'";
            $resultDelete = mysqli_query($conn, $deleteQuery);
    
            if ($resultDelete) {
                // Get the ID number of the deleted record
                $recordNumber = intval(substr($recordID, 1));
    
                // Decrement the record_ID for records with IDs greater than the deleted record
                $updateQuery = "UPDATE leave_of_absence SET record_ID = CONCAT('L', LPAD(SUBSTRING(record_ID, 2) - 1, 4, '0'))
                                WHERE SUBSTRING(record_ID, 2) > $recordNumber";
                $resultUpdate = mysqli_query($conn, $updateQuery);
    
                if ($resultUpdate) {
                    // Reset the AUTO_INCREMENT value
                    $resetQuery = "ALTER TABLE leave_of_absence AUTO_INCREMENT = 1";
                    mysqli_query($conn, $resetQuery);
    
                    echo '<script>alert("Record deleted successfully")</script>';
                    header("Refresh:0");
                } else {
                    echo '<script>alert("Error updating record IDs")</script>';
                    header("Refresh:0");
                }
            } else {
                echo '<script>alert("Error deleting record")</script>';
                header("Refresh:0");
            }
        }
    }

    function addCounsellingRecord($conn) {
        if (isset($_POST['addRecord'])) {
            $firstName = $_POST['record_firstName'];
            $middleName = $_POST['record_middleName'];
            $lastName = $_POST['record_lastName'];
            $gender = $_POST['record_gender'];
            $course = $_POST['record_department'];
            $year = $_POST['record_year'];
            $section = $_POST['record_section'];
            $reason = $_POST['record_reason'];
            $remarks = $_POST['record_remarks'];
    
            if ($firstName == '' or $lastName == '' or $reason == '') {
                echo '<script>alert("Please fill all required fields")</script>';
                exit();
            }
    
            // Get the current max ID for counselling and increment it
            $query = "SELECT MAX(CAST(SUBSTRING(record_ID, 2) AS UNSIGNED)) AS max_id FROM counselling";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $nextID = $row['max_id'] + 1;
    
            // Format the next ID with 'C' prefix
            $formattedID = 'C' . str_pad($nextID, 4, '0', STR_PAD_LEFT);
    
            // Insert the record with the formatted ID
            $insertRecord = "INSERT INTO counselling (record_ID, firstName, middleName, lastName, gender, course, year, section, reason, remarks, date)
            VALUES ('$formattedID', '$firstName', '$middleName', '$lastName', '$gender', '$course', '$year', '$section', '$reason', '$remarks', NOW())";
    
            $resultQuery = mysqli_query($conn, $insertRecord);
    
            if ($resultQuery) {
                if (isset($_SESSION['adminSession'])) {
                    echo '<script>
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Are you sure you want to add this record?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, add it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Record added successfully",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "admin-records-counselling.php";
                                    }
                                });
                            }
                        });
                    </script>';
                }
                else {
                    echo '<script>
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Are you sure you want to add this record?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, add it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Record added successfully",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "records-counselling.php";
                                    }
                                });
                            }
                        });
                    </script>';
                }
            } else {
                echo '<script>Swal("Error", "Record failed to be added", "error");</script>';
            }
        }
    }

    function deleteCounsellingRecord($conn) {
        if (isset($_POST['deleteRecord'])) {
            $recordID = $_POST['record_ID'];
    
            $deleteQuery = "DELETE FROM counselling WHERE record_ID = '$recordID'";
            $resultDelete = mysqli_query($conn, $deleteQuery);
    
            if ($resultDelete) {
                // Get the ID number of the deleted record
                $recordNumber = intval(substr($recordID, 1));
    
                // Decrement the record_ID for records with IDs greater than the deleted record
                $updateQuery = "UPDATE counselling SET record_ID = CONCAT('C', LPAD(SUBSTRING(record_ID, 2) - 1, 4, '0'))
                                WHERE SUBSTRING(record_ID, 2) > $recordNumber";
                $resultUpdate = mysqli_query($conn, $updateQuery);
    
                if ($resultUpdate) {
                    // Reset the AUTO_INCREMENT value
                    $resetQuery = "ALTER TABLE counselling AUTO_INCREMENT = 1";
                    mysqli_query($conn, $resetQuery);
    
                    echo '<script>alert("Record deleted successfully")</script>';
                    header("Refresh:0");
                } else {
                    echo '<script>alert("Error updating record IDs")</script>';
                    header("Refresh:0");
                }
            } else {
                echo '<script>alert("Error deleting record")</script>';
                header("Refresh:0");
            }
        }
    }

    function addAbsenceRecord($conn) {
        if (isset($_POST['addRecord'])) {
            $firstName = $_POST['record_firstName'];
            $middleName = $_POST['record_middleName'];
            $lastName = $_POST['record_lastName'];
            $gender = $_POST['record_gender'];
            $course = $_POST['record_department'];
            $year = $_POST['record_year'];
            $section = $_POST['record_section'];
            $reason = $_POST['record_reason'];
            $status = $_POST['record_status'];
            $remarks = $_POST['record_remarks'];
    
            // Check if required fields are filled
            if ($firstName == '' or $lastName == '' or $reason == '') {
                echo '<script>alert("Please fill all required fields")</script>';
                exit();
            }
    
            // Get the next ID for absence_approval_form
            $query = "SELECT COALESCE(MAX(CAST(SUBSTRING(record_ID, 2) AS UNSIGNED)), 0) + 1 AS max_id FROM absence_approval_form";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $nextID = $row['max_id'];
    
            // Format the next ID with 'L' prefix and leading zeros
            $formattedID = 'A' . str_pad($nextID, 4, '0', STR_PAD_LEFT);
    
            // Inserting record with formatted ID
            $insertRecord = "INSERT INTO absence_approval_form (record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date)
            VALUES ('$formattedID', '$firstName', '$middleName', '$lastName', '$gender', '$course', '$year', '$section', '$reason', '$status', '$remarks', NOW())";
    
            $resultQuery = mysqli_query($conn, $insertRecord);
    
            if ($resultQuery) {
                if (isset($_SESSION['adminSession'])) {
                    echo '<script>
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Are you sure you want to add this record?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, add it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Record added successfully",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "admin-records-aaf.php";
                                    }
                                });
                            }
                        });
                    </script>';
                }
                else {
                    echo '<script>
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Are you sure you want to add this record?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, add it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Record added successfully",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "records-aaf.php";
                                    }
                                });
                            }
                        });
                    </script>';
                }
            } else {
                echo '<script>Swal("Error", "Record failed to be added", "error");</script>';
            }
        }
    }
    
    function deleteAbsenceRecord($conn) {
        if (isset($_POST['deleteRecord'])) {
            $recordID = $_POST['record_ID'];
    
            $deleteQuery = "DELETE FROM absence_approval_form WHERE record_ID = '$recordID'";
            $resultDelete = mysqli_query($conn, $deleteQuery);
    
            if ($resultDelete) {
                // Get the ID number of the deleted record
                $recordNumber = intval(substr($recordID, 1));
    
                // Decrement the record_ID for records with IDs greater than the deleted record
                $updateQuery = "UPDATE absence_approval_form SET record_ID = CONCAT('A', LPAD(SUBSTRING(record_ID, 2) - 1, 4, '0'))
                                WHERE SUBSTRING(record_ID, 2) > $recordNumber";
                $resultUpdate = mysqli_query($conn, $updateQuery);
    
                if ($resultUpdate) {
                    // Reset the AUTO_INCREMENT value
                    $resetQuery = "ALTER TABLE absence_approval_form AUTO_INCREMENT = 1";
                    mysqli_query($conn, $resetQuery);
    
                    echo '<script>alert("Record deleted successfully")</script>';
                    header("Refresh:0");
                } else {
                    echo '<script>alert("Error updating record IDs")</script>';
                    header("Refresh:0");
                }
            } else {
                echo '<script>alert("Error deleting record")</script>';
                header("Refresh:0");
            }
        }
    }

    function EditAbsenceRecord($conn) {
        if (isset($_POST['editRecord'])) {
            $recordID = $_GET['record_ID'];
            $newFirstName = $_POST['record_firstName'];
            $newMiddleName = $_POST['record_middleName'];
            $newLastName = $_POST['record_lastName'];
            $newGender = $_POST['record_gender'];
            $newCourse = $_POST['record_course'];
            $newYear = $_POST['record_year'];
            $newSection = $_POST['record_section'];
            $newReason = $_POST['record_reason'];
            $newStatus = $_POST['record_status'];
            $newRemarks = $_POST['record_remarks'];

            $updateAbsence = "UPDATE absence_approval_form SET firstName = '$newFirstName', middleName = '$newMiddleName', lastName = '$newLastName'
                            , gender = '$newGender', course = '$newCourse', year = '$newYear', section = '$newSection', reason = '$newReason'
                            , status = '$newStatus', remarks = '$newRemarks' WHERE record_ID = '$recordID'";

            if (mysqli_query($conn, $updateAbsence)) {
                echo '<script> alert ("Record has been successfully updated")</script>';
                
                header("Location: records-aaf.php");
                exit();
            }
            else {
                echo '<script> alert ("Error updating record") </script>';
            }
        }
    }

    function fetchAbsenceRecordDetails($conn) {
        if (isset($_GET['record_ID'])) {
            $recordID = $_GET['record_ID'];
            $editAbsenceQuery = "SELECT firstName, middleName, lastName, gender, course, year, section, reason, status, remarks FROM absence_approval_form WHERE record_ID = '$recordID'";
            $editAbsenceResult = mysqli_query($conn, $editAbsenceQuery);

            if ($editAbsenceResult && $editAbsenceResult->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($editAbsenceResult)) {
                    $firstName = $row['firstName'];
                    $middleName = $row['middleName'];
                    $lastName = $row['lastName'];
                    $gender = $row['gender'];
                    $course = $row['course'];
                    $year = $row['year'];
                    $section = $row['section'];
                    $reason = $row['reason'];
                    $status = $row['status'];
                    $remarks = $row['remarks'];

                    echo '
                        <div class="row mx-auto">
                            <div class="card">
                                <div class="card-header text-center mb-n5">
                                    <p class="h3">'.$firstName.' \'s Record</p>
                                </div>
                                <div class="card-body">
                                    <form action="#" method="POST" class="form">
                                        <div class="form-group">
                                            <label for="record_firstName" class="mb-3">Personal Details</label>
                                            <input id="record_firstName" name="record_firstName" value="'.$firstName.'" placeholder="First Name" type="text" required="required" class="form-control mb-3">
                                        </div>
                                        <div class="form-group">
                                            <input id="record_middleName" name="record_middleName" value="'.$middleName.'" placeholder="Middle Name" type="text" class="form-control mb-3">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="record_lastName" name="record_lastName" value="'.$lastName.'" placeholder="Last Name" type="text" required="required" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_gender" class="mb-3">Gender</label>
                                            <div>
                                                <select id="record_gender" name="record_gender" class="form-select" aria-describedby="record_genderHelpBlock">
                                                    <option value="'.$gender.'" selected hidden>'.$gender.'</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Binary">Binary</option>
                                                    <option value="Non-Binary">Non-Binary</option>
                                                    <option value="Prefer not to say">Prefer not to say</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_course" class="mb-3">Course</label>
                                            <div>
                                                <select id="record_course" name="record_course" class="form-select" aria-describedby="record_courseHelpBlock">
                                                    <option value="'.$course.'" selected hidden>'.$course.'</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Information System">Information System</option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Nursing">Nursing</option>
                                                    <option value="Psychology">Psychology</option>
                                                    <option value="Midwifery">Midwifery</option>
                                                </select>
                                                <span id="record_courseHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_year" class="mb-3">Year</label>
                                            <div>
                                                <select id="record_year" name="record_year" class="form-select" aria-describedby="record_yearHelpBlock">
                                                    <option value="'.$year.'" selected hidden>'.$year.'</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="1st Year">1st Year</option>
                                                    <option value="2nd Year">2nd Year</option>
                                                    <option value="3rd Year">3rd Year</option>
                                                    <option value="4th Year">4th Year</option>
                                                </select>
                                                <span id="record_yearHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_section" class="mb-3">Section</label>
                                            <input id="record_section" name="record_section" type="text" value="'.$section.'" class="form-control" aria-describedby="record_sectionHelpBlock">
                                            <span id="record_sectionHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_reason" class="mb-3">Reason</label>
                                            <input id="record_reason" name="record_reason" type="text" value="'.$reason.'" class="form-control" aria-describedby="record_reasonHelpBlock" required="required">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_status" class="mb-3">Status</label>
                                            <div>
                                                <select id="record_status" name="record_status" class="form-select" aria-describedby="record_statusHelpBlock">
                                                    <option value="'.$status.'" selected hidden>'.$status.'</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Rejected">Rejected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_remarks" class="mb-3">Remarks</label>
                                            <input id="record_remarks" name="record_remarks" type="text" value="'.$remarks.'" class="form-control" aria-describedby="record_remarksHelpBlock" required="required">
                                        </div>
                                        <div class="form-group">
                                            <button name="editRecord" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                }
            }
        }
        else {
            echo '<script> alert ("Error Fetching Record ID") </script>';
            header("Refresh: 0");
            exit();
        }
    }
    
    

    // function deleteCounsellingRecord($conn) {
    //     if (isset($_POST['deleteRecord'])) {
    //         $recordID = $_POST['record_ID'];
    
    //         $deleteQuery = "DELETE FROM counselling WHERE record_ID = '$recordID'";
    //         $resultDelete = mysqli_query($conn, $deleteQuery);
    
    //         if ($resultDelete) {
    //             echo '<script>alert("Record deleted successfully")</script>';
    //             header("Refresh:0");
    //         } else {
    //             echo '<script>alert("Error deleting record")</script>';
    //             header("Refresh:0");
    //         }
    //     }
    // }    

    function addOtherRecord($conn) {
        if (isset($_POST['addRecord'])) {
            $firstName = $_POST['record_firstName'];
            $middleName = $_POST['record_middleName'];
            $lastName = $_POST['record_lastName'];
            $gender = $_POST['record_gender'];
            $course = $_POST['record_department'];
            $year = $_POST['record_year'];
            $section = $_POST['record_section'];
            $reason = $_POST['record_reason'];
            $remarks = $_POST['record_remarks'];
    
            if ($firstName == '' or $lastName == '' or $reason == '') {
                echo '<script>alert("Please fill all required fields")</script>';
                exit();
            }
    
            // Get the current max ID for others and increment it
            $query = "SELECT MAX(CAST(SUBSTRING(record_ID, 2) AS UNSIGNED)) AS max_id FROM others";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $nextID = $row['max_id'] + 1;
    
            // Format the next ID with 'O' prefix
            $formattedID = 'O' . str_pad($nextID, 4, '0', STR_PAD_LEFT);
    
            // Insert the record with the formatted ID
            $insertRecord = "INSERT INTO others (record_ID, firstName, middleName, lastName, gender, course, year, section, reason, remarks, date)
            VALUES ('$formattedID', '$firstName', '$middleName', '$lastName', '$gender', '$course', '$year', '$section', '$reason', '$remarks', NOW())";
    
            $resultQuery = mysqli_query($conn, $insertRecord);
    
            if ($resultQuery) {
                if (isset($_SESSION['adminSession'])) {
                    echo '<script>
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Are you sure you want to add this record?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, add it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Record added successfully",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "admin-records-other.php";
                                    }
                                });
                            }
                        });
                    </script>';
                }
                else {
                    echo '<script>
                        Swal.fire({
                            title: "Are you sure?",
                            text: "Are you sure you want to add this record?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Yes, add it!"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                    title: "Success",
                                    text: "Record added successfully",
                                    icon: "success"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "records-other.php";
                                    }
                                });
                            }
                        });
                    </script>';
                }
            } else {
                echo '<script>Swal("Error", "Record failed to be added", "error");</script>';
            }
        }
    }

    function deleteOtherRecord($conn) {
        if (isset($_POST['deleteRecord'])) {
            $recordID = $_POST['record_ID'];
    
            $deleteQuery = "DELETE FROM others WHERE record_ID = '$recordID'";
            $resultDelete = mysqli_query($conn, $deleteQuery);
    
            if ($resultDelete) {
                // Get the ID number of the deleted record
                $recordNumber = intval(substr($recordID, 1));
    
                // Decrement the record_ID for records with IDs greater than the deleted record
                $updateQuery = "UPDATE others SET record_ID = CONCAT('O', LPAD(SUBSTRING(record_ID, 2) - 1, 4, '0'))
                                WHERE SUBSTRING(record_ID, 2) > $recordNumber";
                $resultUpdate = mysqli_query($conn, $updateQuery);
    
                if ($resultUpdate) {
                    // Reset the AUTO_INCREMENT value
                    $resetQuery = "ALTER TABLE others AUTO_INCREMENT = 1";
                    mysqli_query($conn, $resetQuery);
    
                    echo '<script>alert("Record deleted successfully")</script>';
                    header("Refresh:0");
                } else {
                    echo '<script>alert("Error updating record IDs")</script>';
                    header("Refresh:0");
                }
            } else {
                echo '<script>alert("Error deleting record")</script>';
                header("Refresh:0");
            }
        }
    }

    function getOtherRecords($conn){
        $queryOther = "SELECT * FROM others";

        if ($resultOther = mysqli_query($conn,$queryOther)) {
            $OtherRowCount = mysqli_num_rows($resultOther);

            mysqli_free_result($resultOther);

            return $OtherRowCount;
        }
        else{
            return false;
        }
    }

    function EditLeaveRecord($conn) {
        if (isset($_POST['editRecord'])) {
            $recordID = $_GET['record_ID'];
            $newFirstName = $_POST['record_firstName'];
            $newMiddleName = $_POST['record_middleName'];
            $newLastName = $_POST['record_lastName'];
            $newGender = $_POST['record_gender'];
            $newCourse = $_POST['record_department'];
            $newYear = $_POST['record_year'];
            $newSection = $_POST['record_section'];
            $newReason = $_POST['record_reason'];
            $newStatus = $_POST['record_status'];
            $newRemarks = $_POST['record_remarks'];

            $updateLeave = "UPDATE leave_of_absence SET firstName = '$newFirstName', middleName = '$newMiddleName', lastName = '$newLastName'
                            , gender = '$newGender', department = '$newCourse', year = '$newYear', section = '$newSection', reason = '$newReason'
                            , status = '$newStatus', remarks = '$newRemarks' WHERE record_ID = '$recordID'";

            if (mysqli_query($conn, $updateLeave)) {
                echo '<script>
                    Swal.fire({
                        title: "Are you sure?",
                        text: "Are you sure you want to edit this record?",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, save it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            Swal.fire({
                                title: "Success",
                                text: "Record edited successfully",
                                icon: "success"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "admin-records-loa.php";
                                }
                            });
                        }
                    });
                </script>';
            }
            else {
                echo '<script> alert ("Error updating record") </script>';
            }
        }
    }

    function fetchLeaveRecordDetails($conn) {
        if (isset($_GET['record_ID'])) {
            $recordID = $_GET['record_ID'];
            $editLeaveQuery = "SELECT firstName, middleName, lastName, gender, department, year, section, reason, status, remarks FROM leave_of_absence WHERE record_ID = '$recordID'";
            $editLeaveResult = mysqli_query($conn, $editLeaveQuery);

            if ($editLeaveResult && $editLeaveResult->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($editLeaveResult)) {
                    $firstName = $row['firstName'];
                    $middleName = $row['middleName'];
                    $lastName = $row['lastName'];
                    $gender = $row['gender'];
                    $department = $row['department'];
                    $year = $row['year'];
                    $section = $row['section'];
                    $reason = $row['reason'];
                    $status = $row['status'];
                    $remarks = $row['remarks'];

                    echo '
                        <div class="row mx-auto">
                            <div class="card">
                                <div class="card-header text-center mb-n5">
                                    <p class="h3">'.$firstName.' \'s Record</p>
                                </div>
                                <div class="card-body">
                                    <form action="#" method="POST" class="form">
                                        <div class="form-group">
                                            <label for="record_firstName" class="mb-3">Personal Details</label>
                                            <input id="record_firstName" name="record_firstName" value="'.$firstName.'" placeholder="First Name" type="text" required="required" class="form-control mb-3">
                                        </div>
                                        <div class="form-group">
                                            <input id="record_middleName" name="record_middleName" value="'.$middleName.'" placeholder="Middle Name" type="text" class="form-control mb-3">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="record_lastName" name="record_lastName" value="'.$lastName.'" placeholder="Last Name" type="text" required="required" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_gender" class="mb-3">Gender</label>
                                            <div>
                                                <select id="record_gender" name="record_gender" class="form-select" aria-describedby="record_genderHelpBlock">
                                                    <option value="'.$gender.'" selected hidden>'.$gender.'</option>
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
                                                    <option value="'.$department.'" selected hidden>'.$department.'</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Information System">Information System</option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Nursing">Nursing</option>
                                                    <option value="Psychology">Psychology</option>
                                                    <option value="Midwifery">Midwifery</option>
                                                </select>
                                                <span id="record_departmentHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_year" class="mb-3">Year</label>
                                            <div>
                                                <select id="record_year" name="record_year" class="form-select" aria-describedby="record_yearHelpBlock">
                                                    <option value="'.$year.'" selected hidden>'.$year.'</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="1st Year">1st Year</option>
                                                    <option value="2nd Year">2nd Year</option>
                                                    <option value="3rd Year">3rd Year</option>
                                                    <option value="4th Year">4th Year</option>
                                                </select>
                                                <span id="record_yearHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_section" class="mb-3">Section</label>
                                            <input id="record_section" name="record_section" type="text" value="'.$section.'" class="form-control" aria-describedby="record_sectionHelpBlock">
                                            <span id="record_sectionHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_reason" class="mb-3">Reason</label>
                                            <input id="record_reason" name="record_reason" type="text" value="'.$reason.'" class="form-control" aria-describedby="record_reasonHelpBlock" required="required">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_status" class="mb-3">Status</label>
                                            <div>
                                                <select id="record_status" name="record_status" class="form-select" aria-describedby="record_statusHelpBlock">
                                                    <option value="'.$status.'" selected hidden>'.$status.'</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Rejected">Rejected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_remarks" class="mb-3">Remarks</label>
                                            <input id="record_remarks" name="record_remarks" type="text" value="'.$remarks.'" class="form-control" aria-describedby="record_remarksHelpBlock" required="required">
                                        </div>
                                        <div class="form-group">
                                            <button name="editRecord" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                }
            }
        }
        else {
            echo '<script> alert ("Error Fetching Record ID") </script>';
            header("Refresh: 0");
            exit();
        }
    }

    function EditCounsellingRecord($conn) {
        if (isset($_POST['editRecord'])) {
            $recordID = $_GET['record_ID'];
            $newFirstName = $_POST['record_firstName'];
            $newMiddleName = $_POST['record_middleName'];
            $newLastName = $_POST['record_lastName'];
            $newGender = $_POST['record_gender'];
            $newCourse = $_POST['record_course'];
            $newYear = $_POST['record_year'];
            $newSection = $_POST['record_section'];
            $newReason = $_POST['record_reason'];
            $newStatus = $_POST['record_status'];
            $newRemarks = $_POST['record_remarks'];

            $updateLeave = "UPDATE counselling SET firstName = '$newFirstName', middleName = '$newMiddleName', lastName = '$newLastName'
                            , gender = '$newGender', course = '$newCourse', year = '$newYear', section = '$newSection', reason = '$newReason'
                            , status = '$newStatus', remarks = '$newRemarks' WHERE record_ID = '$recordID'";

            if (mysqli_query($conn, $updateLeave)) {
                echo '<script> alert ("Record has been successfully updated")</script>';
                
                header("Location: admin-records-counselling.php");
                exit();
            }
            else {
                echo '<script> alert ("Error updating record") </script>';
            }
        }
    }

    function fetchCounsellingRecordDetails($conn) {
        if (isset($_GET['record_ID'])) {
            $recordID = $_GET['record_ID'];
            $editCounsellingQuery = "SELECT firstName, middleName, lastName, gender, course, year, section, reason, status, remarks FROM counselling WHERE record_ID = '$recordID'";
            $editCounsellingResult = mysqli_query($conn, $editCounsellingQuery);

            if ($editCounsellingResult && $editCounsellingResult->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($editCounsellingResult)) {
                    $firstName = $row['firstName'];
                    $middleName = $row['middleName'];
                    $lastName = $row['lastName'];
                    $gender = $row['gender'];
                    $course = $row['course'];
                    $year = $row['year'];
                    $section = $row['section'];
                    $reason = $row['reason'];
                    $status = $row['status'];
                    $remarks = $row['remarks'];

                    echo '
                        <div class="row mx-auto">
                            <div class="card">
                                <div class="card-header text-center mb-n5">
                                    <p class="h3">'.$firstName.' \'s Record</p>
                                </div>
                                <div class="card-body">
                                    <form action="#" method="POST" class="form">
                                        <div class="form-group">
                                            <label for="record_firstName" class="mb-3">Personal Details</label>
                                            <input id="record_firstName" name="record_firstName" value="'.$firstName.'" placeholder="First Name" type="text" required="required" class="form-control mb-3">
                                        </div>
                                        <div class="form-group">
                                            <input id="record_middleName" name="record_middleName" value="'.$middleName.'" placeholder="Middle Name" type="text" class="form-control mb-3">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="record_lastName" name="record_lastName" value="'.$lastName.'" placeholder="Last Name" type="text" required="required" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_gender" class="mb-3">Gender</label>
                                            <div>
                                                <select id="record_gender" name="record_gender" class="form-select" aria-describedby="record_genderHelpBlock">
                                                    <option value="'.$gender.'" selected hidden>'.$gender.'</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Binary">Binary</option>
                                                    <option value="Non-Binary">Non-Binary</option>
                                                    <option value="Prefer not to say">Prefer not to say</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_course" class="mb-3">Course</label>
                                            <div>
                                                <select id="record_course" name="record_course" class="form-select" aria-describedby="record_courseHelpBlock">
                                                    <option value="'.$course.'" selected hidden>'.$course.'</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Information System">Information System</option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Nursing">Nursing</option>
                                                    <option value="Psychology">Psychology</option>
                                                    <option value="Midwifery">Midwifery</option>
                                                </select>
                                                <span id="record_courseHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_year" class="mb-3">Year</label>
                                            <div>
                                                <select id="record_year" name="record_year" class="form-select" aria-describedby="record_yearHelpBlock">
                                                    <option value="'.$year.'" selected hidden>'.$year.'</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="1st Year">1st Year</option>
                                                    <option value="2nd Year">2nd Year</option>
                                                    <option value="3rd Year">3rd Year</option>
                                                    <option value="4th Year">4th Year</option>
                                                </select>
                                                <span id="record_yearHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_section" class="mb-3">Section</label>
                                            <input id="record_section" name="record_section" type="text" value="'.$section.'" class="form-control" aria-describedby="record_sectionHelpBlock">
                                            <span id="record_sectionHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_reason" class="mb-3">Reason</label>
                                            <input id="record_reason" name="record_reason" type="text" value="'.$reason.'" class="form-control" aria-describedby="record_reasonHelpBlock" required="required">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_status" class="mb-3">Status</label>
                                            <div>
                                                <select id="record_status" name="record_status" class="form-select" aria-describedby="record_statusHelpBlock">
                                                    <option value="'.$status.'" selected hidden>'.$status.'</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Rejected">Rejected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_remarks" class="mb-3">Remarks</label>
                                            <input id="record_remarks" name="record_remarks" type="text" value="'.$remarks.'" class="form-control" aria-describedby="record_remarksHelpBlock" required="required">
                                        </div>
                                        <div class="form-group">
                                            <button name="editRecord" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                }
            }
        }
        else {
            echo '<script> alert ("Error Fetching Record ID") </script>';
            header("Refresh: 0");
            exit();
        }
    }

    function EditOtherRecord($conn) {
        if (isset($_POST['editRecord'])) {
            $recordID = $_GET['record_ID'];
            $newFirstName = $_POST['record_firstName'];
            $newMiddleName = $_POST['record_middleName'];
            $newLastName = $_POST['record_lastName'];
            $newGender = $_POST['record_gender'];
            $newCourse = $_POST['record_course'];
            $newYear = $_POST['record_year'];
            $newSection = $_POST['record_section'];
            $newReason = $_POST['record_reason'];
            $newStatus = $_POST['record_status'];
            $newRemarks = $_POST['record_remarks'];

            $updateOther = "UPDATE others SET firstName = '$newFirstName', middleName = '$newMiddleName', lastName = '$newLastName'
                            , gender = '$newGender', course = '$newCourse', year = '$newYear', section = '$newSection', reason = '$newReason'
                            , status = '$newStatus', remarks = '$newRemarks' WHERE record_ID = '$recordID'";

            if (mysqli_query($conn, $updateOther)) {
                echo '<script> alert ("Record has been successfully updated")</script>';
                
                header("Location: records-other.php");
                exit();
            }
            else {
                echo '<script> alert ("Error updating record") </script>';
            }
        }
    }

    function fetchOtherRecordDetails($conn) {
        if (isset($_GET['record_ID'])) {
            $recordID = $_GET['record_ID'];
            $editOtherQuery = "SELECT firstName, middleName, lastName, gender, course, year, section, reason, status, remarks FROM others WHERE record_ID = '$recordID'";
            $editOtherResult = mysqli_query($conn, $editOtherQuery);

            if ($editOtherResult && $editOtherResult->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($editOtherResult)) {
                    $firstName = $row['firstName'];
                    $middleName = $row['middleName'];
                    $lastName = $row['lastName'];
                    $gender = $row['gender'];
                    $course = $row['course'];
                    $year = $row['year'];
                    $section = $row['section'];
                    $reason = $row['reason'];
                    $status = $row['status'];
                    $remarks = $row['remarks'];

                    echo '
                        <div class="row mx-auto">
                            <div class="card">
                                <div class="card-header text-center mb-n5">
                                    <p class="h3">'.$firstName.' \'s Record</p>
                                </div>
                                <div class="card-body">
                                    <form action="#" method="POST" class="form">
                                        <div class="form-group">
                                            <label for="record_firstName" class="mb-3">Personal Details</label>
                                            <input id="record_firstName" name="record_firstName" value="'.$firstName.'" placeholder="First Name" type="text" required="required" class="form-control mb-3">
                                        </div>
                                        <div class="form-group">
                                            <input id="record_middleName" name="record_middleName" value="'.$middleName.'" placeholder="Middle Name" type="text" class="form-control mb-3">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input id="record_lastName" name="record_lastName" value="'.$lastName.'" placeholder="Last Name" type="text" required="required" class="form-control">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_gender" class="mb-3">Gender</label>
                                            <div>
                                                <select id="record_gender" name="record_gender" class="form-select" aria-describedby="record_genderHelpBlock">
                                                    <option value="'.$gender.'" selected hidden>'.$gender.'</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                    <option value="Binary">Binary</option>
                                                    <option value="Non-Binary">Non-Binary</option>
                                                    <option value="Prefer not to say">Prefer not to say</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_course" class="mb-3">Course</label>
                                            <div>
                                                <select id="record_course" name="record_course" class="form-select" aria-describedby="record_courseHelpBlock">
                                                    <option value="'.$course.'" selected hidden>'.$course.'</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="Information System">Information System</option>
                                                    <option value="Civil Engineering">Civil Engineering</option>
                                                    <option value="Nursing">Nursing</option>
                                                    <option value="Psychology">Psychology</option>
                                                    <option value="Midwifery">Midwifery</option>
                                                </select>
                                                <span id="record_courseHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_year" class="mb-3">Year</label>
                                            <div>
                                                <select id="record_year" name="record_year" class="form-select" aria-describedby="record_yearHelpBlock">
                                                    <option value="'.$year.'" selected hidden>'.$year.'</option>
                                                    <option value="N/A">N/A</option>
                                                    <option value="1st Year">1st Year</option>
                                                    <option value="2nd Year">2nd Year</option>
                                                    <option value="3rd Year">3rd Year</option>
                                                    <option value="4th Year">4th Year</option>
                                                </select>
                                                <span id="record_yearHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_section" class="mb-3">Section</label>
                                            <input id="record_section" name="record_section" type="text" value="'.$section.'" class="form-control" aria-describedby="record_sectionHelpBlock">
                                            <span id="record_sectionHelpBlock" class="form-text text-muted">*Do not fill out if not a student</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_reason" class="mb-3">Reason</label>
                                            <input id="record_reason" name="record_reason" type="text" value="'.$reason.'" class="form-control" aria-describedby="record_reasonHelpBlock" required="required">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_status" class="mb-3">Status</label>
                                            <div>
                                                <select id="record_status" name="record_status" class="form-select" aria-describedby="record_statusHelpBlock">
                                                    <option value="'.$status.'" selected hidden>'.$status.'</option>
                                                    <option value="Approved">Approved</option>
                                                    <option value="Pending">Pending</option>
                                                    <option value="Rejected">Rejected</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="record_remarks" class="mb-3">Remarks</label>
                                            <input id="record_remarks" name="record_remarks" type="text" value="'.$remarks.'" class="form-control" aria-describedby="record_remarksHelpBlock" required="required">
                                        </div>
                                        <div class="form-group">
                                            <button name="editRecord" type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    ';
                }
            }
        }
        else {
            echo '<script> alert ("Error Fetching Record ID") </script>';
            header("Refresh: 0");
            exit();
        }
    }

    function getAllTable($conn) {
        $allQuery = "SELECT 'leave_of_absence' AS source, record_ID, firstName, middleName, lastName, gender, department AS course, year, section, reason, status, remarks, date FROM leave_of_absence
        UNION ALL
        SELECT 'counselling' AS source, record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date FROM counselling
        UNION ALL
        SELECT 'others' AS source, record_ID, firstName, middleName, lastName, gender, course, year, section, reason, status, remarks, date FROM others";

        $allResult = mysqli_query($conn, $allQuery);

        if ($allResult && mysqli_num_rows($allResult) > 0) {
            return $allResult;
        }
        else {
            return false;
        }
    }

    function createAccount($conn) {
        if (isset($_POST['createBtn'])) {
            if (!empty($_POST['firstName']) OR !empty($_POST['middleName']) OR !empty($_POST['lastName']) OR !empty($_POST['username']) OR !empty($_POST['password'])) {
                if (!preg_match('/[\'^$&{}<>;#%`~()-+|?":=!]/', $_POST['username'])) {

                    if ($_POST['username'] !== 'guidance_admin') {
                        $inputFirstName = $_POST['firstName'];
                        $inputMiddleName = $_POST['middleName'];
                        $inputLastName = $_POST['lastName'];
                        $inputContactNum = $_POST['contactNum'];
                        $inputUsername = $_POST['username'];
                        $inputPassword = $_POST['password'];
                        $inputConfirmPassword = $_POST['confirmPassword'];

                        $checkUsername = mysqli_query($conn, "SELECT username FROM staff WHERE username = '$inputUsername'");
                        $numberOfUser = mysqli_num_rows($checkUsername);

                        if ($numberOfUser < 1) {
                            // Check password match
                            if ($inputPassword == $inputConfirmPassword) {
                                $hashPassword = password_hash($inputPassword,  PASSWORD_BCRYPT, array('cost' => 12));

                                $saveRecord = $conn->prepare("INSERT INTO `staff` (`staff_ID`, `staff_firstName`, `staff_middleName`, `staff_lastName`, `staff_contactNum`, `username`, `password`)
                                VALUES ('', ?, ?, ?, ?, ?, ?)");

                                $saveRecord->bind_param("ssssss", $inputFirstName, $inputMiddleName, $inputLastName, $inputContactNum, $inputUsername, $hashPassword);

                                if ($saveRecord->errno) {
                                    echo '<script>
                                        Swal.fire({
                                            title: "Error",
                                            text: "Account creation failed",
                                            icon: "error"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = "createAccount.php";
                                            }
                                        });
                                    </script>';
                                }
                                else {
                                    echo '<script>
                                        Swal.fire({
                                            title: "Success",
                                            text: "Account successfully created",
                                            icon: "success"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = "createAccount.php";
                                            }
                                        });
                                    </script>';

                                    $saveRecord->execute();
                                    $saveRecord->close();
                                    $conn->close();
                                }
                            }
                            else {
                                echo '<script>
                                Swal.fire({
                                    title: "Error",
                                    text: "Password did not match",
                                    icon: "error"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "createAccount.php";
                                    }
                                });
                            </script>';
                            }
                        }
                    }
                    else {
                        echo '<script>
                            Swal.fire({
                                title: "Error",
                                text: "Username already exist",
                                icon: "error"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "createAccount.php";
                                }
                            });
                        </script>';
                    }
                }
                else {
                    echo '<script>
                        Swal.fire({
                            title: "Error",
                            text: "No special characters allowed",
                            icon: "error"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "createAccount.php";
                            }
                        });
                    </script>';
                }
            }
            else {
                echo '<script>alert("fill out all required fields")</script>';
            }
        }
    }

    function createStudentAccount($conn) {
        if (isset($_POST['btnRegister'])) {
            if (!empty($_POST['student_username']) OR !empty($_POST['student_password']) OR !empty($_POST['student_firstName']) OR !empty($_POST['student_middleName']) OR !empty($_POST['student_lastName']) OR !empty($_POST['student_course']) OR !empty($_POST['student_section'])) {
                if (!preg_match('/[\'^$&{}<>;#%`~()-+|?":=!]/', $_POST['student_username'])) {

                    if ($_POST['student_username'] !== 'guidance_admin') {
                        $inputUsername = $_POST['student_username'];
                        $inputPassword = $_POST['student_password'];
                        $inputConfirmPassword = $_POST['student_confirmPassword'];
                        $inputFirstName = $_POST['student_firstName'];
                        $inputMiddleName = $_POST['student_middleName'];
                        $inputLastName = $_POST['student_lastName'];
                        $inputCourse = $_POST['student_course'];
                        $inputsection = $_POST['student_section'];
                        
                        $checkUsername = mysqli_query($conn, "SELECT * FROM student WHERE KLD_ID = '$inputUsername'");
                        $numberOfUser = mysqli_num_rows($checkUsername);

                        if ($numberOfUser < 1) {
                            // Check password match
                            if ($inputPassword == $inputConfirmPassword) {
                                $hashPassword = password_hash($inputPassword,  PASSWORD_BCRYPT, array('cost' => 12));

                                $saveRecord = $conn->prepare("INSERT INTO `student` (`KLD_ID`, `firstName`, `middleName`, `lastName`, `course`, `section`, `password`)
                                VALUES (?, ?, ?, ?, ?, ?, ?)");

                                $saveRecord->bind_param("sssssss", $inputUsername, $inputFirstName, $inputMiddleName, $inputLastName, $inputCourse, $inputsection, $hashPassword);

                                if ($saveRecord->errno) {
                                    echo '<script>
                                        Swal.fire({
                                            title: "Error",
                                            text: "Account creation failed",
                                            icon: "error"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = "register.php";
                                            }
                                        });
                                    </script>';
                                }
                                else {
                                    echo '<script>
                                        Swal.fire({
                                            title: "Success",
                                            text: "Account successfully created",
                                            icon: "success"
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href = "login.php";
                                            }
                                        });
                                    </script>';

                                    $saveRecord->execute();
                                    $saveRecord->close();
                                    $conn->close();
                                }
                            }
                            else {
                                echo '<script>
                                Swal.fire({
                                    title: "Error",
                                    text: "Password did not match",
                                    icon: "error"
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        window.location.href = "register.php";
                                    }
                                });
                            </script>';
                            }
                        }
                    }
                    else {
                        echo '<script>
                            Swal.fire({
                                title: "Error",
                                text: "Username already exist",
                                icon: "error"
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "register.php";
                                }
                            });
                        </script>';
                    }
                }
                else {
                    echo '<script>
                        Swal.fire({
                            title: "Error",
                            text: "No special characters allowed",
                            icon: "error"
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "register.php";
                            }
                        });
                    </script>';
                }
            }
            else {
                echo '<script>alert("fill out all required fields")</script>';
            }
        }
    }
?>