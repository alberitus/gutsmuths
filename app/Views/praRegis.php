<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>GUTSMUTHS</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style_landing.css" rel="stylesheet">

    <!-- <script>
    function validateForm() {
      var checkBox = document.getElementById("invalidCheck2");

      if (!checkBox.checked) {
        alert("Please agree to the terms and conditions.");
        return false;
      }

      // If the checkbox is checked, you can submit the form
      return true;
    }
  </script> -->

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <!-- <h1 class="logo me-auto"><a href="index.html">GUTSMUTHS</a></h1> -->
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="/" class="logo me-auto"><img src="assets/images/logo.png" alt="" class="img-fluid"></a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="/">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link   scrollto" href="#product">Product</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="/dashboard">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        <div class="container" data-aos="zoom-in">

            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Get Your Account</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit anim id est laborum.</p>
                </div>
            </div>
            <hr>
            <div class="row content">
                <div class="col-lg-6">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="modal fade">
                        <div class="modal-content" id="personal">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Syarat dan Ketentuan</h5>
                                <span aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Selamat datang di GUTSMUTHS! Harap membaca dengan seksama Syarat dan Ketentuan ini
                                    sebelum melanjutkan pendaftaran. Dengan mengakses atau menggunakan situs web kami,
                                    Anda setuju untuk terikat oleh syarat dan ketentuan berikut.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue
                                    laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl
                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                    fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas
                                    eget
                                    quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>

                            <!-- <form action="#" method="post" onsubmit="return validateForm()">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Agree to terms and conditions
                                        </label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form> -->

                            <form action="/register" >
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Agree to terms and conditions
                                        </label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary" href="/register" type="submit">Lanjutkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="cta-btn-container text-center">
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="#personal" class="glightbox cta-btn align-middle"><span>Personal</span></a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in
                        culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <div class="modal fade">
                        <div class="modal-content" id="terms">
                            <div class="modal-header">
                                <h5 class="modal-title" id="">Syarat dan Ketentuan</h5>
                                <span aria-hidden="true"></span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Selamat datang di GUTSMUTHS! Harap membaca dengan seksama Syarat dan Ketentuan ini
                                    sebelum melanjutkan pendaftaran. Dengan mengakses atau menggunakan situs web kami,
                                    Anda setuju untuk terikat oleh syarat dan ketentuan berikut.</p>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                    lacus vel augue
                                    laoreet rutrum faucibus dolor auctor.</p>
                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                    scelerisque nisl
                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor
                                    fringilla.</p>
                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                    facilisis in, egestas
                                    eget
                                    quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                            </div>

                            <!-- <form action="#" method="post" onsubmit="return validateForm()">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Agree to terms and conditions
                                        </label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form> -->

                            <form action="/register" >
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck2"
                                            required>
                                        <label class="form-check-label" for="invalidCheck2">
                                            Agree to terms and conditions
                                        </label>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                <button class="btn btn-primary" href="/register" type="submit">Lanjutkan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="cta-btn-container text-center">
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="#terms" class="glightbox cta-btn align-middle"><span>Organization</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Cta Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">


        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>GUTSMUTHS</h3>
                        <p>
                            street <br>
                            Yogyakarta, Sleman city<br>
                            <strong>Phone:</strong> +62 xxxx xxxx<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">xxxx</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">xxxx</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>GUTSMUTHS</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <script src="assets/js/popper.min.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main_landing.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

</body>

</html>