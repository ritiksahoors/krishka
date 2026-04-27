<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Krishika Collections | Contact</title>
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
    <!-- ================= CONTACT HERO ================= -->

    <section class="contact-hero-new">

        <div class="container text-center">

            <h1 data-aos="fade-up">Contact Krishika Collections</h1>

            <p data-aos="fade-up" data-aos-delay="200">
                We would love to hear from you. Visit our boutique or send us a message
            </p>

        </div>

    </section>


    <!-- ================= CONTACT INFO ================= -->

    <section class="contact-info-new">

        <div class="container">

            <div class="row">

                <div class="col-md-4" data-aos="fade-up">

                    <div class="contact-box-new">

                        <i class="fa fa-location-dot"></i>

                        <h4>Our Location</h4>

                        <p>Ravi Talkies, Lewis Road<br>Bhubaneswar, Odisha</p>

                    </div>

                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">

                    <div class="contact-box-new">

                        <i class="fa fa-phone"></i>

                        <h4>Call Us</h4>

                        <p>+91 8117049431<br>+91 8249403184</p>

                    </div>

                </div>

                <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">

                    <div class="contact-box-new">

                        <i class="fa fa-envelope"></i>

                        <h4>Email</h4>

                        <p>krishikacollections@gmail.com</p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= CONTACT FORM ================= -->

    <section class="contact-form-new">

        <div class="container">

            <div class="row align-items-center">

                <!-- Form -->

                <div class="col-lg-6" data-aos="fade-right">

                    <h2>Send Message</h2>

                    <form id="contactForm">

                        <input type="text" class="form-control mb-3" placeholder="Your Name" required>

                        <input type="email" class="form-control mb-3" placeholder="Your Email" required>

                        <input type="tel" class="form-control mb-3" placeholder="Phone Number" required>

                        <textarea class="form-control mb-3" rows="4" placeholder="Message" required></textarea>

                        <button class="btn contact-btn-new">
                            Send Message
                        </button>

                    </form>

                </div>

                <!-- WhatsApp Box -->

                <div class="col-lg-6 text-center" data-aos="fade-left">

                    <div class="whatsapp-box-new">

                        <i class="fab fa-whatsapp"></i>

                        <h3>Chat on WhatsApp</h3>

                        <p>Instant response and quick support</p>

                        <a href="https://wa.me/918117049431" class="btn whatsapp-btn-new">
                            Chat Now
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ================= MAP ================= -->

    <section class="contact-map-new">

        <iframe
            src="https://maps.google.com/maps?q=Ravi%20Talkies%20Lewis%20Road%20Bhubaneswar&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="400" style="border:0;">
        </iframe>

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