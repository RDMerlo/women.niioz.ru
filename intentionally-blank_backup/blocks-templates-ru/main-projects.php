<?php
$sTitle = get_field('title_ru', 977);
$sContent = get_field('content_ru', 977);
$arUpload = wp_upload_dir();

?>
<section class="page-section about-2021" id="projects">
    <div class="container">
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?=$sTitle?><small></small></span>
        </h1>
        <div data-animation="fadeInUp" data-animation-delay="300">
            <div class="row">
                <div class="col-lg-12">
                    <?=$sContent?>
                </div>
            </div>
            <br>

        </div>
    </div>
</section>