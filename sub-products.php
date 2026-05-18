<?php
include 'admin/conn.php';
$decoded_id = '';
if (isset($_GET['subcategory_id'])) {
    $decoded_id = intval(base64_decode($_GET['subcategory_id']));
}
?>

<?php
include 'admin/conn.php';
$sql55 = "SELECT * FROM sub_category WHERE id='$decoded_id'";
$result55 = $conn->query($sql55);
$row55 = $result55->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Krishika Collections | Shop</title>
    <link href="admin/dist/img/titleimage1.jpeg" rel="icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css?v=1.5">

</head>

<body>
    <!-- ================= NAVBAR ================= -->

    <?php include 'common/header.php'; ?>
    <!-- ================= SHOP BANNER ================= -->

    <section class="shop-banner">

        <div class="container text-center">

            <h1 data-aos="fade-up">
                Shop KRISHIKA Collection
            </h1>

            <div class="breadcrumb-box" data-aos="fade-up" data-aos-delay="200">

                <a href="index.php">Home</a>
                <span> / </span>
                <span class="active">Shop</span>

            </div>

        </div>

    </section>

    <!-- ================= SHOP SECTION ================= -->

    <section class="shop-section py-5">

        <div class="container">
            <div class="row">

                <!-- FILTER -->

                <div class="col-md-3">

                    <div class="filter-sidebar">

                        <h4>Filter Sarees</h4>
                        <div class="filter-box">
                            <h6>Sub Category</h6>
                            <?php
                            include 'admin/conn.php';
                            $sql33 = "SELECT * FROM sub_category 
                            WHERE category_id='" . $row55['category_id'] . "' 
                            AND status='1'";
                            $result33 = $conn->query($sql33);
                            while ($row33 = $result33->fetch_assoc()) {
                                $checked = ($decoded_id == $row33['id']) ? 'checked' : '';
                            ?>

                                <label><input type="checkbox" class="filter-category filter-subcategory" value="<?php echo $row33['id']; ?>"
                                        <?php echo $checked; ?>>

                                    <?php echo $row33['sub_category_name']; ?>
                                </label><br>
                            <?php } ?>

                        </div>

                        <div class="filter-box">
                            <h6>Max Price</h6>
                            <input type="range" id="priceRange" min="1000" max="6000" step="500" value="6000">
                            <p>Up to ₹ <span id="priceValue">6000</span></p>
                        </div>

                        <div class="filter-box mt-3">

                            <h6>Fabric</h6>

                            <?php
                            $sql1 = "SELECT * FROM fabric WHERE status='1'";
                            $result1 = $conn->query($sql1);

                            while ($row1 = $result1->fetch_assoc()) {
                            ?>

                                <label>
                                    <input type="checkbox"
                                        class="filter-fabric"
                                        value="<?php echo $row1['id']; ?>">

                                    <?php echo $row1['name']; ?>

                                </label>

                                <br>

                            <?php } ?>

                        </div>

                        <div class="filter-box">
                            <h6>Color</h6>
                            <?php
                            include 'admin/conn.php';
                            $sql2 = "SELECT * FROM color WHERE status='1'";
                            $result2 = $conn->query($sql2);
                            while ($row2 = $result2->fetch_assoc()) {
                            ?>
                                <label><input type="checkbox" class="filter-color" value="<?php echo $row2['id']; ?>">
                                    <?php echo $row2['name']; ?></label><br>
                            <?php } ?>
                        </div>

                        <button class="clear-filter" onclick="clearFilters()">
                            Clear Filters
                        </button>

                    </div>

                </div>

                <!-- PRODUCTS -->

                <div class="col-md-9">
                    <div class="row" id="productContainer">

                        <?php
                        include 'admin/conn.php';

                        $sql10 = "SELECT * FROM product WHERE status='1'";
                        $result10 = $conn->query($sql10);

                        while ($row10 = $result10->fetch_assoc()) {

                            $encoded_id = base64_encode($row10['id']);
                        ?>

                            <div class="col-md-4 mb-4 product"

                                data-subcategory="<?php echo $row10['sub_category_id']; ?>"
                                data-fabric="<?php echo $row10['fabric']; ?>"
                                data-color="<?php echo $row10['color']; ?>">

                                <div class="product-card border p-3">

                                    <img src="admin/upload/product/<?php echo $row10['product_image1']; ?>"
                                        class="img-fluid">

                                    <div class="hover-icons">

                                        <a href="#">
                                            <i class="fa fa-heart"></i>
                                        </a>

                                        <a href="#">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>

                                    </div>

                                    <h5 class="mt-2 text-center">

                                        <?php echo $row10['pro_name']; ?>

                                    </h5>

                                    <p class="price text-center">

                                        <span class="old-price">

                                            ₹<?php echo $row10['product_price']; ?>

                                        </span>

                                        <br>

                                        <span class="new-prices">

                                            ₹<?php echo round($row10['product_discount_price']); ?>

                                        </span>

                                    </p>

                                    <button class="btn btn-dark w-100 mt-2"
                                        onclick="window.location.href='product-details.php?id=<?php echo $encoded_id; ?>'">

                                        👁️ View Details

                                    </button>

                                </div>

                            </div>

                        <?php } ?>

                    </div>

                    <!-- NO PRODUCT -->
                    <div id="no-product"
                        style="display:none;"
                        class="text-center mt-4">

                        <h4>No Product Available 😔</h4>

                    </div>


                    <div id="loader" class="text-center my-4" style="display:none;">
                        <div class="spinner-border text-danger"></div>
                        <p>Loading more sarees...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================= FOOTER ================= -->
    <?php include 'common/footer.php'; ?>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function filterProducts() {
                var selectedSubcategory = [];
                var selectedFabric = [];
                var selectedColor = [];
                // SUBCATEGORY
                $('.filter-subcategory:checked').each(function() {
                    selectedSubcategory.push($(this).val());
                });

                // FABRIC
                $('.filter-fabric:checked').each(function() {
                    selectedFabric.push($(this).val());
                });

                // COLOR
                $('.filter-color:checked').each(function() {
                    selectedColor.push($(this).val());
                });
                var visibleProducts = 0;
                $('.product').each(function() {
                    var productSubcategory =
                        $(this).attr('data-subcategory');
                    var productFabric =
                        $(this).attr('data-fabric');
                    var productColor =
                        $(this).attr('data-color');

                    // MULTIPLE COLOR SUPPORT
                    var productColors = [];
                    if (productColor != '') {
                        productColors = productColor.split(',');
                    }

                    // SUBCATEGORY MATCH
                    var subcategoryMatch =
                        selectedSubcategory.length == 0 ||
                        selectedSubcategory.includes(productSubcategory);

                    // FABRIC MATCH
                    var fabricMatch =
                        selectedFabric.length == 0 ||
                        selectedFabric.includes(productFabric);

                    // COLOR MATCH
                    var colorMatch = false;
                    if (selectedColor.length == 0) {
                        colorMatch = true;
                    } else {
                        $.each(productColors, function(index, color) {
                            color = color.trim();
                            if (selectedColor.includes(color)) {
                                colorMatch = true;
                            }
                        });
                    }

                    // FINAL MATCH
                    if (subcategoryMatch && fabricMatch && colorMatch) {
                        $(this).show();
                        visibleProducts++;
                    } else {
                        $(this).hide();
                    }
                });

                // NO PRODUCT
                if (visibleProducts == 0) {
                    $('#no-product').show();
                } else {
                    $('#no-product').hide();
                }
            }

            // FILTER CHANGE
            $('.filter-subcategory, .filter-fabric, .filter-color')
                .on('change', function() {
                    filterProducts();

                });

            // PAGE LOAD
            filterProducts();
        });
    </script>
    <script>
        AOS.init();
    </script>

</body>

</html>