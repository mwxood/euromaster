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
    <section class="inner-section  news-inner-section news-section">

        <div class="custom-container">
            <div class="custom-inner-container">
                <div class="one-article-holder">
                    <span class="one-article-img">
                        <img src="assets/img/news-inner.jpg" alt="ärticle" />
                        <span class="one-hover-article-img">
                            <?php include('assets/img/logo-tmp-white.svg') ?>
                        </span>
                    </span>

                    <div class="social-content">
                        <span class="social-title">
                            Сподели:
                        </span>
                        <ul class="social">
                            <li>
                                <a href="#">
                                    <?php include('assets/img/facebook.svg') ?>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <?php include('assets/img/linkedin.svg') ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="breadcrumbs">
                    <li>
                        <a href="#">Начало</a>
                    </li>
                    <li>
                        <a href="#">Новини</a>
                    </li>
                    <li>
                        Нова статоя за TOPMASTER през годините
                    </li>
                </ul>
                <h1>Нова статия за Topmaster през годините</h1>
                <span class="article-date">23.02.2021</span>

                <div class="article-text">
                    <p>Ut rhoncus, enim vitae malesuada porta, leo ipsum vulputate justo, venenatis vehicula augue est id lectus. Nunc diam ligula, imperdiet quis quam ac, interdum laoreet ipsum. Aliquam euismod metus vel neque euismod euismod. Nam pretium ipsum id metus efficitur porta. Sed magna nibh, volutpat nec nisl sed, blandit sodales magna. Integer sem neque, facilisis non tempor eu, commodo sit amet ligula. Vestibulum nec neque sem.</p>
                    <p>Ut rhoncus, enim vitae malesuada porta, leo ipsum vulputate justo, venenatis vehicula augue est id lectus. Nunc diam ligula, imperdiet quis quam ac, interdum laoreet ipsum. Aliquam euismod metus vel neque euismod euismod. Nam pretium ipsum id metus efficitur porta. Sed magna nibh, volutpat nec nisl sed, blandit sodales magna. Integer sem neque, facilisis non tempor eu, commodo sit amet ligula. Vestibulum nec neque sem.</p>
                </div>

                <div class="news-inner-img">
                    <ul class="gallery">
                        <li>
                            <a class="gallery-img" href="assets/img/news-inner-small.jpg">
                                <img src="assets/img/news-inner-small.jpg" alt="article">
                            </a>
                        </li>

                        <li>
                            <a class="gallery-img" href="assets/img/news-inner-small.jpg">
                                <img src="assets/img/news-inner-small.jpg" alt="article">
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="article-text">
                    <p>Ut laoreet, turpis a tincidunt commodo, justo augue varius dolor, auctor pretium dolor enim ut urna. In lobortis finibus dolor, eu accumsan nisl scelerisque sed. Quisque ornare dui nibh. Nunc quis purus vel orci scelerisque viverra vel vitae ante. Proin sagittis nec nunc ut efficitur. Cras convallis massa id erat egestas, non consectetur arcu porttitor. Nulla non tortor aliquet, elementum est sit amet, varius ipsum. Aenean quis libero nec nibh eleifend molestie vel ut nisl. Pellentesque pulvinar, lorem nec porta pretium, nulla mi aliquam orci, vitae placerat erat justo in sem.

                    </p>
                </div>




            </div>

            <h2 class="read-more">Почети още</h2>
            <div class="row">
                <div class="news col-sm-6 col-md-4">
                    <a href="#" class="news-img">
                        <img src="assets/img/new-img.jpg" alt="news">
                        <span class="date">23.02.2021</span>
                        <span class="hover">
                            <span class="button-hover">Прочети</span>
                        </span>
                    </a>
                    <a href="#" class="news-text">
                        Lorem Ipsum is simply dummy text of the printingand typesetting
                    </a>
                </div>

                <div class="news col-sm-6 col-md-4">
                    <a href="#" class="news-img">
                        <img src="assets/img/new-img.jpg" alt="news">
                        <span class="date">23.02.2021</span>
                        <span class="hover">
                            <span class="button-hover">Прочети</span>
                        </span>
                    </a>
                    <a href="#" class="news-text">
                        Lorem Ipsum is simply dummy text of the printingand typesetting
                    </a>
                </div>

                <div class="news col-sm-6 col-md-4">
                    <a href="#" class="news-img">
                        <img src="assets/img/new-img.jpg" alt="news">
                        <span class="date">23.02.2021</span>
                        <span class="hover">
                            <span class="button-hover">Прочети</span>
                        </span>
                    </a>
                    <a href="#" class="news-text">
                        Lorem Ipsum is simply dummy text of the printingand typesetting
                    </a>
                </div>

                <div class="news col-sm-6 col-md-4">
                    <a href="#" class="news-img">
                        <img src="assets/img/new-img.jpg" alt="news">
                        <span class="date">23.02.2021</span>
                        <span class="hover">
                            <span class="button-hover">Прочети</span>
                        </span>
                    </a>
                    <a href="#" class="news-text">
                        Lorem Ipsum is simply dummy text of the printingand typesetting
                    </a>
                </div>

            </div>
        </div>

    </section>
</main>
<?php include('includes/footer.php') ?>