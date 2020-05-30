<!--SENKUBUGE PETER ALLAN | MIS | 2019-M132-20012-->
<?php

$conn = new mysqli('localhost:3308', 'root', '', 'foodsys');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>