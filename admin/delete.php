<?php
include 'conn.php';

if (isset($_GET['delete'], $_GET['tb'], $_GET['returnpage'], $_GET['tbc'])) {
    $id = $_GET['delete'];
    $table = $_GET['tb'];
    $returnPage = $_GET['returnpage'];
    $tableColumn = $_GET['tbc'];

    $imageColumns = ['banner_image', 'image', 'category_image', 'product_image1', 'product_image2', 'product_image3', 'product_image4', 'pdf', 'image1', 'image2', 'image3', 'image4'];
    $paths = [
        "banner" => "upload/banner",
        "occasion" => "upload/occasion",
        "pdfupload" => "upload/catalogue/pdf",
        "product" => "upload/product",
        "service" => "upload/service"
    ];

    $imagePath = $paths[$table] ?? 'upload';

    foreach ($imageColumns as $imageColumn) {
        $checkColumnSql = "SHOW COLUMNS FROM $table LIKE '$imageColumn'";
        $columnResult = mysqli_query($conn, $checkColumnSql);

        if ($columnResult && mysqli_num_rows($columnResult) > 0) {
            $sql = "SELECT $imageColumn FROM $table WHERE $tableColumn = '$id'";
            $result = mysqli_query($conn, $sql);

            if ($result && $row = mysqli_fetch_assoc($result)) {
                $imageToDelete = $row[$imageColumn];
                $fullImagePath = "$imagePath/$imageToDelete";

                if (file_exists($fullImagePath) && is_writable($fullImagePath)) {
                    if (!unlink($fullImagePath)) {
                        echo "Error deleting image: $fullImagePath";
                    } else {
                        echo "<script>alert('Image Deleted Successfully');</script>";
                    }
                }
            }
        }
    }

    if ($table == "category") {
        $deleteSql = "DELETE FROM $table WHERE $tableColumn = '$id'";
        if ($conn->query($deleteSql) === true) {
            $subCategorySql = "DELETE FROM sub_category WHERE category_id = '$id'";
            if ($conn->query($subCategorySql) === true) {
                $subSubCategorySql = "DELETE FROM sub_subcategory WHERE category_id = '$id'";
                if ($conn->query($subSubCategorySql) === true) {
                    $productSql = "DELETE FROM product WHERE category_id = '$id'";
                    if ($conn->query($productSql) === true) {
                        header("Location: $returnPage");
                        exit;
                    }
                }
            }
        }
    } elseif ($table == "sub_category") {
        $deleteSql = "DELETE FROM $table WHERE $tableColumn = '$id'";
        if ($conn->query($deleteSql) === true) {
            $subSubCategorySql = "DELETE FROM sub_subcategory WHERE sub_category_id = '$id'";
            if ($conn->query($subSubCategorySql) === true) {
                $productSql = "DELETE FROM product WHERE sub_category_id = '$id'";
                if ($conn->query($productSql) === true) {
                    header("Location: $returnPage");
                    exit;
                }
            }
        }
    } elseif ($table == "sub_subcategory") {
        $deleteSql = "DELETE FROM $table WHERE $tableColumn = '$id'";
        if ($conn->query($deleteSql) === true) {
            $productSql = "DELETE FROM product WHERE sub_subcategory_id = '$id'";
            if ($conn->query($productSql) === true) {
                header("Location: $returnPage");
                exit;
            }
        }
    } elseif ($table == "product") {
        $deleteSql = "DELETE FROM $table WHERE $tableColumn = '$id'";
        if ($conn->query($deleteSql) === true) {
            header("Location: $returnPage");
            exit;
        }
    } else {
        $sql = "DELETE FROM $table WHERE $tableColumn = '$id'";
        if ($conn->query($sql) === true) {
            header("Location: $returnPage");
        } else {
            echo $conn->error;
        }
    }

    $conn->close();
} else {
    echo "Missing required parameters.";
}