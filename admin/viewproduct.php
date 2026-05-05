<?php
$id = urldecode(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utkalikart | Viewproduct</title>
    <link href="dist/img/titleimage1.png" rel="icon">
    <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
</head>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css?v=<?php echo time(); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="dist/css/style.css?v=<?php echo time(); ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index">
                        <h2 class="text-white incolor">UTKALIKART</h2>
                    </a>
                </li>
            </ul>
            <!-- Right navbar links -->
        </nav>
    </div>
    <!-- Main Sidebar Container -->
    <?php include 'common/sidebar.php'; ?>

    <body>
        <div class="content-wrapper">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card mt-3">
                            <div class="card-body">
                                <?php
                                include 'conn.php';
                                $sql = "SELECT * FROM product WHERE id = '$id'";
                                $result = $conn->query($sql);

                                while ($row = $result->fetch_assoc()) {
                                    $category_id = $row["category_id"];
                                    $subcategory_id = $row["sub_category_id"];
                                    $subsubcategory_id = $row["sub_subcategory_id"];
                                    $fabric = $row["fabric"];

                                    $sql1 = "SELECT * FROM category WHERE id = $category_id";
                                    $result1 = $conn->query($sql1);
                                    $row1 = $result1->fetch_assoc();

                                    $sql2 = "SELECT * FROM sub_category WHERE id = $subcategory_id";
                                    $result2 = $conn->query($sql2);
                                    $row2 = $result2->fetch_assoc();

                                    $sql3 = "SELECT * FROM sub_subcategory WHERE id = $subsubcategory_id";
                                    $result3 = $conn->query($sql3);
                                    $row3 = $result3->fetch_assoc();

                                    $sql4 = "SELECT * FROM fabric WHERE id = $fabric";
                                    $result4 = $conn->query($sql4);
                                    $row4 = $result4->fetch_assoc();
                                    ?>
                                    <h3 class="mb-3 home_color">View Product</h3>
                                    <div class="product-details">
                                        <div class="row">
                                            <div class="col-12">
                                                <h6 class="text-black"><strong>Product Name:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row['pro_name']; ?></p>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-black"><strong>Category:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row1["category_name"]; ?></p>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-black"><strong>Sub-Category:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row2["sub_category_name"]; ?></p>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-black"><strong>Sub Sub-Category:</strong></h6>
                                                <p class="pd-vi p-2">
                                                    <?php
                                                    echo (!empty($row3["sub_subcategoryname"]) && $row3["sub_subcategoryname"] != 0)
                                                        ? $row3["sub_subcategoryname"]
                                                        : "NULL";
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-black"><strong>Product Ratings:</strong></h6>
                                                <p class="pd-vi p-2">
                                                    <?php echo $row["rating"]; ?>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-black"><strong>Product Reviews:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row["review"]; ?></p>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-black"><strong>Product Price:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row["product_price"]; ?></p>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-black"><strong>Discount:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row["pro_discount"]; ?></p>
                                            </div>
                                            <div class="col-3">
                                                <h6 class="text-black"><strong>Product Discount Price:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row["product_discount_price"]; ?>
                                                </p>
                                            </div>
                                            <div class="col-4">
                                                <h6 class="text-black"><strong>Fabric:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row4["name"]; ?></p>
                                            </div>
                                            <div class="col-4">
                                                <h6 class="text-black"><strong>Length:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row["length"]; ?></p>
                                            </div>
                                            <div class="col-4">
                                                <h6 class="text-black"><strong>Blouse:</strong></h6>
                                                <p class="pd-vi p-2"><?php echo $row["blouse"]; ?>
                                                </p>
                                            </div>
                                            <div class="col-3">
                                                <strong>Image1:</strong>
                                                <?php if (file_exists("upload/product/{$row['product_image1']}")): ?>
                                                    <img src="upload/product/<?php echo $row['product_image1']; ?>" alt="image1"
                                                        width="50" height="50">
                                                <?php else: ?>
                                                    <img src="dist/img/noimage1.png" alt="No Image" width="50" height="50">
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-3">
                                                <strong>Image2:</strong>
                                                <?php if (file_exists("upload/product/{$row['product_image2']}")): ?>
                                                    <img src="upload/product/<?php echo $row['product_image2']; ?>" alt="image1"
                                                        width="50" height="50">
                                                <?php else: ?>
                                                    <img src="dist/img/noimage1.png" alt="No Image" width="50" height="50">
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-3">
                                                <strong>Image3:</strong>
                                                <?php if (file_exists("upload/product/{$row['product_image3']}")): ?>
                                                    <img src="upload/product/<?php echo $row['product_image3']; ?>" alt="image1"
                                                        width="50" height="50">
                                                <?php else: ?>
                                                    <img src="dist/img/noimage1.png" alt="No Image" width="50" height="50">
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-3">
                                                <strong>Image4:</strong>
                                                <?php if (file_exists("upload/product/{$row['product_image4']}")): ?>
                                                    <img src="upload/product/<?php echo $row['product_image4']; ?>" alt="image1"
                                                        width="50" height="50">
                                                <?php else: ?>
                                                    <img src="dist/img/noimage1.png" alt="No Image" width="50" height="50">
                                                <?php endif; ?>
                                            </div>
                                            <div class="col-12">
                                                <h6 class="text-black"><strong>About Item:</strong></h6>
                                                <textarea class="pd-vi p-2" id="content" name="content" rows="5" cols="50"
                                                    readonly>
                                                                            <?php echo htmlspecialchars($row['about_item']); ?>
                                                                        </textarea>
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Select Colour:</label>
                                                <select class="form-control" name="keywords1[]" id="fabriic1" multiple>
                                                    <?php
                                                    include "conn.php";
                                                    $selectedColors = [];
                                                    $result = mysqli_query($conn, "SELECT * FROM color");
                                                    while ($color = mysqli_fetch_array($result)) {
                                                        $selected = in_array($color['id'], $selectedColors) ? "selected" : "";

                                                        echo '<option value="' . $color['id'] . '" ' . $selected . '>';
                                                        echo $color["name"];
                                                        echo '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="text">Others:</label>
                                                <?php $featured_pro = $row["featured_pro"]; ?>
                                                <?php $special_off = $row["special_off"]; ?>
                                                <?php $trending_now = $row["trending_now"]; ?>
                                                <div class="checkbox-container">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" <?php if ($featured_pro == 1)
                                                            echo "checked"; ?> disabled>
                                                        <label class="form-check-label">Featured Product</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" <?php if ($special_off == 1)
                                                            echo "checked"; ?> disabled>
                                                        <label class="form-check-label">Special Offers</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" <?php if ($trending_now == 1)
                                                            echo "checked"; ?> disabled>
                                                        <label class="form-check-label">Trending Now</label>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                        <button type="button" class="btn btn-success"
                                            onclick="window.location.href='product.php';">Back
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </section>
        </div>
        <?php include 'common/footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script>
            CKEDITOR.replace('content', {
                height: 300,
                filebrowserUploadUrl: "upload.php"
            });
        </script>
        <!-- for catalogue dropdown -->
        <script>
            document.getElementById('catalogue-link').addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default link behavior

                // Get the additional menu items
                var folderItem = document.getElementById('folder-item');
                var pdfUploadItem = document.getElementById('pdfupload-item');

                // Toggle the display property of the additional menu items
                if (folderItem.style.display === 'none' && pdfUploadItem.style.display === 'none') {
                    folderItem.style.display = 'block';
                    pdfUploadItem.style.display = 'block';
                } else {
                    folderItem.style.display = 'none';
                    pdfUploadItem.style.display = 'none';
                }
            });
        </script>
        <script>
            CKEDITOR.replace('content', {
                height: 300,
                filebrowserUploadUrl: "upload.php"
            });
        </script>
    </body>

</html>