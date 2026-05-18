<?php
include 'admin/conn.php';
$decoded_id = '';
if (isset($_GET['sub_subcategory_id'])) {
    $decoded_id = intval(base64_decode($_GET['sub_subcategory_id']));
}
?>

<?php
include 'admin/conn.php';
$sql55 = "SELECT * FROM sub_subcategory WHERE id='$decoded_id'";
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
    <link rel="stylesheet" href="assets/css/style.css">

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
                            <h6>Sub Subcategory</h6>
                            <?php
                            include 'admin/conn.php';
                            $sql33 = "SELECT * FROM sub_subcategory 
                            WHERE category_id='" . $row55['category_id'] . "' 
                            AND sub_category_id='" . $row55['sub_category_id'] . "' 
                            AND status='1'";
                            $result33 = $conn->query($sql33);
                            while ($row33 = $result33->fetch_assoc()) {
                                $checked = ($decoded_id == $row33['id']) ? 'checked' : '';
                                ?>
                                <label><input type="checkbox" class="filter-subsubcategory" value="<?php echo $row33['id']; ?>"
                                        <?php echo $checked; ?>>
                                    <?php echo $row33['sub_subcategoryname']; ?>
                                </label><br>
                            <?php } ?>
                        </div>

                        <div class="filter-box">
                            <h6>Max Price</h6>
                            <input type="range" id="priceRange" min="1000" max="6000" step="500" value="6000">
                            <p>Up to ₹ <span id="priceValue">6000</span></p>
                        </div>

                       <div class="filter-box">
                            <h6>Fabric</h6>
                            <?php
                            include 'admin/conn.php';
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
                    $sql10 = "SELECT * FROM product WHERE status='1'";
                    $result10 = $conn->query($sql10);

                    while ($row10 = $result10->fetch_assoc()) {

                        $encoded_id = base64_encode($row10['id']);
                    ?>

                        <div class="col-md-4 mb-4 product"

                            data-category="<?php echo $row10['category_id']; ?>"
                            data-subcategory="<?php echo $row10['sub_category_id']; ?>"
                            data-subsubcategory="<?php echo $row10['sub_subcategory_id']; ?>"
                            data-fabric="<?php echo $row10['fabric']; ?>"
                            data-color="<?php echo $row10['color']; ?>">

                            <div class="product-card border p-3">

                                <img src="admin/upload/product/<?php echo $row10['product_image1']; ?>"
                                    class="img-fluid">

                                <div class="hover-icons mt-2">

                                    <a href="#">
                                        <i class="fa fa-heart"></i>
                                    </a>

                                    <a href="#">
                                        <i class="fa fa-shopping-cart"></i>
                                    </a>

                                </div>

                                <h5 class="mt-2 mb-0 text-center">

                                    <?php echo $row10['pro_name']; ?>

                                </h5>

                                <p class="price mb-0 text-center">

                                    <span class="old-price text-decoration-line-through">

                                        ₹<?php echo $row10['product_price']; ?>

                                    </span>

                                    <span class="new-prices">

                                        ₹<?php echo round($row10['product_discount_price']); ?>

                                    </span>

                                </p>

                                <div class="product-btns">

                                    <button class="btn btn-dark w-100"
                                            onclick="window.location.href='product-details.php?id=<?php echo $encoded_id; ?>'">

                                        👁️ View Details

                                    </button>

                                </div>

                            </div>

                        </div>

                    <?php } ?>

                    </div>
           
                    <!-- NO PRODUCT -->
                            <div id="no-product"
                                style="display:none;"
                                class="text-center mt-5">

                                <h4>No Product Available 😔</h4>

                            </div>
                        </div>
                    </div>
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
$(document).ready(function () {
    function filterProducts() {
        var category = [];
        var subcategory = [];
        var subsubcategory = [];
        var fabric = [];
        var color = [];

        // CATEGORY
        $('.filter-category:checked').each(function () {
            category.push($(this).val().toString());
        });

        // SUBCATEGORY
        $('.filter-subcategory:checked').each(function () {
            subcategory.push($(this).val().toString());
        });

        // SUB SUBCATEGORY
        $('.filter-subsubcategory:checked').each(function () {
            subsubcategory.push($(this).val().toString());
        });

        // FABRIC
        $('.filter-fabric:checked').each(function () {
            fabric.push($(this).val().toString());
        });

        // COLOR
        $('.filter-color:checked').each(function () {
            color.push($(this).val().toString());
        });

        var visibleProducts = 0;
        $('.product').each(function () {
            var productCategory =
                $(this).attr('data-category');
            var productSubcategory =
                $(this).attr('data-subcategory');
            var productSubsubcategory =
                $(this).attr('data-subsubcategory');
            var productFabric =
                $(this).attr('data-fabric');
            var productColor =
                $(this).attr('data-color');

            // MULTIPLE COLORS SUPPORT
            var productColors = [];
            if(productColor != ''){
                productColors = productColor.split(',');
            }

            // CATEGORY MATCH
            var categoryMatch =
                category.length === 0 ||
                category.includes(productCategory);

            // SUBCATEGORY MATCH
            var subcategoryMatch =
                subcategory.length === 0 ||
                subcategory.includes(productSubcategory);

            // SUBSUBCATEGORY MATCH
            var subsubcategoryMatch =
                subsubcategory.length === 0 ||
                subsubcategory.includes(productSubsubcategory);

            // FABRIC MATCH
            var fabricMatch =
                fabric.length === 0 ||
                fabric.includes(productFabric);

            // COLOR MATCH
            var colorMatch = false;
            if(color.length === 0){
                colorMatch = true;
            }
            else{
                $.each(productColors, function(index, singleColor){
                    singleColor = singleColor.trim();
                    if(color.includes(singleColor)){
                        colorMatch = true;
                    }
                });
            }

            // FINAL MATCH
            if (
                categoryMatch &&
                subcategoryMatch &&
                subsubcategoryMatch &&
                fabricMatch &&
                colorMatch
            ) {
                $(this).show();
                visibleProducts++;
            }
            else {
                $(this).hide();
            }
        });

        // NO PRODUCT
        if (visibleProducts === 0) {
            $('#no-product').show();
        }
        else {
            $('#no-product').hide();
        }
    }
    $('.filter-category, .filter-subcategory, .filter-subsubcategory, .filter-fabric, .filter-color')
    .on('change', function () {
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