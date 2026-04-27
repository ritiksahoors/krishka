<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Krishika Collections | Product Details</title>
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
    <section class="amazon-product">

        <div class="container">

            <div class="row">

                <!-- LEFT IMAGES -->

                <div class="col-lg-5">

                    <div class="amazon-gallery">

                        <div class="thumbs">

                            <img src="assets/img/three_set_sarees/WhatsApp Image 2026-04-04 at 4.56.21 PM (1).jpeg"
                                onclick="changeImage(this)">
                            <img src="assets/img/three_set_sarees/WhatsApp Image 2026-04-04 at 4.56.21 PM (2).jpeg"
                                onclick="changeImage(this)">
                            <img src="assets/img/three_set_sarees/WhatsApp Image 2026-04-04 at 4.56.21 PM (3).jpeg"
                                onclick="changeImage(this)">

                        </div>

                        <div class="main-image">

                            <img id="mainImage"
                                src="assets/img/three_set_sarees/WhatsApp Image 2026-04-04 at 4.56.21 PM.jpeg">

                        </div>

                    </div>

                </div>


                <!-- RIGHT DETAILS -->

                <div class="col-lg-7">

                    <div class="amazon-info">

                        <h2 class="product-title">
                            Banarasi Silk Saree Wedding Collection with Premium Zari Work
                        </h2>

                        <div class="rating">
                            ⭐⭐⭐⭐⭐
                            <span>4.5 (120 reviews)</span>
                        </div>

                        <hr>

                        <h3 class="price">
                            ₹2,499
                        </h3>

                        <p class="mrp">
                            MRP: <span>₹3,999</span> (38% OFF)
                        </p>


                        <!-- SHARE + BUY -->

                        <div class="buy-section">

                            <!-- <button class="share-btn">
                                <i class="fa fa-share"></i> Share
                            </button> -->

                            <a href="#" class="buy-now-btn" data-bs-toggle="modal" data-bs-target="#checkoutModal">
                                Buy Now
                            </a>

                            <!-- Wishlist -->
                            <a href="#" class="custom-wishlist-btn">

                                <span class="btn-label" data-name="Banarasi Silk Saree" data-price="2499"
                                    data-img="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.37 PM.jpeg">
                                    Wishlist
                                </span>

                            </a>

                            <!-- Cart -->
                            <a href="#" class="custom-cart-btn">

                                <span class="btn-label" data-name="Banarasi Silk Saree" data-price="2499"
                                    data-img="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.37 PM.jpeg">
                                    Add to Cart
                                </span>

                            </a>

                            <a href="https://wa.me/918117049431" class="whatsapp-btn">
                                WhatsApp
                            </a>

                        </div>

                        <hr>

                        <!-- DETAILS -->

                        <div class="product-details">

                            <p><b>Category:</b> Wedding Saree</p>
                            <p><b>Fabric:</b> Silk</p>
                            <p><b>Color:</b> Red & Gold</p>
                            <p><b>Length:</b> 6.3 Meter</p>
                            <p><b>Blouse:</b> Included</p>

                        </div>

                        <hr>

                        <div class="about-product">

                            <h4>About this item</h4>

                            <ul>

                                <li>Premium Banarasi Silk Saree</li>
                                <li>Perfect for Wedding & Party</li>
                                <li>Elegant Zari Work</li>
                                <li>Soft and Comfortable Fabric</li>
                                <li>Latest Boutique Collection</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ================= RELATED PRODUCTS ================= -->

    <section class="related-products py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="section-title">Related Products</h2>
                <p class="section-subtitle">You may also like these beautiful collections</p>
            </div>

            <div class="row g-4">

                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">

                        <div class="product-img">
                            <img src="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.39 PM.jpeg">
                            <span class="badge">Sale</span>
                        </div>

                        <div class="product-info">
                            <h6>Designer Party Saree</h6>
                            <p class="price">₹2,199 <span>₹3,499</span></p>

                            <div class="card-btns">
                                <a href="#" class="cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>

                                <a href="https://wa.me/918117049431" class="buy-btn">
                                    Buy Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">

                        <div class="product-img">
                            <img src="assets/img/bhandini_sarees/WhatsApp Image2 2026-04-04 at 4.50.37 PM.jpeg">
                        </div>

                        <div class="product-info">
                            <h6>Banarasi Silk Saree</h6>
                            <p class="price">₹2,999</p>

                            <div class="card-btns">
                                <a href="#" class="cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>

                                <a href="https://wa.me/918117049431" class="buy-btn">
                                    Buy Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">

                        <div class="product-img">
                            <img src="assets/img/bhandini_sarees/WhatsApp Image3 2026-04-04 at 4.50.37 PM.jpeg">
                        </div>

                        <div class="product-info">
                            <h6>Wedding Silk Saree</h6>
                            <p class="price">₹3,999</p>

                            <div class="card-btns">
                                <a href="#" class="cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>

                                <a href="https://wa.me/918117049431" class="buy-btn">
                                    Buy Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">

                        <div class="product-img">
                            <img src="assets/img/three_set_sarees/WhatsApp Image 2026-04-04 at 4.56.21 PM (1).jpeg">
                        </div>

                        <div class="product-info">
                            <h6>Premium Bridal Saree</h6>
                            <p class="price">₹4,499</p>

                            <div class="card-btns">
                                <a href="#" class="cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>

                                <a href="https://wa.me/918117049431" class="buy-btn">
                                    Buy Now
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <!-- ================= RECENTLY VISITED ================= -->

    <section class="recent-products py-5">

        <div class="container">

            <div class="text-center mb-5">
                <h2 class="section-title">Recently Visited</h2>
                <p class="section-subtitle">Products you viewed recently</p>
            </div>

            <div class="row g-4">

                <!-- Product 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">

                        <div class="product-img">
                            <img src="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.39 PM.jpeg">
                        </div>

                        <div class="product-info">
                            <h6>Designer Party Saree</h6>
                            <p class="price">₹2,199</p>

                            <div class="card-btns">

                                <a href="#" class="cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>

                                <a href="product-details.php" class="view-btn">
                                    Details
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">

                        <div class="product-img">
                            <img src="assets/img/bhandini_sarees/WhatsApp Image2 2026-04-04 at 4.50.37 PM.jpeg">
                        </div>

                        <div class="product-info">
                            <h6>Banarasi Silk Saree</h6>
                            <p class="price">₹2,999</p>

                            <div class="card-btns">

                                <a href="#" class="cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>

                                <a href="product-details.php" class="view-btn">
                                    Details
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">

                        <div class="product-img">
                            <img src="assets/img/bhandini_sarees/WhatsApp Image3 2026-04-04 at 4.50.37 PM.jpeg">
                        </div>

                        <div class="product-info">
                            <h6>Wedding Silk Saree</h6>
                            <p class="price">₹3,999</p>

                            <div class="card-btns">

                                <a href="#" class="cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>

                                <a href="product-details.php" class="view-btn">
                                    Details
                                </a>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">

                        <div class="product-img">
                            <img src="assets/img/three_set_sarees/WhatsApp Image 2026-04-04 at 4.56.21 PM (1).jpeg">
                        </div>

                        <div class="product-info">
                            <h6>Premium Bridal Saree</h6>
                            <p class="price">₹4,499</p>

                            <div class="card-btns">

                                <a href="#" class="cart-btn">
                                    <i class="fa fa-shopping-cart"></i> Cart
                                </a>

                                <a href="product-details.php" class="view-btn">
                                    Details
                                </a>

                            </div>
                        </div>

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

    <script>
        function changeImage(img) {
            document.getElementById("mainImage").src = img.src;
        }
    </script>

</body>

</html>