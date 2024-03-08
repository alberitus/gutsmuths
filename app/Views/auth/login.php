<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SocialV | Responsive Bootstrap 4 Admin Dashboard Template</title>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../assets/css/libs.min.css">
    <link rel="stylesheet" href="../assets/css/socialv.css?v=4.0.0">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">

</head>

<body class=" ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
        <section class="sign-in-page">
            <div id="container-inside">
                <div id="circle-small"></div>
                <div id="circle-medium"></div>
                <div id="circle-large"></div>
                <div id="circle-xlarge"></div>
                <div id="circle-xxlarge"></div>
            </div>
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center pt-5">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="../assets/images/logo.png" class="img-fluid"
                                    alt="logo"></a>
                            <div class="sign-slider overflow-hidden ">
                                <ul class="swiper-wrapper list-inline m-0 p-0 ">
                                    <li class="swiper-slide">
                                        <img src="../assets/img/portfolio/botol.png" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Find new friends</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </li>
                                    <li class="swiper-slide">
                                        <img src="../assets/images/login/2.png" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Connect with the world</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </li>
                                    <li class="swiper-slide">
                                        <img src="../assets/images/login/3.png" class="img-fluid mb-4" alt="logo">
                                        <h4 class="mb-1 text-white">Create new events</h4>
                                        <p>It is a long established fact that a reader will be distracted by the
                                            readable content.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 bg-white pt-5 pt-5 pb-lg-0 pb-5">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign in</h1>
                            <p>Enter your email address and password to access admin panel.</p>

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <form class="mt-4" action="<?= url_to('login') ?>" method="post">
                                <?= csrf_field() ?>

                                <?php if ($config->validFields === ['email']): ?>
                                <div class="form-group">
                                    <label for="login"><?=lang('Auth.email')?></label>
                                    <input type="email"
                                        class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                        name="login" placeholder="<?=lang('Auth.email')?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>

                                <?php else: ?>

                                <div class="form-group">
                                    <label for="login"><?=lang('Auth.emailOrUsername')?></label>
                                    <input type="text"
                                        class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>"
                                        name="login" placeholder="<?=lang('Auth.emailOrUsername')?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.login') ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                                <div class="form-group">
                                    <label for="password"><?=lang('Auth.password')?></label>
                                    <input type="password" name="password"
                                        class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                        placeholder="<?=lang('Auth.password')?>">
                                    <div class="invalid-feedback">
                                        <?= session('errors.password') ?>
                                    </div>
                                </div>

                                <?php if ($config->allowRemembering): ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" name="remember" class="form-check-input"
                                            <?php if (old('remember')) : ?> checked <?php endif ?>>
                                        <?=lang('Auth.rememberMe')?>
                                    </label>
                                </div>
                                <?php endif; ?>
                                <button type="submit" class="btn btn-primary float-end">Sign in</button>

                                <div class="sign-info">
                                    <?php if ($config->allowRegistration) : ?>
                                    <span class="dark-color d-inline-block line-height-2"><a
                                            href="<?= url_to('register') ?>"><?=lang('Auth.needAnAccount')?></a></span>
                                    <?php endif; ?>
                                    <ul class="iq-social-media">

                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                            <?php if ($config->activeResetter): ?>
                            <p><a href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/libs.min.js"></script>
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    <!-- masonry JavaScript -->
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="../assets/js/charts/weather-chart.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="../assets/js/lottie.js"></script>

</body>

</html>