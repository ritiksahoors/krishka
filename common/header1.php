<header>

    <nav class="navbar navbar-expand-lg boutique-navbar">

        <div class="container">

            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="assets/img/main_logo-removebg-preview1.png" class="logo-img">
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="nav">

                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="shop.php">Shop</a>
                    </li>

                    <li class="nav-item mega-parent">

                        <a class="nav-link" href="#">Categories</a>

                        <div class="mega-menu hide-scrollbar">

                            <div class="mega-container">
                                <?php
                                include 'admin/conn.php';
                                $sql1 = "SELECT * FROM category WHERE status='1'";
                                $result1 = $conn->query($sql1);
                                while ($row1 = $result1->fetch_assoc()) {
                                    ?>
                                        <div class="mega-column">

                                            <h4 class="fw-bold">
                                                <a href="shop.php">
                                                    <?php echo $row1['category_name']; ?>
                                                </a>
                                            </h4>

                                            <ul>
                                                <?php
                                                $cat_id = $row1['id'];
                                                $sql = "SELECT * FROM sub_category WHERE status='1' AND category_id='$cat_id'";
                                                $result = $conn->query($sql);
                                                while ($row = $result->fetch_assoc()) {

                                                    ?>
                                                        <li class="sub-parent">
                                                            <a href="shop.php"
                                                                class="fw-bold text-warning"><?php echo $row['sub_category_name']; ?>
                                                            </a>
                                                            <ul class="sub-sub-menu">
                                                                <?php
                                                                $sub_cat_id = $row['id'];

                                                                $sql3 = "SELECT * FROM sub_subcategory 
                                                        WHERE status='1' 
                                                        AND category_id='$cat_id' 
                                                        AND sub_category_id='$sub_cat_id'";

                                                                $result3 = $conn->query($sql3);

                                                                while ($row3 = $result3->fetch_assoc()) {
                                                                    ?>
                                                                        <li>
                                                                            <a href="product-details.php">
                                                                                <?php echo $row3['sub_subcategoryname']; ?>
                                                                            </a>
                                                                        </li>
                                                                <?php } ?>
                                                            </ul>

                                                        </li>
                                                <?php } ?>

                                                <!-- <li class="sub-parent">
                                                <a href="shop.php" class="fw-bold text-warning">Silk Sarees</a>
                                                <ul class="sub-sub-menu">
                                                    <li><a href="product-details.php">Pure Banarasi</a></li>
                                                    <li><a href="product-details.php">Semi Banarasi</a></li>
                                                <li><a href="product-details.php">Bridal Banarasi</a></li>
                                                    <li><a href="product-details.php">Pure Kanjivaram</a></li>
                                                    <li><a href="product-details.php">Soft Kanjivaram</a></li>
                                                    <li><a href="product-details.php">Bridal Collection</a></li>
                                                    <li><a href="product-details.php">Lightweight Silk</a></li>
                                                    <li><a href="product-details.php">Party Wear Silk</a></li>
                                                </ul>
                                            </li> -->

                                                <!-- <li class="sub-parent">
                                        <a href="shop.php" class="fw-bold text-warning">Sambalpuri Sarees</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Single Ikat</a></li>
                                                <li><a href="product-details.php">Double Ikat</a></li>
                                                <li><a href="product-details.php">Traditional</a></li>
                                                <li><a href="product-details.php">Modern Design</a></li>
                                            </ul>
                                        </li> -->

                                                <!-- <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Kalamkari Sarees</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Printed Kalamkari</a></li>
                                                <li><a href="product-details.php">Handmade Kalamkari</a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Ikat Sarees</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Cotton Ikat</a></li>
                                                <li><a href="product-details.php">Silk Ikat</a></li>
                                            </ul>
                                        </li> -->

                                                <!-- <li class="sub-parent">
                                        <a href="shop.php" class="fw-bold text-warning">Designer Sarees</a>
                                            <ul class="sub-sub-menu">
                                            <li><a href="product-details.php">Sequin Work</a></li>
                                                <li><a href="product-details.php">Embroidery Work</a></li>
                                            <li><a href="product-details.php">Heavy Work Sarees</a></li>
                                                <li><a href="product-details.php">Reception Work</a></li>
                                            </ul>
                                        </li> -->

                                            </ul>

                                        </div>

                                        <!-- <div class="mega-column">

                                    <h4 class="fw-bold">
                                        <a href="shop.php">Dress Materials</a>
                                    </h4>

                                    <ul>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Cotton Dress
                                                Materials</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Floral Printed</a></li>
                                                <li><a href="product-details.php">Casual Wear Printed</a></li>
                                                <li><a href="product-details.php">Light EMbroidery</a></li>
                                                <li><a href="product-details.php">Heavy EMbroidery</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Silk Dress Materials</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Semi Silk Daily Wear</a></li>
                                                <li><a href="product-details.php">Semi Silk Daily Wear</a></li>
                                                <li><a href="product-details.php">Pure Silk Bridal Collection</a>
                                                </li>
                                                <li><a href="product-details.php">Pure Silk Premium Range</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Kalamkari Dress
                                                Materials</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Printed Kalamkari</a></li>
                                                <li><a href="product-details.php">Handpainted Kalamkari</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Ikat Dress Materials</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Cotton Ikat</a></li>
                                                <li><a href="product-details.php">Silk Ikat</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Designer Dress
                                                Materials</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Fancy Designs Party Wear</a></li>
                                                <li><a href="product-details.php">Trendy Collection Party Wear</a>
                                                </li>
                                                <li><a href="product-details.php">Ethnic Wear Festive Collection</a>
                                                </li>
                                                <li><a href="product-details.php">Special Occasion Festive
                                                        Collection</a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div>

                                <div class="mega-column">

                                    <h4 class="fw-bold">
                                        <a href="shop.php">Blouses</a>
                                    </h4>

                                    <ul>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Ready-made Blouses</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Party Wear Padded</a></li>
                                                <li><a href="product-details.php">Bridal Wear Padded</a></li>
                                                <li><a href="product-details.php">Daily-wear Non-Padded</a></li>
                                                <li><a href="product-details.php">Cotton Blouses Non-Padded</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Unstitched Blouses</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Cotton Printed</a></li>
                                                <li><a href="product-details.php">Cotton Plain</a></li>
                                                <li><a href="product-details.php">Silk Banarasi</a></li>
                                                <li><a href="product-details.php">Designer Pieces Banarasi</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Designer Blouses</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Bridal Blouses Heavy Work</a></li>
                                                <li><a href="product-details.php">Bridal Blouses Custom Designs</a>
                                                </li>
                                                <li><a href="product-details.php">Fancy Blouses Back Designs</a>
                                                </li>
                                                <li><a href="product-details.php">Fancy Blouses Trendy Styles</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div>

                                <div class="mega-column">

                                    <h4 class="fw-bold">
                                        <a href="shop.php">Jewellery</a>
                                    </h4>

                                    <ul>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Necklaces</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Bridal Necklace Sets</a></li>
                                                <li><a href="product-details.php">Temple Jewellery</a></li>
                                                <li><a href="product-details.php">Choker Necklaces</a></li>
                                                <li><a href="product-details.php">Layered Necklaces</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Earrings</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Jhumkas</a></li>
                                                <li><a href="product-details.php">Stud Earrings</a></li>
                                                <li><a href="product-details.php">Chandbali</a></li>
                                                <li><a href="product-details.php">Drop Earrings</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Bangles & Bracelets</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Lac Bangles</a></li>
                                                <li><a href="product-details.php">Gold Plated Bangles</a></li>
                                                <li><a href="product-details.php">Oxidised Bangles</a></li>
                                                <li><a href="product-details.php">Bracelets</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Rings</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Stone Rings</a></li>
                                                <li><a href="product-details.php">Adjustable Rings</a></li>
                                                <li><a href="product-details.php">Wedding Rings</a></li>
                                                <li><a href="product-details.php">Fashion Rings</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Mangalsutra</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Traditional Mangalsutra</a></li>
                                                <li><a href="product-details.php">Modern Designs</a></li>
                                                <li><a href="product-details.php">Short Mangalsutra</a></li>
                                                <li><a href="product-details.php">Long Mangalsutra</a></li>
                                            </ul>
                                        </li>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Anklets</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Silver Anklets</a></li>
                                                <li><a href="product-details.php">Oxidised Anklets</a></li>
                                                <li><a href="product-details.php">Beaded Anklets</a></li>
                                                <li><a href="product-details.php">Bridal Anklets</a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div>

                                <div class="mega-column">

                                    <h4 class="fw-bold">
                                        <a href="shop.php">Kurtas & Kurtis</a>
                                    </h4>

                                    <ul>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Daily Wear</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Cotton Kurtis Simple Designs</a>
                                                </li>
                                                <li><a href="product-details.php">Party Wear Embroidered Kurtis</a>
                                                </li>
                                                <li><a href="product-details.php">Fancy Kurtas Designer
                                                        Collection</a></li>
                                                <li><a href="product-details.php">Indo-Western Premium Designs</a>
                                                </li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div>

                                <div class="mega-column">

                                    <h4 class="fw-bold">
                                        <a href="shop.php">Dupattas</a>
                                    </h4>

                                    <ul>

                                        <li class="sub-parent">
                                            <a href="shop.php" class="fw-bold text-warning">Bangles</a>
                                            <ul class="sub-sub-menu">
                                                <li><a href="product-details.php">Lac Bangles Bridal Sets</a></li>
                                                <li><a href="product-details.php">Lac Bangles Daily Wear</a></li>
                                                <li><a href="product-details.php">Metal Bangles Gold Plated</a></li>
                                                <li><a href="product-details.php">Metal Bangles Oxidised</a></li>
                                                <li><a href="product-details.php">Mangalsutra Traditional</a></li>
                                                <li><a href="product-details.php">Mangalsutra Modern Designs</a>
                                                </li>
                                                <li><a href="product-details.php">Beads Chains Single Layer</a></li>
                                                <li><a href="product-details.php">Beads Chains Multi Layer</a></li>
                                                <li><a href="product-details.php">Bracelets Daily Wear</a></li>
                                                <li><a href="product-details.php">Bracelets Party Wear</a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                </div> -->
                                <?php } ?>
                            </div>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="offers.php">Offers</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>

                </ul>

                <!-- Icons -->
                <div class="nav-icons">

                    <a href="#" class="icon-box" data-bs-toggle="modal" data-bs-target="#wishlistModal">
                        <i class="fa-regular fa-heart"></i>
                        <span class="count">2</span>
                    </a>

                    <a href="#" class="icon-box" data-bs-toggle="modal" data-bs-target="#cartModal">
                        <i class="fa fa-shopping-cart"></i>
                        <span class="count">3</span>
                    </a>

                    <!-- Profile -->
                    <div class="profile-dropdown">

                        <div class="icon-box profile-toggle">
                            <i class="fa-regular fa-user"></i>
                        </div>

                        <div class="profile-menu">

                            <div class="profile-header">
                                <i class="fa fa-user-circle"></i>
                                <div>
                                    <h6>Guest User</h6>
                                    <small>Not Logged In</small>
                                </div>
                            </div>

                            <hr>

                            <a href="#">
                                <i class="fa fa-user"></i> My Profile
                            </a>

                            <a href="#">
                                <i class="fa fa-box"></i> My Orders
                            </a>

                            <!-- <a href="#">
                                    <i class="fa fa-heart"></i> Wishlist
                                </a> -->

                            <a href="#">
                                <i class="fa fa-cog"></i> Settings
                            </a>

                            <hr>

                            <a href="#" class="login-btn">
                                <i class="fa fa-sign-in"></i> Login
                            </a>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </nav>

    <!-- Wishlist Modal -->
    <div class="modal fade" id="wishlistModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content boutique-modal">

                <div class="modal-header">
                    <h5>❤️ My Wishlist</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="wishlist-item">

                        <img src="assets/img/bhandini_sarees/WhatsApp Image 2026-04-04 at 4.50.39 PM.jpeg">

                        <div class="wishlist-info">
                            <h6>Banarasi Silk Saree</h6>
                            <p>₹2999</p>
                        </div>

                        <button class="gold-btn">Add to Cart</button>

                    </div>

                    <div class="wishlist-item">

                        <img src="assets/img/bhandini_sarees/WhatsApp Image2 2026-04-04 at 4.50.37 PM.jpeg">

                        <div class="wishlist-info">
                            <h6>Designer Party Saree</h6>
                            <p>₹2499</p>
                        </div>

                        <button class="gold-btn">Add to Cart</button>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content boutique-modal">

                <div class="modal-header">
                    <h5>🛒 My Cart</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="cart-item">

                        <img src="assets/img/bhandini_sarees/WhatsApp Image3 2026-04-04 at 4.50.37 PM.jpeg">

                        <div class="cart-info">
                            <h6>Wedding Silk Saree</h6>
                            <p>₹3999</p>

                            <div class="qty-box">
                                <button>-</button>
                                <span>1</span>
                                <button>+</button>
                            </div>
                        </div>

                        <p class="total">₹3999</p>

                    </div>

                    <hr>

                    <div class="cart-summary">

                        <h6>Total: ₹3999</h6>

                        <button class="gold-btn w-100" data-bs-toggle="modal" data-bs-target="#checkoutModal"
                            data-bs-dismiss="modal">
                            Proceed to Checkout
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Checkout Modal -->
    <div class="modal fade" id="checkoutModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content boutique-modal">

                <div class="modal-header">
                    <h5>💳 Checkout</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">

                    <div class="row">

                        <!-- Address -->
                        <div class="col-md-6">

                            <h6>Shipping Address</h6>

                            <input class="form-control mb-2" placeholder="Full Name">
                            <input class="form-control mb-2" placeholder="Phone">
                            <input class="form-control mb-2" placeholder="Address">
                            <input class="form-control mb-2" placeholder="City">
                            <input class="form-control mb-2" placeholder="Pincode">

                        </div>

                        <!-- Payment -->
                        <div class="col-md-6">

                            <h6>Payment Method</h6>

                            <div class="payment-option">
                                <input type="radio" name="pay"> Cash on Delivery
                            </div>

                            <div class="payment-option">
                                <input type="radio" name="pay"> UPI
                            </div>

                            <div class="payment-option">
                                <input type="radio" name="pay"> Card
                            </div>

                            <hr>

                            <h6>Order Summary</h6>

                            <p>Wedding Silk Saree - ₹3999</p>

                            <h5>Total: ₹3999</h5>

                            <button class="gold-btn w-100 mt-3">
                                Place Order
                            </button>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</header>