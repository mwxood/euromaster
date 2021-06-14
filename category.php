<?php include('includes/header.php'); ?>
<main>

    <div class="search-form-holder">
        <form action="" method="get">
            <span class="search-icon">
                <span class="icon-search"></span>
            </span>
            <div class="form-group">
                <input type="text" class="search-input" placeholder="Търсете по име, модел или артикулен номер" />
                <input type="submit" class="search-btn" value="Търсене">
            </div>
            <!--end form-group-->
        </form>
    </div>
    <!--end search-form-holder-->
    <section class="inner-section category-section">
        <div class="custom-container">
            <ul class="breadcrumbs">
                <li><a href="/">Начало</a></li>
                <li><a href="category.php">Продукти</a></li>
                <li><a href="category.php">Продукти</a></li>
                <li><a href="category.php">Електроинструменти</a></li>
                <li><a href="category.php">Ударно-пробивни машини</a></li>
                <li>Бормашини</li>
            </ul>
        </div>
        <div class="category">
            <div class="custom-container">
                <div class="category-filters-holder">
                    <h1>Бормашини</h1>
                    <form action="https://www.google.bg/" method="get" class="filters">
                        <div class="filter">
                            <span class="filter-label">Подреждане</span>
                            <div class="custom-select filter-select">
                                <label>
                                    <select name="name" class="filter" id="brand">
                                        <option selected value="Име (възх.)">Име (възх.)</option>
                                        <option value="Име (низх.)">Име (низх.)</option>
                                    </select>
                                </label>
                            </div>
                            <!--end custom-select-->
                        </div>
                        <!--end filter-->

                        <div class="filter">
                            <span class="filter-label">Показване</span>
                            <div class="custom-select filter-select">
                                <label>
                                    <select name="number" class="filter" id="brand">
                                        <option selected value="20">20</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </label>
                            </div>
                            <!--end custom-select-->
                        </div>
                        <!--end filter-->
                    </form>
                    <!--end filters-->
                </div>
                <!--end category-filters-holder-->
            </div>
            <!--end custom-container-->
        </div>
        <!--end category-->
        <span class="category-mobile-btn">Категория</span>
        <div class="custom-container">
            <div class="category-containers">
                <aside class="category-sidebar">
                    <span class="sidebar-title">Продукти</span>
                    <div class="category-nav">
                        <span class="sidebar-title"> Електроинструменти </span>
                        <div class="category-nav-inner">
                            <ul class="category-navigation">
                                <li>
                                    <a href="#">Ударно-пробивни машини</a>
                                    <ul>
                                        <li><a href="#">Бормашини</a></li>
                                        <li><a href="#">Винтоверти</a></li>
                                        <li><a href="#">Акумулаторни отвертки</a></li>
                                        <li><a href="#">Перфоратори</a></li>
                                        <li><a href="#">Бормашини</a></li>
                                        <li><a href="#">Къртачи</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="#">Шлайфащи машини</a>
                                    <ul>
                                        <li><a href="#">test</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Режещи машини</a>
                                    <ul>
                                        <li><a href="#">test</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Строителна техника</a>
                                    <ul>
                                        <li><a href="#">test</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="#">Електрически такери</a>
                                    <ul>
                                        <li><a href="#">test</a></li>
                                    </ul>
                                </li>


                                <li>
                                    <a href="#">Заваряване и запояване</a>
                                    <ul>
                                        <li><a href="#">test</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Почистваща техника </a>
                                    <ul>
                                        <li><a href="#">test</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="#">Специализирани машини </a>
                                    <ul>
                                        <li><a href="#">test</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <!--end category-nav-inner-->
                    </div>
                    <!--end category-nav-->

                    <div class="brand-category">
                        <span class="sidebar-title">Марка </span>
                        <form action="https://www.google.com/" method="get" class="category-filter">
                            <ul class="category-list">
                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-raider_pro.svg') ?>
                                        </span>
                                    </label>

                                </li>
                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-raider_power_tools.svg') ?>
                                        </span>
                                    </label>

                                </li>
                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-raider_Accessories.svg') ?>
                                        </span>
                                    </label>

                                </li>
                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-tmp.svg') ?>
                                        </span>
                                    </label>

                                </li>
                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-gadget.svg') ?>
                                        </span>
                                    </label>

                                </li>
                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-makalon.svg') ?>
                                        </span>
                                    </label>

                                </li>

                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-top strong.svg') ?>
                                        </span>
                                    </label>

                                </li>

                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-topchrome.svg') ?>
                                        </span>
                                    </label>

                                </li>

                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="brand" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="category-btrand-img list-item">
                                            <?php include('assets/img/logo-garden.svg') ?>
                                        </span>
                                    </label>

                                </li>
                            </ul>
                        </form>
                    </div>
                    <!--end brand-category-->

                    <div class="type-category">
                        <span class="sidebar-title">Тип захранване </span>
                        <form action="https://www.yandex.ru/" method="get" class="category-filter">
                            <ul class="category-list">
                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="type" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Акумулаторно</span>
                                    </label>
                                </li>

                                <li>
                                    <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="type" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Мрежово</span>
                                    </label>

                                </li>
                            </ul>
                        </form>
                    </div>
                    <!--end type-category-->

                    <div class="category-change">
                        <span class="sidebar-title"> Макс. въртящ момент, Nm </span>

                        <div class="slider-range">
                            <input type="range" class="left-slide range-slider" min="0" max="100" value="8">
                            <input type="range" class="right-slide range-slider" min="0" max="100" value="90">
                            <div class="slider-ui">
                                <div class="track"></div>
                                <div class="range"></div>
                                <div class="thumb left-thumb"></div>
                                <div class="thumb right-thumb"></div>
                                <div class="left-count">0</div>
                                <div class="right-count">0</div>
                            </div>
                        </div>
                        <!--end slider-range-->
                        <form action="" method="get">
                            <div class="category-inputs">
                                <label>
                                    <input class="input-bg" type="text" placeholder="От">
                                </label>

                                <label>
                                    <input class="input-bg" type="text" placeholder="До">
                                </label>

                                <button class="submit-btn" type="submit">
                                    <span class="submit-arrow">
                                        <?php include('assets/img/right-arrow-white.svg') ?>
                                    </span>
                                </button>
                            </div>
                            <!--end category-inputs-->
                        </form>


                    </div>
                    <!--end category-change-->

                    <div class="category-change">
                        <span class="sidebar-title"> Скорости</span>

                        <div class="slider-range">
                            <input type="range" class="left-slide range-slider" min="0" max="100" value="2">
                            <input type="range" class="right-slide range-slider" min="0" max="100" value="12">
                            <div class="slider-ui">
                                <div class="track"></div>
                                <div class="range"></div>
                                <div class="thumb left-thumb"></div>
                                <div class="thumb right-thumb"></div>
                                <div class="left-count">0</div>
                                <div class="right-count">0</div>
                            </div>
                        </div>
                        <!--end slider-range-->
                        <form action="" method="get">
                            <div class="category-inputs">
                                <label>
                                    <input class="input-bg" type="text" placeholder="От">
                                </label>

                                <label>
                                    <input class="input-bg" type="text" placeholder="До">
                                </label>

                                <button class="submit-btn" type="submit">
                                    <span class="submit-arrow">
                                        <?php include('assets/img/right-arrow-white.svg') ?>
                                    </span>
                                </button>
                            </div>
                            <!--end category-inputs-->
                        </form>


                    </div>
                    <!--end category-change-->
                </aside>
                <div class="category-container">
                    <div class="products-holder">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-1.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-2.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-3.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-4.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-5.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-7.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->


                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-8.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-9.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-10.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-11.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-12.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-13.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-14.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-1.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-2.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                            <div class="col-sm-6 col-md-3">
                                <div class="product-inner">
                                        <div class="category-text">
                                        <a href="product-details.php" class="prod-image">
                                        <img src="assets/img/prod-3.jpg" alt="product">
                                    </a>
                                    <div class="product-description">
                                        <span class="article-number">139201</span>
                                        <a href="product-details.php" class="prod-title">
                                        Стойка за бормашина RD Raider Power Tools
                                        </a>
                                        <label class="custom-checkbox category-filter">
                                        <input type="checkbox" name="compare" class="checkbox">
                                        <span class="checkmark"></span>
                                        <span class="list-item">Сравни</span>
                                    </label>
                                        </div>
                                    </div>
                                    <!--end product-description-->
                                    <a href="product-details.php" class="category-link">
                                        
                                        Разгледай

                                        <span class="category-link-arrow">
                                            <?php include('assets/img/right-arrow.svg') ?>
                                        </span>
                                    </a>
                                </div>
                                <!--end product-inner-->
                            </div>
                            <!--end col-md-3-->

                        </div>
                        <!--end row-->
                    </div>
                    <!--end products-holder-->
                    
                    <ul class="pagination"> 
                        <li>
                            <a class="active" href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#">6</a>
                        </li>
                    </ul>
                </div>
                <!--end category-container-->
               
            </div>
            <!--end category-containers-->
        </div>
        <!--end custom-container-->
    </section>
</main>
<?php include('includes/footer.php') ?>