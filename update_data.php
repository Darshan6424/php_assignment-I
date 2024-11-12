<?php
include 'server_connection.php';
include 'database_connection.php';

$sql = "UPDATE STD_INFO SET AGE = 18 WHERE ID = 1;";

if($conn->query($sql) == TRUE){
    echo "Data modified successfully";
}
else{
    echo "Error modifying data: " . $conn->error;
}

?>