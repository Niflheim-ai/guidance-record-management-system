<?php

    require_once('dbConnection.php');
    require_once('assets/dompdf/autoload.inc.php'); // location ng dompdf, nasa loob ng assets folder sakin kaya may assets sa unahan, dompdf/autoload.inc.php lang talaga kailangan

    use Dompdf\Dompdf;
    extract($_POST);

    if (isset($exportloa)) {
        $sql = "SELECT * FROM leave_of_absence ORDER BY record_ID desc"; // table na gagawing pdf

        $leaveRecord = "SELECT * FROM leave_of_absence";
        if ($resultLeave = mysqli_query($conn, $leaveRecord)) { // etong nakahiwalay na block of code para lang yan sa total number of rows
            $leaveRowCount = mysqli_num_rows($resultLeave);
        }

        $query = mysqli_query($conn, $sql); // eto yung pinaka table, yung madidisplay sa pdf, customize mo nalang yung $leaveRowCount ayan yung total number of rows
        $html = '';
        $html .= '
            <h2 align="center">Leave Of Absence Report<h2>
            <p align="left">Total Number of Records: '.$leaveRowCount.'<p>
            <table style="width:100%l border-collapse:collapse;>"
                <tr>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Record ID</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">First Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Middle Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Last Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Gender</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Course</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Year</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Section</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Reason</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Status</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Remarks</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Date Added</th>
                </tr>
        ';
        if (mysqli_num_rows($query) > 0) {
            $count = 1;
            foreach ($query as $data) {
                $html .= '
                <tr>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["record_ID"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["firstName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["middleName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["lastName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["gender"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["department"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["year"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["section"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["reason"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["status"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["remarks"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["date"].'</td>
                ';
                $count++;
            }
        }
        else {
            $html .= '
                <tr>
                    <td colspan="5" style="border:1px solid #ddd; padding:8px; text-align:left;">No Data</td>
                </tr>
            ';
        }
        $html .= '</table>';
        $dompdf = new DOMPDF();
        $dompdf->loadHtml($html);
        $dompdf->setPaper("A4", "landscape"); // magiging orientation and size ng pdf
        $dompdf->render();
        $dompdf->stream("loa-report.pdf"); // magiging file name pag inexport
    }

    if (isset($exportcounselling)) {
        $sql = "SELECT * FROM counselling ORDER BY record_ID desc";

        $counsellingRecord = "SELECT * FROM counselling";
        if ($resultCounselling = mysqli_query($conn, $counsellingRecord)) {
            $counsellingRowCount = mysqli_num_rows($resultCounselling);
        }

        $query = mysqli_query($conn, $sql);
        $html = '';
        $html .= '
            <h2 align="center">Counselling/Consultation Report<h2>
            <p align="left">Total Number of Records: '.$counsellingRowCount.'<p>
            <table style="width:100%l border-collapse:collapse;>"
                <tr>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Record ID</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">First Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Middle Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Last Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Gender</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Course</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Year</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Section</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Reason</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Status</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Remarks</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Date Added</th>
                </tr>
        ';
        if (mysqli_num_rows($query) > 0) {
            $count = 1;
            foreach ($query as $data) {
                $html .= '
                <tr>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["record_ID"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["firstName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["middleName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["lastName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["gender"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["course"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["year"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["section"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["reason"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["status"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["remarks"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["date"].'</td>
                ';
                $count++;
            }
        }
        else {
            $html .= '
                <tr>
                    <td colspan="5" style="border:1px solid #ddd; padding:8px; text-align:left;">No Data</td>
                </tr>
            ';
        }
        $html .= '</table>';
        $dompdf = new DOMPDF();
        $dompdf->loadHtml($html);
        $dompdf->setPaper("A4", "landscape");
        $dompdf->render();
        $dompdf->stream("counselling-report.pdf");
    }

    if (isset($exportaaf)) {
        $sql = "SELECT * FROM absence_approval_form ORDER BY record_ID desc";

        $aafRecord = "SELECT * FROM absence_approval_form";
        if ($resultaaf = mysqli_query($conn, $aafRecord)) {
            $aafRowCount = mysqli_num_rows($resultaaf);
        }

        $query = mysqli_query($conn, $sql);
        $html = '';
        $html .= '
            <h2 align="center">Counselling/Consultation Report<h2>
            <p align="left">Total Number of Records: '.$aafRowCount.'<p>
            <table style="width:100%l border-collapse:collapse;>"
                <tr>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Record ID</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">First Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Middle Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Last Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Gender</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Course</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Year</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Section</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Reason</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Status</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Remarks</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Date Added</th>
                </tr>
        ';
        if (mysqli_num_rows($query) > 0) {
            $count = 1;
            foreach ($query as $data) {
                $html .= '
                <tr>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["record_ID"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["firstName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["middleName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["lastName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["gender"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["course"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["year"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["section"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["reason"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["status"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["remarks"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["date"].'</td>
                ';
                $count++;
            }
        }
        else {
            $html .= '
                <tr>
                    <td colspan="5" style="border:1px solid #ddd; padding:8px; text-align:left;">No Data</td>
                </tr>
            ';
        }
        $html .= '</table>';
        $dompdf = new DOMPDF();
        $dompdf->loadHtml($html);
        $dompdf->setPaper("A4", "landscape");
        $dompdf->render();
        $dompdf->stream("aaf-report.pdf");
    }

    if (isset($exportaaf)) {
        $sql = "SELECT * FROM absence_approval_form ORDER BY record_ID desc";

        $aafRecord = "SELECT * FROM absence_approval_form";
        if ($resultaaf = mysqli_query($conn, $aafRecord)) {
            $aafRowCount = mysqli_num_rows($resultaaf);
        }

        $query = mysqli_query($conn, $sql);
        $html = '';
        $html .= '
            <h2 align="center">Absence Approval Form Report<h2>
            <p align="left">Total Number of Records: '.$aafRowCount.'<p>
            <table style="width:100%l border-collapse:collapse;>"
                <tr>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Record ID</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">First Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Middle Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Last Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Gender</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Course</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Year</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Section</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Reason</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Status</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Remarks</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Date Added</th>
                </tr>
        ';
        if (mysqli_num_rows($query) > 0) {
            $count = 1;
            foreach ($query as $data) {
                $html .= '
                <tr>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["record_ID"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["firstName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["middleName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["lastName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["gender"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["course"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["year"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["section"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["reason"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["status"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["remarks"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.date('M d Y', strtotime($data["date"])).'</td>
                ';
                $count++;
            }
        }
        else {
            $html .= '
                <tr>
                    <td colspan="5" style="border:1px solid #ddd; padding:8px; text-align:left;">No Data</td>
                </tr>
            ';
        }
        $html .= '</table>';
        $dompdf = new DOMPDF();
        $dompdf->loadHtml($html);
        $dompdf->setPaper("A4", "landscape");
        $dompdf->render();
        $dompdf->stream("aaf-report.pdf");
    }

    if (isset($exportOther)) {
        $sql = "SELECT * FROM others ORDER BY record_ID desc";

        $otherRecord = "SELECT * FROM others";
        if ($resultOther = mysqli_query($conn, $otherRecord)) {
            $otherRowCount = mysqli_num_rows($resultOther);
        }

        $query = mysqli_query($conn, $sql);
        $html = '';
        $html .= '
            <h2 align="center">Other Reasons Report<h2>
            <p align="left">Total Number of Records: '.$otherRowCount.'<p>
            <table style="width:100%l border-collapse:collapse;>"
                <tr>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Record ID</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">First Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Middle Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Last Name</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Gender</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Course</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Year</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Section</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Reason</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Status</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Remarks</th>
                    <th style="border: 1px solid #ddd; padding:8px; text-align:left;">Date Added</th>
                </tr>
        ';
        if (mysqli_num_rows($query) > 0) {
            $count = 1;
            foreach ($query as $data) {
                $html .= '
                <tr>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["record_ID"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["firstName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["middleName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["lastName"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["gender"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["course"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["year"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["section"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["reason"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["status"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["remarks"].'</td>
                    <td style="border:1px solid #ddd; padding:8px; text-align:left;">'.$data["date"].'</td>
                ';
                $count++;
            }
        }
        else {
            $html .= '
                <tr>
                    <td colspan="5" style="border:1px solid #ddd; padding:8px; text-align:left;">No Data</td>
                </tr>
            ';
        }
        $html .= '</table>';
        $dompdf = new DOMPDF();
        $dompdf->loadHtml($html);
        $dompdf->setPaper("A4", "landscape");
        $dompdf->render();
        $dompdf->stream("other-report.pdf");
    }
?>