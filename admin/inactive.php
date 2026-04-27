<?php
include 'conn.php';

$id = $_GET["status0"];
$id1 = $_GET['tb'];
$id2 = $_GET['returnpage'];
$tbc = $_GET['tbc'];
$tbc1 = $_GET['tbc1'];
$extra = $_GET['extra'];

if ($id1 == "category") {
   $sql1 = "UPDATE $id1 SET $tbc1='1' WHERE $tbc='$id'";
   $sql2 = "UPDATE sub_category SET $tbc1='1' WHERE category_id='$id'";
   $sql3 = "UPDATE sub_subcategory SET $tbc1='1' WHERE category_id='$id'";
   $sql4 = "UPDATE product SET $tbc1='1' WHERE category_id='$id'";
   if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE && $conn->query($sql3) === TRUE && $conn->query($sql4) === TRUE) {
      header("location:$id2");
   } else {
      echo $conn->error;
   }
} elseif ($id1 == "sub_category") {
   $checkCategorySql = "SELECT status FROM category WHERE $tbc='$extra'";
   $categoryResult = $conn->query($checkCategorySql);
   if ($categoryResult->num_rows > 0) {
      $categoryData = $categoryResult->fetch_assoc();
      if ($categoryData['status'] == '1') {
         $sql4 = "UPDATE $id1 SET status='1' WHERE $tbc='$id'";
         $sql5 = "UPDATE sub_subcategory SET $tbc1='1' WHERE sub_category_id='$id'";
         $sql6 = "UPDATE product SET $tbc1='1' WHERE sub_category_id='$id'";
         if ($conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE && $conn->query($sql6) === TRUE) {
            header("location:$id2");
         } else {
            echo $conn->error;
         }
      } else {
         echo "<script>window.location.href='subcategory.php'; alert('Category is inactive.So Sub-Category,Sub-Subcategories and products cannot be made active.');</script>";
      }
   } else {
      header("location:$id2");
   }
} elseif ($id1 == "sub_subcategory") {
   $checkCategorySql1 = "SELECT status FROM sub_category WHERE $tbc='$extra'";
   $categoryResult1 = $conn->query($checkCategorySql1);
   if ($categoryResult1->num_rows > 0) {
      $categoryData1 = $categoryResult1->fetch_assoc();
      if ($categoryData1['status'] == '1') {
         $sql4 = "UPDATE $id1 SET status='1' WHERE $tbc='$id'";
         $sql5 = "UPDATE product SET $tbc1='1' WHERE sub_subcategory_id='$id'";
         if ($conn->query($sql4) === TRUE && $conn->query($sql5) === TRUE) {
            header("location:$id2");
         } else {
            echo $conn->error;
         }
      } else {
         echo "<script>window.location.href='sub_subcategory.php'; alert('Sub-Category is inactive. Sub-Subcategories and products cannot be made active.');</script>";
      }
   } else {
      header("location:$id2");
   }
} elseif ($id1 == "product") {
   $checkSubcategorySql = "SELECT status FROM sub_subcategory WHERE $tbc='$extra'";
   $subcategoryResult = $conn->query($checkSubcategorySql);
   if ($subcategoryResult->num_rows > 0) {
      $subcategoryData = $subcategoryResult->fetch_assoc();
      if ($subcategoryData['status'] == '1') {
         $sql6 = "UPDATE $id1 SET $tbc1='1' WHERE $tbc='$id'";
         if ($conn->query($sql6) === TRUE) {
            header("location:$id2");
         } else {
            echo $conn->error;
         }
      } else {
         echo "<script>window.location.href='product.php'; alert('Sub-Sub-Category is inactive. Products cannot be made active.');</script>";
      }
   } else {
      header("location:$id2");
   }
} elseif ($id1 == "stockk") {
   $sql6 = "UPDATE product SET $tbc1='1' WHERE $tbc='$id'";
   if ($conn->query($sql6) === TRUE) {
      header("location:$id2");
   } else {
      echo $conn->error;
   }
} else {
   $sql7 = "UPDATE $id1 SET $tbc1='1' WHERE $tbc='$id'";
   if ($conn->query($sql7) === TRUE) {
      header("location:$id2");
   } else {
      echo $conn->error;
   }
}
$conn->close();
