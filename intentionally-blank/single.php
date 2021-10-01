<?php
get_header();
?>
    <style>
        .container {
            margin-top: 10px;
        }
        .fa {
            margin-right: 5px;
        }
        .information-post{
            margin-top: 100px;
        }
        .post-image{
            display: flex;
            justify-content: center;
        }
        .post-image img{
            max-width: 100%;
            max-height: 400px;
        }
    </style>
    <div class="container">

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) :
                the_post();
                $arCategories = get_the_category();
                $sPostThumb = get_the_post_thumbnail_url();
                $iId = get_the_ID();
                $sFileLinks = get_field('file_links', $iId);
                if($sFileLinks){
                    $arFileLinks = explode(" ", $sFileLinks);
                }else{
                    $arFileLinks = [];
                }

                ?>

                <div class="information-post">


                    <div class="single-info-block">
                        <div class="post-image">
                            <img src="<?=$sPostThumb?>" />
                        </div>
                        <h1><?php the_title(); ?></h1>
                        <div class="info-descr-block">
                            <div>
                                <span class="grey-text"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date();?></span>
                            </div>
                            <hr>
                            <div class="download_btns-block">
                                <?php
                                foreach($arFileLinks as $sFileLink): ?>
                                    <a>
                                        <a class="red-btn single-page-btn" href="<?=$sFileLink?>"
                                           target="_blank">Скачать</a><br><br><br>
                                    </a>
                                <?php endforeach;?>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- Текст страницы/записи -->
                <div class="text-post">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>
    </div>
<?php
get_footer();
?>