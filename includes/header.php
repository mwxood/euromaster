<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euromaster</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/frontend.bundle.css">
</head>

<body>

    <header class="header-bg">
        <div class="header-top">
            <div class="custom-container">
                <div class="header-top-holder">
                    <div class="header-top-left-col">
                        <div class="header-top-text">
                            Lorem Ipsum е елементарен примерен текст
                        </div>
                        <!--end header-top-text-->
                        <div class="header-top-social social-desktop">
                            <span class="social-title">Послледвайте ни:</span>
                            <ul class="social">
                                <li><a href="#"><img src="assets/img/facebook.svg" alt="Social" /></a></li>
                                <li><a href="#"><img src="assets/img/yt.svg" alt="social" /></a></li>
                                <li><a href="#"><img src="assets/img/linkedin.svg" alt="social" /></a></li>
                            </ul>
                        </div>
                        <!--end header-top-social-->
                    </div>
                    <!--end header-top-left-col-->
                    <div class="header-top-right-col desktop-lang">
                        <ul class="lang">
                            <li><a href="#">BG</a></li>
                            <li><a href="#">EN</a></li>
                            <li><a href="#">RO</a></li>
                            <li><a href="#">SR</a></li>
                        </ul>
                    </div>

                    <!--end header-top-left-col-->
                    <div class="header-top-right-col mobile-lang">
                        <ul class="lang">
                            <li>
                            <a href="#">Език</a>
                                <ul>
                                <a href="#">BG</a>
                                <li><a href="#">EN</a></li>
                                <li><a href="#">RO</a></li>
                                <li><a href="#">SR</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--end header-top-right-col-->
                </div>
            </div>
            <!--end custom-container-->
        </div>
        <!--edn header-top-->
        <div class="header">
            <div class="header-row">
                <div class="header-left-col">
                    <a href="/" class="logo">
                        <img src="assets/img/Euromaster_Logo_2013.svg" alt="logo" />
                    </a>
                </div>
                <!--end header-left-col-->
                <div class="header-right-col">
                    <?php include('navigation.php') ?>
                    <a href="#" class="search">
                        <span class="icon-search"></span>
                    </a>
                    <a href="#" class="header-btn desktop-btn">
                        <span class="b2b-icon">
                            <?php include('assets/img/b2b-2.svg') ?>
                        </span>
                        B2B портал
                    </a>

                    <div class="hamburger-holder">
                        <span class="hamburger">
                            <span></span>
                        </span>
                    </div>
                </div>
                <!--end header-right-col-->
            </div>
            <!--edn header-row-->
        </div>
        <!--end header-->
    </header>