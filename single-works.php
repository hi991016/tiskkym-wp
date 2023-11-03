<?php 
    get_header(); 
    
    $works = get_field('projects_field');
    $year = $works["year"];
    $gallery = $works['gallery']; 
    $content = $works['content'];
    $body = $content['body'];
    $caption = $content['caption'];
?>

    <!-- @main -->
    <main class="detailpage">
        <!-- top// -->
        <section class="detail">
            <div class="detail__wrapper u-grid">
                <div class="detail__left">
                    <a href="<?= home_url(); ?>" class="back">back</a>
                </div>
                <div class="detail__right">
                    <div class="detail__heading">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <p class="year"><?= $year ?></p>
                    </div>

                    <div class="detail__entry">
                        <?php 
                            if (!empty($gallery)) :
                                foreach ($gallery as $key => $value) :
                        ?>
                        <figure class="detail__img">
                            <img src="<?= $value["url"] ?>" alt="<?php the_title(); ?>" loading="lazy" width="1022"
                                height="1533">
                        </figure>
                        <?php 
                                endforeach;
                            endif;
                        ?>
                    </div>

                    <div class="detail__content">
                        <div class="detail__language">
                            <p class="active" data-switch="typefirst">jp</p>
                            <span>/</span>
                            <p data-switch="typesecond">en</p>
                        </div>

                        <div class="detail__text active" id="switch-typefirst" data-switch-content>
                            <div class="desc jp-fonts">
                                <?= $body["jp"] ?>
                            </div>
                            <div class="caption">
                                <?= $caption["jp"] ?>
                            </div>
                        </div>

                        <div class="detail__text" id="switch-typesecond" data-switch-content>
                            <div class="desc">
                                <?= $body["en"] ?>
                            </div>
                            <div class="caption">
                                <?= $caption["en"] ?>
                            </div>
                        </div>
                    </div>

                    <div class="detail__list">
                        <div class="detail__field">
                            <h2>INSTALLATION VIEWS</h2>
                            <a href="#" class="detail__items">
                                <p>Exhibition Title</p>
                                <p>2023</p>
                                <span class="arrow">→</span>
                            </a>
                            <a href="#" class="detail__items">
                                <p>Exhibition Title</p>
                                <p>2023</p>
                                <span class="arrow">→</span>
                            </a>
                            <a href="#" class="detail__items">
                                <p>Exhibition Title</p>
                                <p>2023</p>
                                <span class="arrow">→</span>
                            </a>
                        </div>

                        <div class="detail__field">
                            <h2>PUBLICATIONS</h2>
                            <a href="#" class="detail__items">
                                <p>Photobook Title</p>
                                <p>2023</p>
                                <span class="arrow">→</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //top -->
    </main>
    <!-- @@main -->

<?php get_footer(); ?>