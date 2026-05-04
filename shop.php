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

    <!-- ================= TOP BAR ================= -->

    <!-- <div class="top-bar">
        <div class="container d-flex justify-content-between align-items-center">

            <div class="top-left">
                📍 Ravi Talkies, Lewis Road, Bhubaneswar |
                📞 8249403184
            </div>

            <div class="top-right">
                <a href="#"><i class="fab fa-whatsapp"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>

        </div>
    </div> -->

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
                                ?>

                                <label><input type="checkbox" class="filter-category" value="silk">
                                    <?php echo $row['category_name']; ?>
                                </label><br>
                                <!-- <label><input type="checkbox" class="filter-category" value="banarasi"> Banarasi</label><br>
                            <label><input type="checkbox" class="filter-category" value="designer"> Designer</label><br>
                            <label><input type="checkbox" class="filter-category" value="wedding"> Wedding</label> -->
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

                                <label><input type="checkbox" class="filter-fabric" value="cotton">
                                    <?php echo $row1['name']; ?></label><br>
                                <!-- <label><input type="checkbox" class="filter-fabric" value="silk"> Silk</label><br>
                            <label><input type="checkbox" class="filter-fabric" value="georgette"> Georgette</label><br>
                            <label><input type="checkbox" class="filter-fabric" value="chiffon"> Chiffon</label> -->
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

                                <label><input type="checkbox" class="filter-color" value="red">
                                    <?php echo $row2['name']; ?></label><br>
                                <!-- <label><input type="checkbox" class="filter-color" value="blue"> Blue</label><br>
                            <label><input type="checkbox" class="filter-color" value="green"> Green</label><br>
                            <label><input type="checkbox" class="filter-color" value="gold"> Gold</label><br>
                            <label><input type="checkbox" class="filter-color" value="black"> Black</label> -->
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

                        <!-- Product 1 -->
                        <div class="col-md-4 product" data-category="silk" data-price="2999">

                            <div class="product-card" data-name="Silk Saree" data-price="2999"  data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (1).jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (1).jpeg">

                                <h5>Silk Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Product 2 -->
                        <div class="col-md-4 product" data-category="banarasi" data-price="3499">

                            <div class="product-card" data-name="Banarasi Saree" data-price="3499" data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (2).jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (2).jpeg">

                                <h5>Banarasi Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Product 3 -->
                        <div class="col-md-4 product" data-category="designer" data-price="2599">

                            <div class="product-card" data-name="Designer Saree" data-price="2599" data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM.jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM.jpeg">

                                <h5>Designer Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>
                        <!-- Product 1 -->
                        <div class="col-md-4 product" data-category="silk" data-price="2999">

                            <div class="product-card" data-name="Silk Saree" data-price="2999" data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (1).jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (1).jpeg">

                                <h5>Silk Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Product 2 -->
                        <div class="col-md-4 product" data-category="banarasi" data-price="3499">

                            <div class="product-card" data-name="Banarasi Saree" data-price="3499" data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (2).jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (2).jpeg">

                                <h5>Banarasi Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Product 3 -->
                        <div class="col-md-4 product" data-category="designer" data-price="2599">

                            <div class="product-card" data-name="Designer Saree" data-price="2599" data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM.jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM.jpeg">

                                <h5>Designer Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>
                        <!-- Product 1 -->
                        <div class="col-md-4 product" data-category="silk" data-price="2999">

                            <div class="product-card" data-name="Silk Saree" data-price="2999" data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (1).jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (1).jpeg">

                                <h5>Silk Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Product 2 -->
                        <div class="col-md-4 product" data-category="banarasi" data-price="3499">

                            <div class="product-card" data-name="Banarasi Saree" data-price="3499" data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (2).jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM (2).jpeg">

                                <h5>Banarasi Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>


                        <!-- Product 3 -->
                        <div class="col-md-4 product" data-category="designer" data-price="2599">

                            <div class="product-card" data-name="Designer Saree" data-price="2599" data-old-price="3999"
                                data-img="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM.jpeg">

                                <img
                                    src="assets/img/ikkath_masereced_cotton_sarees_matching_blouse/WhatsApp Image 2026-04-04 at 4.46.32 PM.jpeg">

                                <h5>Designer Saree</h5>
                                <p class="price">
    <span class="old-price">₹3999</span>
    <span class="new-prices">₹2999</span>
</p>

                                <div class="product-btns">
                                    <button onclick="goToDetails(this.parentElement.parentElement)">
                                        👁️ View Details
                                    </button>
                                </div>

                            </div>

                        </div>



                    </div>

                    <div id="loader" class="text-center my-4" style="display:none;">
                        <div class="spinner-border text-danger"></div>
                        <p>Loading more sarees...</p>
                    </div>

                    <div id="noProducts" class="no-products text-center">
                        <h4>No Sarees Found 😔</h4>
                        <p>Try changing filters or increase price</p>
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

    <script>
        AOS.init();
    </script>

</body>

</html>