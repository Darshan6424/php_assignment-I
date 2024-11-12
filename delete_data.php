<?php
include 'server_connection.php';
include 'database_connection.php';

$sql = "DELETE FROM STD_INFO WHERE ID = 4";
if($conn->query($sql) == TRUE){
    echo "Data removed successfully";
}
else{
    echo "Error removing data: " . $conn->error;
}

?>