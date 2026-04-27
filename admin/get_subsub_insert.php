<?php
include 'conn.php';  
$subcategory_id = $_POST["subcategory_id"];
$result = mysqli_query($conn, "SELECT * FROM sub_subcategory where sub_category_id = $subcategory_id");
?>
<option value="">Select Sub Sub-Category</option>
<option value="0">None</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
<option value="<?php echo $row["id"]; ?>"><?php echo $row["sub_subcategoryname"]; ?></option>
<?php
}
?>