<!-- PAGE SPEAKERS -->

<?php
$sTitle = get_field('title_ru', 1125);
?>

<!-- PAGE SPEAKERS -->
<section id="speakers">

<section class="page-section white-bg">
    <section class="page-section" >
        <div class="container">
            <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                            class="fa crcle fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                <span data-animation="fadeInUp" data-animation-delay="500" class="title-inner"><?=$sTitle;?><small> </small></span>
            </h1>

            <br>
            <!-- Speakers row -->
            <? blockSpeakers(1125); ?>

        </div>
    </section>
</section>
    <!-- /PAGE SPEAKERS -->
