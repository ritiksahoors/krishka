<?php
include 'conn.php';

if (isset($_POST['category_id'])) {

    $category_id = intval($_POST['category_id']);

    echo '<option value="">Select Sub-Category</option>';

    $sql = "SELECT id, sub_category_name 
            FROM sub_category 
            WHERE category_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $category_id);
    $stmt->execute();
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row['id'] . '">'
            . htmlspecialchars($row['sub_category_name'], ENT_QUOTES, 'UTF-8') .
            '</option>';
    }
}
?>