<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- @meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="TAISUKE KOYAMA">
    <meta name="description"
        content="TAISUKE KOYAMA WEB SITE. News, Portfolio, Installation View, Photo Book, CV, Contact.">
    <meta name="keywords"
        content="小山泰介, 小山, 泰介, 写真家, Taisuke Koyama, TAISUKE, KOYAMA, taisuke koyama projects, Dark Matte, entropix, Rainbow Form, Starry, Thousand Impacts, Melting Rainbows, SANDWICH Textures, Physical Forest, NONAGON PHOTON, in fragments, Rainbow Waves, Circulation, Setouchi Triennale 2013, Photography is Magic!, DOTS, FUNGUS, CRYSTALS, MOONLIGHT, COLLECTED, PHENOMENAwebgl, branding design, development, css, html, react js, scss, gsap, coding, ux/ui design, front-end, web design, web development, phu nguyen, hi991016, creative design, creative dev, art direction, agency, creativ, studio, ux design, storytelling, javascript, animated, typographic, jQuery, responsive">

    <!-- @meta facebook -->
    <meta property="og:locale" content="en">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="TAISUKE KOYAMA">
    <meta property="og:title" content="TAISUKE KOYAMA">
    <meta property="og:description"
        content="TAISUKE KOYAMA WEB SITE. News, Portfolio, Installation View, Photo Book, CV, Contact.">
    <meta property="og:image" content="https://tk.studio1014.jp/">
    <meta property="og:url" content="https://tk.studio1014.jp/">

    <!-- @meta twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="TAISUKE KOYAMA">
    <meta property="twitter:title" content="TAISUKE KOYAMA">
    <meta property="twitter:description"
        content="TAISUKE KOYAMA WEB SITE. News, Portfolio, Installation View, Photo Book, CV, Contact.">
    <meta property="twitter:image" content="https://tk.studio1014.jp/">

    <link rel="canonical" href="https://tk.studio1014.jp/">
    <link rel="icon" href="<?= get_template_directory_uri() ?>/favicon.ico">

    <!-- @master css -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/css/style.min.css?ver=1.0">

    <?php if (is_home() || is_front_page()) : ?>
    <title>TAISUKE KOYAMA</title>
    <?php else : ?>
    <title><?php wp_title(''); ?> ｜ TAISUKE KOYAMA</title>
    <?php endif;  ?>

    <?php wp_head(); ?>
</head>

<body>

    <!-- @header -->
    <header class="c-header">
        <div class="c-header__wrapper">
            <div class="c-header__grid u-grid">
                <div class="c-header__left">
                    <a href="<?= home_url(); ?>">
                        <h1>Koyama Taisuke</h1>
                    </a>
                </div>
                <div class="c-header__works" data-navbar>
                    <div class="menu">
                        <a href="<?= home_url(); ?>" data-nav-link class="<?php echo is_home() || is_front_page() ? "active" : ""; ?>">Works</a>
                        <a href="<?= home_url(); ?>/installation-views" data-nav-link class="<?php echo is_post_type_archive('installation-views') || is_singular('installation-views') ? "active" : ""; ?>">Installation Views</a>
                        <a href="<?= home_url(); ?>/publications" data-nav-link class="<?php echo is_post_type_archive('publications') || is_singular('publications') ? "active" : ""; ?>">Publications</a>
                        <a href="<?= home_url(); ?>/cv" data-nav-link class="<?php echo is_page("cv") ? "active" : ""; ?>">Cv</a>
                    </div>
                    <div class="c-header__bottom">
                        <div class="contact">
                            <a href="mailto:projects@tiskkym.com">Contact</a>
                            <a href="https://www.instagram.com/taisuke_koyama/">Instagram</a>
                        </div>
                        <p>©︎ TAISUKE KOYAMA</p>
                    </div>
                </div>
                <div class="c-header__news pc-only">
                    <a href="<?= home_url(); ?>">Current</a>

                    <?php 
                        $news = get_field('news_field', 10);
                        $i = 0;
                        if (!empty($news)) :
                            foreach ($news as $key => $value) :
                                $text = $value["text"];
                                $link = $value["link"];
                    ?>

                    <a href="<?= $link; ?>" target="_blank"><?= $text; ?></a>

                    <?php 
                                $i++;
                                if($i == 3) break;
                            endforeach;
                        endif;
                    ?> 
                </div>

                <div class="c-header__right" data-layout>
                    <?php if (is_front_page()) :?>
                        <p class="active" data-switch="typefirst">Grid</p>
                        <p data-switch="typesecond">List</p>
                    <?php elseif (is_singular("works")) :?>
                        <a href="<?= home_url(); ?>">Back</a>
                    <?php endif;  ?>  
                </div>
                
                <div class="c-header__icon" data-nav-toggler>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <!-- @@header -->