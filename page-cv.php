<?php 
    get_header(); 

    $cv = get_field('cv_field', 12);
    $name = $cv['name'];
    $profile = $cv['profile'];
    $description_cv = $cv['description'];
?>

    <!-- @main -->
    <main class="cvpage">
        <!-- top// -->
        <section class="cv">
            <div class="cv__wrapper u-grid">
                <div class="cv__left"></div>
                <div class="cv__right">
                    <h2 class="cv__heading sp-only">cv</h2>

                    <div class="cv__lang">
                        <p class="active" data-switch="typefirst">jp</p>
                        <span>/</span>
                        <p data-switch="typesecond">en</p>
                    </div>

                    <div class="cv__content lang-jp active" id="switch-typefirst" data-switch-content>
                        <h2 class="cv__title"><?= $name['jp']; ?></h2>
                        <div class="cv__profile">
                            <?= $profile['jp']; ?>
                        </div>

                        <div class="cv__customs">
                            <?php 
                                if (!empty($description_cv)) :
                                    foreach ($description_cv as $key => $value) :
                            ?>
                            <div class="cv__fields">
                                <h3 class="title"><?= $value["title"]["jp"]; ?></h3>
                                    <?php 
                                        if (!empty($value["group"])) :
                                            foreach ($value["group"] as $key => $value) :
                                    ?>
                                    <div class="cv__info">
                                        <p class="year"><?= $value["year"]; ?></p>

                                        <div class="cv__group">
                                            <?php 
                                                if (!empty($value["content"])) :
                                                    foreach ($value["content"] as $key => $value) :
                                            ?>

                                            <p><?= $value["text_jp"]; ?></p>

                                            <?php   
                                                    endforeach;
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                    <?php   
                                            endforeach;
                                        endif;
                                    ?>
                            </div>
                            <?php   
                                    endforeach;
                                endif;
                            ?>
                        </div>
                    </div>

                    <div class="cv__content lang-en" id="switch-typesecond" data-switch-content>
                        <h2 class="cv__title"><?= $name['en']; ?></h2>
                        <div class="cv__profile">
                            <?= $profile['en']; ?>
                        </div>

                        <div class="cv__customs">
                            <?php 
                                if (!empty($description_cv)) :
                                    foreach ($description_cv as $key => $value) :
                            ?>
                            <div class="cv__fields">
                                <h3 class="title"><?= $value["title"]["en"]; ?></h3>
                                    <?php 
                                        if (!empty($value["group"])) :
                                            foreach ($value["group"] as $key => $value) :
                                    ?>
                                    <div class="cv__info">
                                        <p class="year"><?= $value["year"]; ?></p>

                                        <div class="cv__group">
                                            <?php 
                                                if (!empty($value["content"])) :
                                                    foreach ($value["content"] as $key => $value) :
                                            ?>

                                            <p><?= $value["text_en"]; ?></p>

                                            <?php   
                                                    endforeach;
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                    <?php   
                                            endforeach;
                                        endif;
                                    ?>
                            </div>
                            <?php   
                                    endforeach;
                                endif;
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

