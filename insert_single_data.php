<?php
include "server_connection.php";
include "database_connection.php";

$sql = "INSERT INTO STD_INFO(NAME, AGE, ADDRESS, EMAIL, PHONE) VALUES('Darshan', 17, 'Kathmandu', 'darshan@gmail.com', '9876543210')";

if($conn->query($sql) == TRUE){
    echo "Data inserted successfully";
}
else{
    echo "Error inserting data: " . $conn->error;
}

?>