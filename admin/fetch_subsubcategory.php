<?php
include "conn.php";

if (isset($_POST['subcategory_id'])) {
    $subcategory_id = $_POST['subcategory_id'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM sub_subcategory WHERE sub_category_id = '$subcategory_id'"
    );

    echo '<option value="">Select Sub Sub Category</option>';
    echo '<option value="0">None</option>';

    while ($row = mysqli_fetch_assoc($query)) {
        echo '<option value="' . $row['id'] . '">' . $row['sub_subcategoryname'] . '</option>';
    }
}
?>