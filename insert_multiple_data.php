<?php
include 'server_connection.php';
include 'database_connection.php';

$sql = "INSERT INTO STD_INFO(NAME, AGE, ADDRESS, EMAIL, PHONE) Values
            ('Binod', 17, 'Kathmandu', 'binod@gmail.com', '9876582010'),
            ('Creation', 17, 'Bhaktapur', 'creation@gmail.com', '9876542340'),
            ('Anwesh', 17, 'Satungal', 'anwesh@gmail.com', '9887163210')";


if($conn->query($sql) == TRUE){
    echo "Data inserted successfully";
}
else{
    echo "Error inserting data: " . $conn->error;
}

?>