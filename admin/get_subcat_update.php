<?php
include 'conn.php';
$category_id = $_POST["category_id"];
$result = mysqli_query($conn, "SELECT * FROM sub_category WHERE category_id = $category_id");
$options = '<option value="">Select Sub Category</option>';
while ($row = mysqli_fetch_array($result)) {
    $options .= '<option value="' . $row["id"] . '">' . $row["sub_category_name"] . '</option>';
}
echo $options;
?>