<?php
include 'conn.php';

// // SQL query to create the sub_subcategory table
// $sql7 = "CREATE TABLE IF NOT EXISTS sub_subcategory (
//     id int(11) NOT NULL AUTO_INCREMENT,
//     sub_subcategoryname varchar(70) NOT NULL,
//     sub_category_id int(11) NOT NULL,
//     category_id int(11) NOT NULL,
//     status int(3) NOT NULL DEFAULT 1,
//     	updated_at timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
//     PRIMARY KEY (id)
//   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

// // Execute the SQL query
// if ($conn->query($sql7) === TRUE) {
//     echo "Table sub_subcategory created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// // SQL query to create the login table
// $sql8 = "CREATE TABLE IF NOT EXISTS login (
//     id int(11) NOT NULL AUTO_INCREMENT,
//     username varchar(40) NOT NULL,
//     password longtext NOT NULL,
//     phone varchar(13) NOT NULL,
//     email varchar(50) NOT NULL,
//     image varchar(50) NOT NULL,
//     status int(3) NOT NULL DEFAULT 1,
//     PRIMARY KEY (id)
//   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci";

// // Execute the SQL query
// if ($conn->query($sql8) === TRUE) {
//     echo "Table login created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }

// // SQL query to insert the login if it's not present
// $sql9 = "INSERT IGNORE INTO login (id, username, password, phone, email, status) VALUES
// (1, 'admin', '$2y$10$IO1J1Bd15kNmTUVLne3WruVxxy.mPUg1qIyjrTlyhIpQWt.8GkstK', 7894561232, 'demo@gmail.com', 1)";

// // Execute the SQL query
// if ($conn->query($sql9) === TRUE) {
//     echo "admin data inserted successfully";
// } else {
//     echo "Error insertingadmin data: " . $conn->error;
// }

$sql10 = "ALTER TABLE `enquiry` ADD COLUMN `service_name` VARCHAR(20) NOT NULL";

// Execute the SQL query
if ($conn->query($sql10) === TRUE) {
    echo "Column 'service_name' added successfully to the customer table";
} else {
    echo "Error adding column 'service_name' to the customer table: " . $conn->error;
}

$conn->close();