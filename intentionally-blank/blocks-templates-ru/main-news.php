<?php
$sTitle = get_field('title_ru', 1125);
?>
<div class="container">
    <style>
        .news-item {
            display: flex;
            width: 100%;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 20px;
            flex-wrap: nowrap;
        }

        .image img {
            float: left;
            width: 100%;
        }

        .content-block {
            padding-left: 15px;
            flex-grow: 5;
        }

        .grey-text {
            padding-top: 10px;
        }

        .content-block .fa {
            margin-right: 5px;
        }

        @media (max-width: 1000px) {
            .content-block {
                padding-left: 0px;
            }

            .image {
                display: flex;
                flex: 1;
                justify-content: center;
            }

            .image img {
                width: 90%;
                /* padding-left: 15px; */
            }

            /* это будет показано при разрешении монитора до 930 пикселей */
            .news-item {
                display: flex;
                width: 100%;
                justify-content: flex-start;
                align-items: center;
                margin-bottom: 20px;
                flex-wrap: wrap;
            }
        }

        .blue-text {
            color: #55b4e6;
            font-weight: 600;
        }

        @media (min-width: 1000px) {

            /* это будет показано при разрешении монитора до 930 пикселей */
            .image {
                flex: 1;
            }

            .content-block {
                flex: 3;
                /* margin-left: 15px; */
            }
        }
    </style>
    <?php
    $result = wp_get_recent_posts([
        'numberposts' => 5,
        'offset' => 0,
        'category' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'include' => '',
        'exclude' => '',
        'meta_key' => '',
        'meta_value' => '',
        'post_type' => 'post',
        'post_status' => 'draft, publish, future, pending, private',
        'suppress_filters' => true,
    ], OBJECT);
    foreach ($result as $post):
        setup_postdata($post);
        $sPostThumb = get_the_post_thumbnail_url(get_the_ID());
        $sTitle = $post->post_title;
        $sExcerpt = get_the_excerpt($post->id);
        $sUrl = $post->guid;
        $sDate = $post->post_date;
        $sDate = explode(" ", $sDate);
        $sDate = $sDate[0];
        $arCategories = get_the_category($post->id);
        if ($arCategories[0]->name !== 'Для блока новости') {
            continue;
        }
        ?>
        <div class="news-item">
            <div class="image">
                <a href="<?= $sUrl ?>">
                    <img src="<?= $sPostThumb ?>"/>
                </a>
            </div>
            <div class="content-block">
                <div>
                    <span class="grey-text"><i class="fa fa-calendar" aria-hidden="true"></i><?= $sDate ?></span>
                </div>
                <a>
                    <h3><strong><?php the_title(); ?></strong>
                    </h3>
                </a>
                <p><?= $sExcerpt ?><br>
                    <a class="blue-text" href="<?= $sUrl ?>">Читать полностью</a>
                </p>
            </div>
        </div>

        <?php
        wp_reset_postdata();
    endforeach;
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@600&display=swap');
        .news{
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }
        .news .news__item{
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }
        .news .news__item .blue-dash{
            width: 30px;
            height: 5px;
            background-color: #55b4e6;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .news .news__item .news-title{
            color: #000000;
            font-size: 18px;
            text-align: left;
            font-family: 'Roboto', sans-serif;
        }
        .news .news__item .news-title:hover{
            color: #55b4e6;
        }
        .news .news__item .news-text{
            font-size: 17px;
            text-align: left;
            margin-top: 10px;
        }
        .news .news__item .news-content{
            height: 200px;
        }
    </style>
    <div class="news">
        <?php
        if (is_user_logged_in()) {
            $result = wp_get_recent_posts([
                'numberposts' => 100,
                'offset' => 0,
                'category' => 0,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'include' => '',
                'exclude' => '',
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'post_status' => 'draft, publish, future, pending, private',
                'suppress_filters' => true,
            ], OBJECT);
            foreach ($result as $post):
                setup_postdata($post);
                $sPostThumb = get_the_post_thumbnail_url(get_the_ID());
                $sTitle = $post->post_title;
                $sExcerpt = get_the_excerpt($post->id);
                $sUrl = $post->guid;
                $sDate = $post->post_date;
                $sDate = explode(" ", $sDate);
                $sDate = $sDate[0];
                $arCategories = get_the_category($post->id);
                if ($arCategories[0]->name !== 'Для блока новости') {
                    continue;
                }
                ?>
                <div class="news__item col-lg-4 col-md-2 col-12">
                        <div class="image">
                            <a href="<?= $sUrl ?>">
                                <img src="<?= $sPostThumb ?>"/>
                            </a>
                        </div>
                        <div class="blue-dash"></div>
                        <div class="col-12 news-content">
                            <a class="news-title" href="<?= $sUrl ?>">
                                <strong><?php the_title(); ?></strong>
                            </a>
                            <p class="news-text"><?= $sExcerpt ?></p>
                        </div>
                </div>

                <?php
                wp_reset_postdata();
            endforeach;
        }
        ?>
    </div>
    <!--        <a type="button" class="btn btn-theme btn-block btn-primary" href="/all-news">Все новости</a>-->

</div>
