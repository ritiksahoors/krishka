<?php
include 'admin/conn.php';


// Get Minimum & Maximum Price
$price_query = mysqli_query($conn, "
    SELECT 
    MIN(product_discount_price) AS min_price,
    MAX(product_discount_price) AS max_price
    FROM product
    WHERE status='1'
");

$price_row = mysqli_fetch_assoc($price_query);

$min_price = (int) $price_row['min_price'];
$max_price = (int) $price_row['max_price'];


// Selected Price
$selected_price = isset($_GET['price'])
    ? (int) $_GET['price']
    : $max_price;

?>

<?php
include 'admin/conn.php';
$decoded_id = '';
if (isset($_GET['category_id'])) {
    $decoded_id = intval(base64_decode($_GET['category_id']));
}
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
                            <h6>Category</h6>
                            <?php
                            include 'admin/conn.php';
                            $sql = "SELECT * FROM category WHERE status='1'";
                            $result = $conn->query($sql);
                            while ($row = $result->fetch_assoc()) {
                                $checked = ($decoded_id == $row['id']) ? 'checked' : '';
                                ?>
                                        <label>
                                    <input type="checkbox"
                                                class="filter-category"
                                                value="<?php echo $row['id']; ?>"
                                    <?php echo $checked; ?>>
        
                                            <?php echo $row['category_name']; ?>
                                </label>
                                        <br>
        
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
                                    <input type="checkbox" class="filter-fabric" value="<?php echo $row1['id']; ?>">
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

    <div class="row g-4" id="productContainer">

        <?php
        include 'admin/conn.php';

        $sql10 = "SELECT * FROM product WHERE status='1'";
        $result10 = $conn->query($sql10);

        while ($row10 = $result10->fetch_assoc()) {

            $encoded_id = base64_encode($row10['id']);
        ?>

        <div class="col-xl-4 col-md-6 product"

            data-category="<?php echo $row10['category_id']; ?>"
            data-fabric="<?php echo $row10['fabric']; ?>"
            data-color="<?php echo $row10['color']; ?>">

            <!-- Bootstrap 5.3.8 Card -->
            <div class="card h-100 border-0 shadow-sm product-card">

                <!-- Product Image -->
                <div class="position-relative overflow-hidden">

                    <img src="admin/upload/product/<?php echo $row10['product_image1']; ?>"
                        class="card-img-top product-img"
                        alt="<?php echo $row10['pro_name']; ?>">

                    <!-- Hover Icons -->
                    <div class="hover-icons">

                        <a href="#" class="icon-btn">
                            <i class="fa fa-heart"></i>
                        </a>

                        <a href="#" class="icon-btn">
                            <i class="fa fa-shopping-cart"></i>
                        </a>

                    </div>

                </div>

                <!-- Card Body -->
                <div class="card-body d-flex flex-column text-center">

                    <h5 class="card-title mb-2">
                        <?php echo $row10['pro_name']; ?>
                    </h5>

                    <p class="price mb-3">

                        <span class="text-decoration-line-through text-muted me-2">
                            ₹<?php echo $row10['product_price']; ?>
                        </span>

                        <span class="fw-bold fs-5">
                            ₹<?php echo round($row10['product_discount_price']); ?>
                        </span>

                    </p>

                    <button class="btn btn-dark mt-auto w-100"
                        onclick="window.location.href='product-details.php?id=<?php echo $encoded_id; ?>'">

                        👁️ View Details

                    </button>

                </div>

            </div>

        </div>

        <?php } ?>

        <div id="no-product"
            style="display:none;"
            class="text-center mt-5">

            <h4>No Product Available 😔</h4>

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
        var selectedCategory = [];
        var selectedFabric = [];
        var selectedColor = [];

        // CATEGORY
        $('.filter-category:checked').each(function () {

            selectedCategory.push($(this).val());

        });
        // FABRIC

        $('.filter-fabric:checked').each(function () {

            selectedFabric.push($(this).val());

        });
        // COLOR

        $('.filter-color:checked').each(function () {

            selectedColor.push($(this).val());

        });

        var visibleProducts = 0;
        $('.product').each(function () {
            var productCategory = $(this).attr('data-category');

            var productFabric = $(this).attr('data-fabric');

            var productColor = $(this).attr('data-color');

            // MULTIPLE COLOR SUPPORT

            var productColors = productColor
                ? productColor.split(',')
                : [];

            // CATEGORY MATCH
            var categoryMatch =
                selectedCategory.length == 0 ||
                selectedCategory.includes(productCategory);

            // FABRIC MATCH
            var fabricMatch =
                selectedFabric.length == 0 ||
                selectedFabric.includes(productFabric);

            // COLOR MATCH
            var colorMatch = false;
            if (selectedColor.length == 0) {
                colorMatch = true;

            } else {
                $.each(productColors, function (index, color) {
                    color = color.trim();
                    if (selectedColor.includes(color)) {

                        colorMatch = true;
                    }

                });

            }
            // FINAL FILTER
            if (categoryMatch && fabricMatch && colorMatch) {
                $(this).show();
                visibleProducts++;
            }
            else {
                $(this).hide();
            }
        });
        // NO PRODUCT
        if (visibleProducts == 0) {
            $('#no-product').show();
        }
        else {
            $('#no-product').hide();
        }
    }
    // ALL FILTERS
    $('.filter-category, .filter-fabric, .filter-color').on('change', function () {
        filterProducts();
    });
    filterProducts();

});
</script>
   <script>

const priceRange = document.getElementById("priceRange");
const priceValue = document.getElementById("priceValue");
const priceForm = document.getElementById("priceForm");


// Change Value Text
priceRange.addEventListener("input", function () {

    priceValue.innerHTML = this.value;

});


// Auto Submit
priceRange.addEventListener("change", function () {

    priceForm.submit();

});

</script>
    <script>
        AOS.init();
    </script>
</body>

</html>