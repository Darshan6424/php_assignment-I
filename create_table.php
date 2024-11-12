<?php
include "server_connection.php";
include "database_connection.php";

$sql = "CREATE TABLE STD_INFO(
    ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(80) NOT NULL,
    AGE INT(3) NOT NULL,
    ADDRESS VARCHAR(100) NOT NULL,
    EMAIL VARCHAR(30) NOT NULL,
    PHONE VARCHAR(10) NOT NULL
)";

if($conn->query($sql) == TRUE){
    echo "Table created successfully";
}
else{
    echo "Error creating table: " . $conn->error;
}
?>