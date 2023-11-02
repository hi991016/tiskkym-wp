<?php get_header(); ?>

    <!-- @main -->
    <main class="homepage">
        <!-- top// -->
        <section class="top">
            <div class="top__wrapper">
                <div class="top__news sp-only">
                    <a href="#">Current</a>
                    <a href="#" target="_blank">New book ｜ Phase Trans</a>
                    <a href="#" target="_blank">Exhibition ｜ Sense Island 2023</a>
                    <a href="#" target="_blank">Talk ｜ Yau Studio</a>
                </div>
                <div class="top__works">
                    <h2>Works</h2>
                    <div class="type">
                        <p class="active" data-switch="typefirst">Grid</p>
                        <p data-switch="typesecond">List</p>
                    </div>
                </div>

                <div class="top__layout">
                    <div class="top__content grid active" id="switch-typefirst" data-switch-content>
                        <div class="grid__layout u-grid">
                            <a href="detail.html" class="grid__items">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/home-5.jpg" alt="TRACES, 2022" loading="lazy" width="190"
                                        height="285">

                                    <div class="grid__text">
                                        <span class="title">TRACES<span class="pc-only">,</span></span>
                                        <span class="year">2022</span>
                                    </div>
                                </figure>
                            </a>
                            <a href="#" class="grid__items">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/home-6.jpg" alt="REVIVE, 2019" loading="lazy" width="190"
                                        height="285">

                                    <div class="grid__text">
                                        <span class="title">REVIVE<span class="pc-only">,</span></span>
                                        <span class="year">2019</span>
                                    </div>
                                </figure>
                            </a>
                            <a href="#" class="grid__items">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/home-7.jpg" alt="POLYSEMIC FUNDUS, 2023" loading="lazy"
                                        width="190" height="285">
                                </figure>
                                <div class="grid__text">
                                    <span class="title">PHOTONS<span class="pc-only">,</span></span>
                                    <span class="year">2015</span>
                                </div>
                            </a>
                            <a href="#" class="grid__items">
                                <figure>
                                    <img src="<?= get_template_directory_uri() ?>/assets/img/home-8.jpg" alt="CIRCULATION, 2013" loading="lazy" width="190"
                                        height="285">

                                    <div class="grid__text">
                                        <span class="title">CIRCULATION<span class="pc-only">,</span></span>
                                        <span class="year">2013</span>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>

                    <div class="top__content list" id="switch-typesecond" data-switch-content>
                        <div class="list__layout">
                            <div class="list__items u-grid">
                                <span></span>
                                <a class="list__link" href="#">
                                    <h2 class="title">POLYSEMIC FUNDUS</h2>
                                    <p class="year">2023</p>
                                    <span class="arrow">→</span>
                                </a>
                            </div>
                            <div class="list__items u-grid">
                                <span></span>
                                <a class="list__link" href="#">
                                    <h2 class="title">REVIVE</h2>
                                    <p class="year">2019</p>
                                    <span class="arrow">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //top -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>