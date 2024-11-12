<?php

include 'server_connection.php';
include 'database_connection.php';

$sql = "DROP DATABASE $dbname";
if($conn->query($sql) == TRUE){
    echo "Database deleted successfully";
}
else{
    echo "Error deleting database: " . $conn->error;
}

?>