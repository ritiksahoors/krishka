<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Krishika Collections | Home</title>
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
    <link rel="stylesheet" href="assets/css/style.css?v=1.2">

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
    <!-- ================= HERO ================= -->

    <section class="hero-banner">

        <div class="hero-overlay"></div>

        <div class="container">

            <div class="hero-content" data-aos="fade-up">

                <h1>Premium Saree Boutique</h1>

                <h2>KRISHIKA COLLECTIONS</h2>

                <p>
                    Discover Elegant Silk, Banarasi & Designer Sarees in Bhubaneswar
                </p>

                <div class="hero-buttons">

                    <a href="shop.php" class="gold-btn">Shop Now</a>

                    <a href="offers.php" class="outline-btn">View Offers</a>

                </div>

            </div>

        </div>

    </section>

    <!-- ================= FEATURED SAREES ================= -->

    <section class="featured-sarees">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">

                <h2>Featured Products</h2>
                <p>Explore our premium and trending saree collection</p>

            </div>
            <div class="row">
                <?php
                include 'admin/conn.php';
                $sql1 = "SELECT * FROM product WHERE status='1' AND featured_pro='1'";
                $result1 = $conn->query($sql1);
                while ($row1 = $result1->fetch_assoc()) {
                    $encoded_id = base64_encode($row1['id']);
                    ?>
                    <div class="col-lg-3 col-md-6 mb-4" data-aos="zoom-in" data-aos-delay="300">
                        <div class="saree-card">
                            <div class="saree-img">
                                <img src="admin/upload/product/<?php echo $row1['product_image1']; ?>">
                                <span class="discount">
                                    <?php echo $row1['pro_discount']; ?>% OFF
                                </span>
                                <div class="hover-icons">
                                    <a href="#" class="add-to-wishlist">
                                        <i class="fa fa-heart" data-name="Bridal Saree" data-price="4999"
                                            data-img="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.38 PM.jpeg"></i>
                                    </a>
                                    <a href="#" class="add-to-cart">
                                        <i class="fa fa-shopping-cart" data-name="Bridal Saree" data-price="4999"
                                            data-img="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.38 PM.jpeg"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="saree-content">
                                <h4>
                                    <?php echo $row1['pro_name']; ?>
                                </h4>
                                <p class="price">
                                    ₹
                                    <?php echo round($row1['product_discount_price']); ?>
                                    <span class="feat-old">₹
                                        <?php echo $row1['product_price']; ?>
                                    </span>
                                </p>
                                <button class="gold-btn w-100"
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

    <!-- ================= CATEGORIES ================= -->

    <section class="categories">

        <div class="container">

            <!-- Title -->

            <div class="section-title text-center" data-aos="fade-up">
                <h2>All Categories</h2>
            </div>
            <div class="row">
                <?php
                include 'admin/conn.php';
                $sql = "SELECT * FROM category WHERE status='1'";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-md-6 mb-4" data-aos="zoom-in">
                        <div class="category-card">
                            <img src="admin/upload/category/<?php echo $row['image']; ?>">
                            <div class="category-overlay">
                                <h4><?php echo $row['category_name']; ?></h4>
                                <a href="shop.php" class="category-btn">
                                    Explore
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <!-- ================= OFFERS ================= -->

    <section class="offers py-5">

        <div class="container">

            <div class="section-title text-center mb-5">
                <h2 data-aos="fade-up">🔥 Special Offers</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Grab Exclusive Saree Deals at KRISHIKA COLLECTIONS
                </p>
            </div>
            <div class="row g-4">
                <?php
                include 'admin/conn.php';
                $sql3 = "SELECT * FROM product WHERE status='1' AND special_off='1'";
                $result3 = $conn->query($sql3);
                while ($row3 = $result3->fetch_assoc()) {
                    ?>
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="offer-card">
                            <span class="discount"><?php echo $row3['pro_discount']; ?>% OFF</span>
                            <img src="admin/upload/product/<?php echo $row3['product_image1']; ?>" alt="Saree">
                            <div class="offer-content">
                                <h4><?php echo $row3['pro_name']; ?></h4>
                                <p class="price">
                                    ₹<?php echo round($row3['product_discount_price']); ?>
                                    <span class="special-price">₹<?php echo $row3['product_price']; ?></span>
                                </p>
                                <button class="gold-btn w-100" onclick="window.location.href='shop.php'">
                                    View Details
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Offer 2 -->
                    <!-- <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">

                    <div class="offer-card">

                        <span class="discount">25% OFF</span>

                        <img src="assets/img/bhandini_sarees/WhatsApp Image2 2026-04-04 at 4.50.37 PM.jpeg" alt="Saree">

                        <div class="offer-content">

                            <h4>Designer Party Saree</h4>

                            <p class="price">
                                ₹2499 <span>₹3399</span>
                            </p>

                            <button class="gold-btn w-100" data-bs-toggle="modal" data-bs-target="#authModal">
                                Shop Now
                            </button>

                        </div>

                    </div>

                </div> -->

                    <!-- Offer 3 -->
                    <!-- <div class="col-md-4" data-aos="zoom-in" data-aos-delay="400">

                    <div class="offer-card">

                        <span class="discount">40% OFF</span>

                        <img src="assets/img/bhandini_sarees/WhatsApp Image3 2026-04-04 at 4.50.37 PM.jpeg" alt="Saree">

                        <div class="offer-content">

                            <h4>Wedding Silk Saree</h4>

                            <p class="price">
                                ₹3999 <span>₹6599</span>
                            </p>

                            <button class="gold-btn w-100" data-bs-toggle="modal" data-bs-target="#authModal">
                                Shop Now
                            </button>

                        </div>

                    </div>

                </div> -->
                <?php } ?>
            </div>

        </div>

        <!-- AUTH MODAL -->
        <div class="modal fade" id="authModal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content auth-modal">

                    <button class="btn-close ms-auto" data-bs-dismiss="modal"></button>

                    <div class="auth-container">

                        <!-- LOGIN FORM -->
                        <div class="auth-form login-form active">

                            <h3>Welcome Back 👋</h3>
                            <p>Login to continue shopping at KRISHIKA COLLECTIONS</p>

                            <input type="email" placeholder="Email Address" class="auth-input">
                            <input type="password" placeholder="Password" class="auth-input">

                            <button class="gold-btn w-100 mt-3">
                                Login
                            </button>

                            <div class="auth-footer">
                                Doesn't have an account?
                                <span id="showSignup">Sign Up</span>
                            </div>

                        </div>


                        <!-- SIGNUP FORM -->
                        <div class="auth-form signup-form">

                            <h3>Create Account ✨</h3>
                            <p>Join KRISHIKA COLLECTIONS today</p>

                            <input type="text" placeholder="Full Name" class="auth-input">
                            <input type="email" placeholder="Email Address" class="auth-input">
                            <input type="tel" placeholder="Phone Number" class="auth-input">
                            <input type="password" placeholder="Password" class="auth-input">
                            <input type="password" placeholder="Confirm Password" class="auth-input">

                            <button class="gold-btn w-100 mt-3">
                                Sign Up
                            </button>

                            <div class="auth-footer">
                                Already have an account?
                                <span id="showLogin">Login</span>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- ================= ABOUT BOUTIQUE ================= -->

    <section class="about-boutique py-5">

        <div class="container">

            <div class="row align-items-center">

                <!-- Image Side -->
                <div class="col-md-6" data-aos="fade-right">

                    <div class="about-img">

                        <img src="assets/img/main_logo.jpeg" class="img-fluid" alt="Boutique">

                        <div class="experience-box">
                            <h3>5+</h3>
                            <p>Years Experience</p>
                        </div>

                    </div>

                </div>

                <!-- Content Side -->
                <div class="col-md-6" data-aos="fade-left">

                    <div class="about-content">

                        <h2>About KRISHIKA COLLECTIONS</h2>

                        <p>
                            KRISHIKA COLLECTIONS is a premium saree boutique in Bhubaneswar offering
                            elegant silk, designer and wedding sarees for every occasion.
                            We focus on quality fabrics, modern designs and affordable pricing
                            to make every woman look graceful and confident.
                        </p>

                        <p>
                            From Banarasi Silk to Party Wear Sarees, our boutique provides
                            handpicked collections with latest fashion trends and traditional beauty.
                        </p>

                        <!-- Highlights -->

                        <div class="about-highlights">

                            <div class="highlight">
                                ✔ Premium Quality Sarees
                            </div>

                            <div class="highlight">
                                ✔ Affordable Pricing
                            </div>

                            <div class="highlight">
                                ✔ Latest Designer Collection
                            </div>

                            <div class="highlight">
                                ✔ Trusted by 1000+ Customers
                            </div>

                        </div>

                        <button class="gold-btn mt-3" onclick="window.location.href='shop.php'">
                            Explore Collection
                        </button>

                    </div>

                </div>

            </div>

            <!-- Stats Section -->

            <div class="row mt-5 text-center stats">

                <div class="col-md-3" data-aos="zoom-in">
                    <h3>1000+</h3>
                    <p>Happy Customers</p>
                </div>

                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="200">
                    <h3>500+</h3>
                    <p>Saree Designs</p>
                </div>

                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="400">
                    <h3>5+</h3>
                    <p>Years Experience</p>
                </div>

                <div class="col-md-3" data-aos="zoom-in" data-aos-delay="600">
                    <h3>24/7</h3>
                    <p>Customer Support</p>
                </div>

            </div>

        </div>

    </section>

    <!-- ================= TESTIMONIALS + GALLERY ================= -->

    <section class="reviews-gallery py-5">

        <div class="container">

            <!-- Section Title -->
            <div class="text-center mb-5">
                <h2 data-aos="fade-up">Customer Love & Our Boutique</h2>
                <p data-aos="fade-up" data-aos-delay="200">
                    Trusted by happy customers & beautiful saree moments
                </p>
            </div>

            <div class="row">

                <!-- ================= TESTIMONIALS ================= -->

                <div class="col-md-6">

                    <div class="testimonial-box" data-aos="fade-right">

                        <h4 class="mb-4">💬 Customer Reviews</h4>

                        <div class="testimonial-card">

                            <p>
                                "Beautiful saree collection and affordable prices.
                                I loved the Banarasi saree quality. Highly recommended!"
                            </p>

                            <div class="client">
                                <img src="https://randomuser.me/api/portraits/women/44.jpg">
                                <div>
                                    <h6>Priya Sharma</h6>
                                    <span>Bhubaneswar</span>
                                </div>
                            </div>

                        </div>

                        <div class="testimonial-card">

                            <p>
                                "KRISHIKA COLLECTIONS has amazing designer sarees.
                                Perfect for wedding and party wear."
                            </p>

                            <div class="client">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg">
                                <div>
                                    <h6>Anjali Das</h6>
                                    <span>Cuttack</span>
                                </div>
                            </div>

                        </div>

                        <div class="testimonial-card">

                            <p>
                                "Best saree boutique in Bhubaneswar with latest fashion
                                and premium quality."
                            </p>

                            <div class="client">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg">
                                <div>
                                    <h6>Ritika Patel</h6>
                                    <span>Puri</span>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- ================= GALLERY ================= -->

                <div class="col-md-6">

                    <div class="gallery-box" data-aos="fade-left">

                        <h4 class="mb-4">📸 Instagram Gallery</h4>

                        <div class="gallery-grid">

                            <img
                                src="assets/img/maheswari_cotton_sarees/WhatsApp Image 2026-04-04 at 4.54.34 PM (1).jpeg">
                            <img src="assets/img/maheswari_cotton_sarees/WhatsApp Image 2026-04-04 at 4.54.34 PM.jpeg">
                            <img
                                src="assets/img/maheswari_cotton_sarees/WhatsApp Image 2026-04-04 at 4.54.35 PM (1).jpeg">
                            <img
                                src="assets/img/maheswari_cotton_sarees/WhatsApp Image 2026-04-04 at 4.54.35 PM (2).jpeg">
                            <img
                                src="assets/img/maheswari_cotton_sarees/WhatsApp Image 2026-04-04 at 4.54.35 PM (3).jpeg">
                            <img src="assets/img/maheswari_cotton_sarees/WhatsApp Image 2026-04-04 at 4.54.35 PM.jpeg">

                        </div>

                        <button class="gold-btn mt-4 w-100">
                            Follow on Instagram
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- ================= CONTACT CTA ================= -->

    <section class="contact-cta">

        <div class="container">

            <div class="cta-box text-center" data-aos="zoom-in">

                <h2>Ready to Buy Your Dream Saree?</h2>

                <p>
                    Visit KRISHIKA COLLECTIONS in Bhubaneswar or contact us now
                    to explore our premium saree collection.
                </p>

                <div class="cta-buttons">

                    <a href="tel:8117049431" class="gold-btn">
                        📞 Call Now
                    </a>

                    <a href="https://wa.me/918117049431" class="whatsapp-btn">
                        💬 WhatsApp
                    </a>

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
        const showSignup = document.getElementById("showSignup");
        const showLogin = document.getElementById("showLogin");

        const loginForm = document.querySelector(".login-form");
        const signupForm = document.querySelector(".signup-form");

        showSignup.addEventListener("click", () => {

            loginForm.classList.remove("active");

            setTimeout(() => {
                signupForm.classList.add("active");
            }, 150);

        });

        showLogin.addEventListener("click", () => {

            signupForm.classList.remove("active");

            setTimeout(() => {
                loginForm.classList.add("active");
            }, 150);

        });
    </script>

    <script>

        const profileToggle = document.querySelector(".profile-toggle");
        const profileDropdown = document.querySelector(".profile-dropdown");

        profileToggle.addEventListener("click", () => {
            profileDropdown.classList.toggle("active");
        });

        /* click outside close */

        document.addEventListener("click", function (e) {

            if (!profileDropdown.contains(e.target)) {
                profileDropdown.classList.remove("active");
            }

        });

    </script>

    <!-- <script>
        let wishlist = JSON.parse(localStorage.getItem("wishlist")) || []
        let cart = JSON.parse(localStorage.getItem("cart")) || []

        const wishlistCount = document.querySelectorAll(".icon-box .count")[0]
        const cartCount = document.querySelectorAll(".icon-box .count")[1]

        const wishlistBody = document.querySelector("#wishlistModal .modal-body")
        const cartBody = document.querySelector("#cartModal .modal-body")

        // -------------------
        // Load Data On Start
        // -------------------

        loadWishlist()
        loadCart()

        // -------------------
        // Add to Wishlist
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.classList.contains("fa-heart")) {

                let product = {
                    name: e.target.dataset.name,
                    price: e.target.dataset.price,
                    img: e.target.dataset.img
                }

                wishlist.push(product)

                localStorage.setItem("wishlist", JSON.stringify(wishlist))

                loadWishlist()

                showToast("Added to Wishlist ❤️")
            }

        })

        // -------------------
        // Move Wishlist to Cart
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.classList.contains("fa-shopping-cart")) {

                let product = {
                    name: e.target.dataset.name,
                    price: parseInt(e.target.dataset.price),
                    img: e.target.dataset.img,
                    qty: 1
                }

                cart.push(product)

                localStorage.setItem("cart", JSON.stringify(cart))

                loadCart()

                showToast("Added to Cart 🛒")
            }

        })

        // -------------------
        // Add to Cart Direct
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.classList.contains("add-to-cart")) {

                let product = {
                    name: e.target.dataset.name,
                    price: parseInt(e.target.dataset.price),
                    img: e.target.dataset.img,
                    qty: 1
                }

                cart.push(product)

                localStorage.setItem("cart", JSON.stringify(cart))

                loadCart()

                showToast("Added to Cart 🛒")
            }

        })

        // -------------------
        // Qty Buttons
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.classList.contains("plus")) {

                let i = e.target.dataset.index

                cart[i].qty++

                localStorage.setItem("cart", JSON.stringify(cart))

                loadCart()
            }

            if (e.target.classList.contains("minus")) {

                let i = e.target.dataset.index

                if (cart[i].qty > 1) {
                    cart[i].qty--
                }

                localStorage.setItem("cart", JSON.stringify(cart))

                loadCart()
            }

        })

        // -------------------
        // Load Wishlist
        // -------------------

        function loadWishlist() {

            wishlistBody.innerHTML = ""

            wishlist.forEach((item, index) => {

                wishlistBody.innerHTML += `

        <div class="wishlist-item">

            <img src="${item.img}">

            <div class="wishlist-info">
                <h6>${item.name}</h6>
                <p>₹${item.price}</p>
            </div>

            <button class="gold-btn move-to-cart"
                data-index="${index}">
                Add to Cart
            </button>

        </div>
        `
            })

            wishlistCount.innerText = wishlist.length
        }

        // -------------------
        // Load Cart
        // -------------------

        function loadCart() {

            cartBody.innerHTML = ""

            let total = 0

            cart.forEach((item, index) => {

                total += item.price * item.qty

                cartBody.innerHTML += `

        <div class="cart-item">

            <img src="${item.img}">

            <div class="cart-info">

                <h6>${item.name}</h6>
                <p>₹${item.price}</p>

                <div class="qty-box">

                    <button class="minus" data-index="${index}">-</button>
                    <span>${item.qty}</span>
                    <button class="plus" data-index="${index}">+</button>

                </div>

            </div>

            <p class="total">₹${item.price * item.qty}</p>

        </div>

        <hr>
        `
            })

            cartBody.innerHTML += `

    <div class="cart-summary">

        <h6>Total: ₹${total}</h6>

        <button class="gold-btn w-100"
            data-bs-toggle="modal"
            data-bs-target="#checkoutModal"
            data-bs-dismiss="modal">
            Proceed to Checkout
        </button>

    </div>
    `

            cartCount.innerText = cart.length
        }

        // -------------------
        // Place Order
        // -------------------

        document.addEventListener("click", function (e) {

            if (e.target.innerText.includes("Place Order")) {

                showToast("Order Placed Successfully 🎉")

                cart = []

                localStorage.removeItem("cart")

                loadCart()

                setTimeout(() => {
                    location.reload()
                }, 2000)
            }

        })

        // -------------------
        // Toast
        // -------------------

        function showToast(msg) {

            let toast = document.createElement("div")

            toast.innerText = msg

            toast.style.position = "fixed"
            toast.style.bottom = "20px"
            toast.style.right = "20px"
            toast.style.background = "#000"
            toast.style.color = "#fff"
            toast.style.padding = "12px 20px"
            toast.style.borderRadius = "8px"
            toast.style.zIndex = "9999"

            document.body.appendChild(toast)

            setTimeout(() => {
                toast.remove()
            }, 3000)
        }

        document.querySelectorAll(".hover-icons a").forEach(btn => {
            btn.addEventListener("click", function (e) {
                e.preventDefault()
            })
        })


    </script> -->

</body>

</html>