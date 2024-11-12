<?php
include "server_connection.php";
include "database_connection.php";

$sql = "SELECT * FROM STD_INFO";

if($conn->query($sql) == TRUE){
    echo "Data inserted successfully";
}
else{
    echo "Error inserting data: " . $conn->error;
}

?>