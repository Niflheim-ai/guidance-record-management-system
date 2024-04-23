<?php
    //                        server   username pw  database name
    $conn = mysqli_connect("localhost", "root", "", "guidance_record");

    if ($conn) {
        // echo 'You are connected to the database';
    }
    else {
        echo 'Unable to connect to the database';
    }
?>