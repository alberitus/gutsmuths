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
                            <a class="sign-in-logo mb-5" href="#"><img src="../assets/images/logo.png"
                                    class="img-fluid" alt="logo"></a>
                            <div class="sign-slider overflow-hidden ">
                                <ul class="swiper-wrapper list-inline m-0 p-0 ">
                                    <li class="swiper-slide">
                                        <img src="../assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
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

                            <?= view('Myth\Auth\Views\_message_block') ?>

                            <h2 class="mb-0">Sign Up</h2>
                            <p>Silahkan buat akun!</p>

                            <form class="mt-4" action="<?= url_to('register') ?>" method="post">
                                <?= csrf_field() ?>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="firstname"><?=lang('Firstname')?></label>
                                            <input type="text"
                                                class="form-control <?php if (session('errors.firstname')) : ?>is-invalid<?php endif ?>"
                                                name="firstname" aria-describedby="firstname"
                                                placeholder="<?=lang('Firstname')?>" value="<?= old('firstname') ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastname"><?=lang('Lastname')?></label>
                                            <input type="text"
                                                class="form-control <?php if (session('errors.lastname')) : ?>is-invalid<?php endif ?>"
                                                name="lastname" placeholder="<?=lang('Lastname')?>"
                                                value="<?= old('lastname') ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="email"><?=lang('Auth.email')?></label>
                                            <input type="email"
                                                class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>"
                                                name="email" aria-describedby="emailHelp"
                                                placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="username"><?=lang('Auth.username')?></label>
                                            <input type="text"
                                                class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>"
                                                name="username" placeholder="<?=lang('Auth.username')?>"
                                                value="<?= old('username') ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="password"><?=lang('Auth.password')?></label>
                                            <input type="password" name="password"
                                                class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?=lang('Auth.password')?>" autocomplete="off">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="pass_confirm"><?=lang('Auth.repeatPassword')?></label>
                                            <input type="password" name="pass_confirm"
                                                class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>"
                                                placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off">
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="d-inline-block w-100">
                                <button type="submit" class="btn btn-primary float-end"><?=lang('Auth.register')?></button>
                                </div>
                                
                                <div class="sign-info">
                                <span><?=lang('Auth.alreadyRegistered')?> <a
                                        href="<?= url_to('login') ?>">Login</a></span>
                                <ul class="iq-social-media">
                                    <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                </ul>
                                </div>
                            </form>
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