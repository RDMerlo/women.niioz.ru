<?php
get_header();
?>
    <section class="page-section bg-white" id="news" style="margin-top: 130px">
        <div class="container">
            <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                            class="fa crcle fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                <span data-animation="fadeInUp" data-animation-delay="500"
                      class="title-inner">Все новости<small> </small></span>
            </h1>
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
                    .image{
                        display: flex;
                        flex: 1;
                        justify-content: center;
                    }
                    .image img{
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
                .blue-text{
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
            $result = wp_get_recent_posts( [
                'offset'           => 0,
                'category'         => 0,
                'orderby'          => 'post_date',
                'order'            => 'DESC',
                'include'          => '',
                'exclude'          => '',
                'meta_key'         => '',
                'meta_value'       => '',
                'post_type'        => 'post',
                'post_status'      => 'draft, publish, future, pending, private',
                'suppress_filters' => true,
            ], OBJECT );
            foreach( $result as $post ):
                setup_postdata( $post );
                $sPostThumb = get_the_post_thumbnail_url(get_the_ID());
                $sTitle = $post->post_title;
                $sExcerpt = get_the_excerpt($post->id);
                $sUrl = $post->guid;
                $sDate = $post->post_date;
                $sDate = explode(" ", $sDate);
                $sDate = $sDate[0];
                $arCategories = get_the_category($post->id);
                if($arCategories[0]->name !== 'Для блока новости'){
                    continue;
                }
                ?>
                <div class="news-item">
                    <div class="image">
                        <a href="<?=$sUrl?>">
                            <img src="<?=$sPostThumb?>" />
                        </a>
                    </div>
                    <div class="content-block">
                        <div>
                            <span class="grey-text"><i class="fa fa-calendar" aria-hidden="true"></i><?=$sDate?></span>
                        </div>
                        <a>
                            <h3><strong><?php the_title();?></strong>
                            </h3>
                        </a>
                        <p><?=$sExcerpt?><br>
                            <a class="blue-text" href="<?=$sUrl?>">Читать полностью</a>
                        </p>
                    </div>
                </div>

                <?php
                wp_reset_postdata();
            endforeach;
            ?>
        </div>
    </section>
<?php
get_footer();
?>
