<?php
include "conn.php";

if (isset($_POST['category_id'])) {
    $category_id = $_POST['category_id'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM sub_category WHERE category_id = '$category_id'"
    );

    echo '<option value="">Select Sub-Category</option>';

    while ($row = mysqli_fetch_assoc($query)) {
        echo '<option value="' . $row['id'] . '">' . $row['sub_category_name'] . '</option>';
    }
}
?>