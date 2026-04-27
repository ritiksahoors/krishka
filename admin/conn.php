<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "krishika";
$base_url = "http://localhost/krishika/";


// $username = "u728233529_indus_supply";
// $password = "Indus_supply@1234";
// $database = "u728233529_indus_supply";
// $base_url = "https://techgeering.com/indusuplytest/";

// $username="u728233529_indus_supply";
// $password="Indus_supply@1234";
// $database="u728233529_indus_supply";
// $base_url="http://indus-supply.com/test-link/";

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