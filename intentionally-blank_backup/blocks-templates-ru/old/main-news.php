<!-- PAGE ABOUT -->
<section class="page-section" id="news">
    <div class="container">
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa fa-file-text-o fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner">Новости<small></small></span>
        </h1>

        <div class="row post-row">
            <?php

                $news_args = array(
                        'post_type' => array( 'socforum_news' ),
                        'post_status' => 'publish',
                        'posts_per_page'=>'-1',
                        'fields' => 'ids',
                );

                $news = new WP_Query( $news_args );

                $res = '';
                $i = 0;

                foreach( $news->posts as $nid ){
                    if( $i++ > 2 ){
                        $mod = ' hidden';
                    }else{
                        $mod = '';
                    }
                    $title = get_the_title( $nid );
                    $imgurl = get_the_post_thumbnail_url( $nid );
                    $thumb_url = kama_thumb_src(
                        array(
                            'src' => $imgurl,
                            'w' => 730,
                            'h' => 413,
                        )
                    );

                    $descr_short = get_post_meta( $nid, 'descr_short', true);
                    $content = apply_filters('the_content', get_post( $nid )->post_content);
                    $dt = get_the_date( 'j.m.Y', $nid );

                    $res .=
                        "<div class='col-md-4 one-news{$mod}'>
                            <article class='post-wrap' data-animation='fadeInUp' data-animation-delay='500'>
                                <div class='post-media'>
                                    <img src='{$imgurl}' alt=''/>
                                </div>
                                <div class='post-header'>
                                    <div class='post-meta'>
                                        <span class='post-date'>
                                            {$dt}
                                        </span>

                                    </div><h2 class='post-title'><a href='#'>{$title}</a></h2>

                                </div>
                                <div class='post-body'>
                                    <div class='post-excerpt'>
                                        {$descr_short}
                                    </div>
                                </div><br>
                                <div class='post-footer'>
                                    <span class='post-readmore'>
                                        <a href='#' class='btn btn-theme btn-theme-transparent'  data-toggle='modal' data-target='#myModal' data-title='{$title}' data-content='{$content}'>Читать...</a>
                                    </span>
                                </div>
                            </article>
                        </div>";
                }


                echo $res;
            ?>
        </div>

    </div>
<?php
    if($news->post_count > 3){
        echo
            "<div class='text-center margin-top'>
                <a id='all-news' data-animation='flipInY' data-animation-delay='100' href='#' class='btn btn-theme'><i class='fa fa-file'></i> Все новости</a>
            </div>";
    }
?>
</section>
<!-- /PAGE ABOUT -->