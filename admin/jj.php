<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "indus_supply";
$base_url = "http://localhost/indussupply/";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die($conn->connect_error);
}

// Set timezone in PHP
date_default_timezone_set('Europe/Paris');

// Get current date and time in Paris timezone
$datetime = new DateTime();
$current_date = $datetime->format('Y-m-d H:i:s');

// Debug statement to check the current date and time
error_log("Current date and time in Paris: " . $current_date);

// Set MySQL timezone using offset
$offset = $datetime->format('P');
$conn->query("SET time_zone = '$offset'");

?>