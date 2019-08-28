<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "root";
$DB_name = "db";

$conn = new MySQLi($DB_host,$DB_user,$DB_pass,$DB_name);

// If we can't connect to the database, display an error message
if($conn->connect_errno) {
    die("<br />Could not connect to the database. <br /> <b>Error</b>: ".$conn->connect_error);
}
else {
    // echo "Successfully connected to database $DB_name";
}

// Display all PHP errors
error_reporting(E_ALL);
ini_set('display_errors', 'on');

// Set MySQLi Charset
mysqli_set_charset($conn, "utf8mb4");

?>
