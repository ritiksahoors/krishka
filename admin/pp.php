<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "indus_supply";
$base_url = "http://localhost/indussupply/";


// $username="u728233529_indus_supply";
// $password="Indus_supply@1234";
// $database="u728233529_indus_supply";
// $base_url="https://techgeering.com/indusuplytest/";

// $username="u728233529_indus_supply";
// $password="Indus_supply@1234";
// $database="u728233529_indus_supply";
// $base_url="http://indus-supply.com/test-link/";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die($conn->connect_error);
}

// Set MySQL timezone to Europe/Paris
$conn->query("SET time_zone = 'Europe/Paris'");
?>