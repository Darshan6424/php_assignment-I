<?php

include 'server_connection.php';

$sql = "CREATE DATABASE STD";

if ($conn->query($sql) == TRUE) {
    echo "Database created successfully";
}
else {
    echo "Error Creating Database: " . $conn->error;
}

?>