<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Krishika Collections | Offers</title>
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
    <!-- <style>
        .badge-sm {
            font-size: 10px;
            padding: 2px 6px;
            border-radius: 3px;
            font-weight: 600;
            display: inline-block;
            line-height: 1;
            margin-right: 4px;
        }

        /* HOT badge */
        .badge-sm.hot {
            background: #ff3b3b;
            color: #fff;
        }

        /* NEW badge */
        .badge-sm.new {
            background: #28a745;
            color: #fff;
        }
    </style> -->

</head>

<body>
    <!-- ================= NAVBAR ================= -->
    <?php include 'common/header.php'; ?>
    <!-- ================= OFFERS HERO ================= -->

    <section class="offers-hero">

        <div class="container text-center">

            <h1>Latest Saree Offers</h1>

            <p>Grab the best deals on Krishika Collections</p>

        </div>

    </section>


    <!-- ================= OFFER BANNER ================= -->

    <section class="offer-banner">

        <div class="container">

            <div class="offer-banner-box">

                <h2>Flat 40% OFF on Wedding Sarees</h2>

                <p>Limited Time Offer | Visit Boutique or Order on WhatsApp</p>

                <a href="shop.php" class="shop-offer-btn">
                    Shop Now
                </a>

            </div>

        </div>

    </section>


    <!-- ================= OFFERS PRODUCTS ================= -->

    <section class="featured-sarees py-5">
        <div class="container">

            <!-- <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2>Featured Products</h2>
                <p>Explore our premium and trending saree collection</p>
            </div> -->

            <div class="row g-4">
                <?php
                include 'admin/conn.php';

                $sql1 = "SELECT * FROM product WHERE status='1' AND featured_pro='1'";
                $result1 = $conn->query($sql1);

                while ($row1 = $result1->fetch_assoc()) {

                    $encoded_id = base64_encode($row1['id']);
                ?>

                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">

                        <!-- Bootstrap Default Card -->
                        <div class="card h-100 border-0 shadow-sm product-card">

                            <!-- Image -->
                            <div class="position-relative overflow-hidden">

                                <img src="admin/upload/product/<?php echo $row1['product_image1']; ?>"
                                    class="card-img-top product-img"
                                    alt="<?php echo $row1['pro_name']; ?>">

                                <!-- Discount -->
                                <span class="badge position-absolute top-0 start-0 m-2 px-3 py-2 rounded-pill">
                                    <?php echo $row1['pro_discount']; ?>% OFF
                                </span>

                                <!-- Hover Icons -->
                                <div class="hover-icons">

                                    <a href="#" class="icon-btn add-to-wishlist">
                                        <i class="fa fa-heart"
                                            data-name="Bridal Saree"
                                            data-price="4999"
                                            data-img="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.38 PM.jpeg">
                                        </i>
                                    </a>

                                    <a href="#" class="icon-btn add-to-cart">
                                        <i class="fa fa-shopping-cart"
                                            data-name="Bridal Saree"
                                            data-price="4999"
                                            data-img="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.38 PM.jpeg">
                                        </i>
                                    </a>

                                </div>

                            </div>

                            <!-- Content -->
                            <div class="card-body d-flex flex-column">

                                <h5 class="card-title mb-2">
                                    <i class="fa-solid fa-bag-shopping me-1 text-danger"></i>
                                    <?php echo $row1['pro_name']; ?>
                                </h5>

                                <p class="price">

                                    <!-- Old Price -->
                                    <span class="text-decoration-line-through text-muted me-2">
                                        <i class="fa-solid fa-tags me-1"></i>
                                        ₹<?php echo $row1['product_price']; ?>
                                    </span>

                                    <!-- New Price -->
                                    <span class="fw-bold fs-5" style="color: #800000;">

                                        <i class="fa-solid fa-bolt me-1"></i>

                                        ₹<?php echo round($row1['product_discount_price']); ?>



                                    </span>

                                </p>

                                <button class="btn btn-dark mt-auto w-100"
                                    onclick="window.location.href='product-details.php?id=<?php echo $encoded_id; ?>'">

                                    View Details

                                </button>

                            </div>

                        </div>

                    </div>

                <?php } ?>
            </div>

        </div>
    </section>

    <!-- ================= TRENDING NOW UNIQUE SECTION ================= -->

    <section id="krishikaTrendingZone" class="krishika-trend-wrapper py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="krishika-trend-title">🔥 Trending Now</h2>
                <p class="krishika-trend-sub">Most loved sarees by our customers</p>
            </div>

            <div class="row g-4">
                <?php
                include 'admin/conn.php';
                $sql1 = "SELECT * FROM product WHERE status='1' AND trending_now='1' LIMIT 4";
                $result1 = $conn->query($sql1);
                while ($row1 = $result1->fetch_assoc()) {
                    ?>
                    <!-- Item 1 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="krishika-trend-card">
                            <div class="krishika-trend-img">
                                <img src="admin/upload/product/<?php echo $row1['product_image1']; ?>">
                                <?php
                                $badge = (rand(0, 1) == 0) ? 'NEW' : 'HOT';
                                ?>
                                <span class="krishika-badge-hot"><?php echo $badge; ?></span>
                            </div>
                            <div class="krishika-trend-info">
                                <h6><?php echo $row1['pro_name']; ?></h6>
                                <p class="krishika-trend-price">₹<?php echo $row1['product_price']; ?></p>
                                <div class="krishika-trend-btns">
                                    <a href="product-details.php" class="krishika-view-btn">
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <!-- <div class="col-lg-3 col-md-6">
                    <div class="krishika-trend-card">
                        <div class="krishika-trend-img">
                            <img src="assets/img/bhandini_sarees/WhatsApp Image2 2026-04-04 at 4.50.37 PM.jpeg">
                            <span class="krishika-badge-hot">NEW</span>
                        </div>
                        <div class="krishika-trend-info">
                            <h6>Designer Party Saree</h6>
                            <p class="krishika-trend-price">₹1,999</p>
                            <div class="krishika-trend-btns">
                                <a href="product-details.php" class="krishika-view-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                    <!-- Item 3 -->
                    <!-- <div class="col-lg-3 col-md-6">
                    <div class="krishika-trend-card">
                        <div class="krishika-trend-img">
                            <img src="assets/img/bhandini_sarees/WhatsApp Image3 2026-04-04 at 4.50.37 PM.jpeg">
                        </div>
                        <div class="krishika-trend-info">
                            <h6>Silk Festival Saree</h6>
                            <p class="krishika-trend-price">₹3,299</p>
                            <div class="krishika-trend-btns">
                                <a href="product-details.php" class="krishika-view-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div> -->

                    <!-- Item 4 -->
                    <!-- <div class="col-lg-3 col-md-6">
                    <div class="krishika-trend-card">
                        <div class="krishika-trend-img">
                            <img src="assets/img/three_set_sarees/WhatsApp Image 2026-04-04 at 4.56.21 PM (1).jpeg">
                        </div>
                        <div class="krishika-trend-info">
                            <h6>Premium Bridal Saree</h6>
                            <p class="krishika-trend-price">₹4,499</p>
                            <div class="krishika-trend-btns">
                                <a href="product-details.php" class="krishika-view-btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- ================= PREMIUM SPOTLIGHT SECTION ================= -->

    <section id="krishikaSpotlightUnique" class="krishika-spotlight-wrap">

        <div class="container">

            <div class="krishika-spotlight-box">

                <!-- LEFT CONTENT -->
                <div class="krishika-spotlight-content">

                    <span class="krishika-spotlight-tag">NEW ARRIVAL</span>

                    <h2>Luxury Sarees Crafted For Your Grand Moments</h2>

                    <p>
                        Discover our exclusive premium saree collection designed
                        with elegant craftsmanship, luxurious fabrics, and timeless beauty.
                    </p>

                    <div class="krishika-spotlight-buttons">
                        <!-- <a href="#" class="krishika-spot-btn-dark">Add to Cart</a> -->
                        <a href="product-details.php" class="krishika-spot-btn-gold">View Details</a>
                    </div>

                </div>

                <!-- RIGHT IMAGE -->
                <div class="krishika-spotlight-image">
                    <img src="assets/img/three_set_sarees/WhatsApp Image 2026-04-04 at 4.56.21 PM.jpeg">
                </div>

            </div>

        </div>

    </section>

    <!-- ================= KRISHIKA PREMIUM HIGHLIGHTS ================= -->

    <section id="krishikaPremiumGlowSec" class="krishika-premium-glow-wrap py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="krishika-premium-heading">Why Customers Love Us</h2>
                <p class="krishika-premium-subheading">
                    Trusted boutique collections with premium quality and elegant designs
                </p>
            </div>

            <div class="row g-4">

                <!-- Box 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="krishika-glow-box-card">
                        <div class="krishika-glow-icon">
                            <i class="fa-solid fa-gem"></i>
                        </div>
                        <h5>Premium Quality</h5>
                        <p>Handpicked silk, cotton and bridal collections with top quality fabric.</p>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="krishika-glow-box-card">
                        <div class="krishika-glow-icon">
                            <i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <h5>Fast Delivery</h5>
                        <p>Quick doorstep delivery and WhatsApp based easy ordering process.</p>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="krishika-glow-box-card">
                        <div class="krishika-glow-icon">
                            <i class="fa-solid fa-tags"></i>
                        </div>
                        <h5>Best Offers</h5>
                        <p>Festival discounts, bridal offers and limited period exclusive deals.</p>
                    </div>
                </div>

                <!-- Box 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="krishika-glow-box-card">
                        <div class="krishika-glow-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <h5>Loved by Customers</h5>
                        <p>Thousands of happy customers trust Krishika Collections.</p>
                    </div>
                </div>

            </div>

        </div>

    </section>


    <!-- ================= LIMITED TIME ================= -->

    <section class="limited-offer">

        <div class="container text-center">

            <h2>Limited Time Festival Offer</h2>

            <p>Hurry up before stock ends</p>

            <a href="shop.php" class="limited-btn">
                Explore More
            </a>

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