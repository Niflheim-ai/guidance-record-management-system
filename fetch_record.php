<?php
    include('dbConnection.php');

    // Check if record_id is set and not empty
    if(isset($_POST['record_id']) && !empty($_POST['record_id'])) {
        // Sanitize the input to prevent SQL injection
        $recordId = mysqli_real_escape_string($connection, $_POST['record_id']);

        // Query to fetch data based on record ID
        $query = "SELECT * FROM leave_of_absence WHERE record_ID = '$recordId'";
        $result = mysqli_query($connection, $query);

        // Check if the query was successful
        if($result && mysqli_num_rows($result) > 0) {
            // Fetch data as an associative array
            $row = mysqli_fetch_assoc($result);
            
            // Encode fetched data as JSON and send it back
            echo json_encode($row);
        } else {
            // If no data found or query failed, send an empty response
            echo json_encode(array());
        }
    } else {
        // If record_id is not set or empty, send an empty response
        echo json_encode(array());
    }

    // Close database connection
    mysqli_close($connection);
?>
