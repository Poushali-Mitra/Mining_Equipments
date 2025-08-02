<?php
$host = 'localhost';//The database is hosted on the same server
$user = 'root';//by default mySql
$password = '';//no pass
$database = 'mining_tracker';//name of the database
$conn = new mysqli($host, $user, $password, $database);//establishing the connection with database and $conn is the connection obj execute queries
if ($conn->connect_error) {//if conn fails
    die("DB Connection failed: " . $conn->connect_error);
}
?>
