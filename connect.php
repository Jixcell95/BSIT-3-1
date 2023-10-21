<?php
    $SERVER_NAME = "localhost";
    $USERNAME = "root";
    $PASSWORD = "";
    $DB_NAME = "wdd_database";

    $conn = new mysqli($SERVER_NAME,$USERNAME,$PASSWORD,$DB_NAME);

    if($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    //echo "Connection Successful...";
    //$conn->close();
?>