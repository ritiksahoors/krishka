<?php
if (isset($_POST['productupdate'])) {
    include 'conn.php';
    $upload_dir = "upload/product/";

    // Function to handle file upload and update
    function handleFileUpload($fieldName, $targetColumnName, $isUploading)
    {
        global $conn, $upload_dir;
        $image_name = $_FILES[$fieldName]['name'];
        $image_tmp = $_FILES[$fieldName]['tmp_name'];
        $file_type = pathinfo($image_name, PATHINFO_EXTENSION);
        $new_file_name = uniqid() . '.' . $file_type;

        // Retrieve the previous file name from the database
        $sql_previous_image = "SELECT $targetColumnName FROM product WHERE id='{$_POST['id4']}'";
        $result = $conn->query($sql_previous_image);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $previous_image = $upload_dir . $row[$targetColumnName];
            // Delete previous file from the upload folder if uploading a new file
            if ($isUploading && !empty($image_name) && $new_file_name !== $row[$targetColumnName]) {
                if (file_exists($previous_image)) {
                    unlink($previous_image);
                }
            }
        }
        $target_file = $upload_dir . $new_file_name;
        if (move_uploaded_file($image_tmp, $target_file)) {
            return $new_file_name;
        } else {
            return false;
        }
    }

    // Handle file uploads and get new file names
    $new_file_name1 = handleFileUpload('image1', 'product_image1', !empty($_FILES['image1']['name']));
    $new_file_name2 = handleFileUpload('image2', 'product_image2', !empty($_FILES['image2']['name']));
    $new_file_name3 = handleFileUpload('image3', 'product_image3', !empty($_FILES['image3']['name']));
    $new_file_name4 = handleFileUpload('image4', 'product_image4', !empty($_FILES['image4']['name']));
    $new_pdf_file_name = handleFileUpload('productpdf', 'pdf', !empty($_FILES['productpdf']['name']));

    // Other form data
    $id = $_POST["id4"];
    $productname = $_POST["productname"];
    $category = $_POST["category"];
    $subcategory = $_POST["subcategory"];
    $subsubcategory = $_POST["subsubcategory"];
    $productcode = $_POST["productcode"];
    $productprice = $_POST["productprice"];
    $productdiscountprice = $_POST["productdiscountprice"];
    $productdescription = $_POST["content"];
    $featured = isset($_POST["featured"]) ? $_POST["featured"] : 0;
    $bestsellers = isset($_POST["bestsellers"]) ? $_POST["bestsellers"] : 0;
    $sale = isset($_POST["sale"]) ? $_POST["sale"] : 0;
    $toprated = isset($_POST["toprated"]) ? $_POST["toprated"] : 0;
    $specialoffers = isset($_POST["specialoffers"]) ? $_POST["specialoffers"] : 0;
    $slug = $_POST["slug"];
    $keywords = $_POST["keywords1"];
    $metadescription = $_POST["metadescription"];

    // Update query
    $sql = "UPDATE product SET product_name='$productname', category_id='$category', sub_category_id='$subcategory', sub_subcategory_id='$subsubcategory', product_code='$productcode', product_price='$productprice', product_discount_price='$productdiscountprice', product_description='$productdescription', featured_product='$featured', bestsellers='$bestsellers', sale='$sale', toprated='$toprated', specialoffers='$specialoffers', slug='$slug', keywords='$keywords', meta_description='$metadescription'";

    if ($new_file_name1 !== false) {
        $sql .= ", product_image1='$new_file_name1'";
    }
    if ($new_file_name2 !== false) {
        $sql .= ", product_image2='$new_file_name2'";
    }
    if ($new_file_name3 !== false) {
        $sql .= ", product_image3='$new_file_name3'";
    }
    if ($new_file_name4 !== false) {
        $sql .= ", product_image4='$new_file_name4'";
    }
    if ($new_pdf_file_name !== false) {
        $sql .= ", pdf='$new_pdf_file_name'";
    }

    $sql .= " WHERE id='$id'";

    // Execute the update query
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                    $(document).ready(function(){
                    toastr.success('Form submitted successfully');
                    setTimeout(function(){
                    window.location.href = 'product.php';
                    }, 2000); // 2000 milliseconds = 1 second
                    });
                </script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
}
?>