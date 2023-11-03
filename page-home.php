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

                    <?php
                        $projects_posts1 = array(
                            'post_type' => 'works',
                            'posts_per_page' => -1,
                            'order'             => 'ASC',
                        );

                        $projects_posts = new WP_Query( $projects_posts1 );
                    ?>

                    <div class="top__content grid active" id="switch-typefirst" data-switch-content>
                        <div class="grid__layout u-grid">
                            <?php
                                if( $projects_posts->have_posts() ) :
                                    $i =0;
                                        while( $projects_posts->have_posts() ) :
                                            $projects_posts->the_post();
                                                $works = get_field('projects_field', get_the_ID());
                                                $year = $works["year"];
                                                $thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
                            ?>

                            <a href="<?php the_permalink(); ?>" class="grid__items">
                                <figure>
                                    <img src="<?= $thumbnail; ?>" alt="<?php the_title(); ?>" loading="lazy" width="190"
                                        height="285">

                                    <div class="grid__text">
                                        <span class="title"><?php the_title(); ?><span class="pc-only">,</span></span>
                                        <span class="year"><?= $year ?></span>
                                    </div>
                                </figure>
                            </a>

                            <?php
                                            $i++;
                                        endwhile;
                                    else: echo 'No projects found';
                                endif; wp_reset_postdata();
                            ?>
                        </div>
                    </div>

                    <div class="top__content list" id="switch-typesecond" data-switch-content>
                        <div class="list__layout">

                            <?php
                                if( $projects_posts->have_posts() ) :
                                    $i =0;
                                        while( $projects_posts->have_posts() ) :
                                            $projects_posts->the_post();
                                                $works = get_field('projects_field', get_the_ID());
                                                $year = $works["year"];
                            ?>

                            <div class="list__items u-grid">
                                <span></span>
                                <a class="list__link" href="<?php the_permalink(); ?>">
                                    <h2 class="title"><?php the_title(); ?></h2>
                                    <p class="year"><?= $year ?></p>
                                    <span class="arrow">→</span>
                                </a>
                            </div>

                            <?php
                                            $i++;
                                        endwhile;
                                    else: echo 'No projects found';
                                endif; wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //top -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>