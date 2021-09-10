<!-- PAGE SPEAKERS -->
<?php
$sTitle = get_field('title_ru', 1134);

/** Блок текст контент */
function blockTextContent(){
    ?>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <?php
            $sContent = get_field('content_ru', 1134);
            if ($sContent):
                echo $sContent;
            endif;
            ?>
        </div>
    </div>
    <?
}

function blockSpeakers()
{
    $sSpeakersTitle = CFS()->get('speakers_title_ru', 1134);
    $arSpeakers = CFS()->get('speakers_ru', 1134);

    if ($sSpeakersTitle): ?>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="fw-600">
                    <?=$sSpeakersTitle?>
                </div>
            </div>
        </div>
    <?endif;?>

    <br>
    <!--                <div class="panel-body">-->
    <?php
    if ($arSpeakers):

        $intColSpeakers = count($arSpeakers); // Количество спикеров
        $intColRow = ceil($intColSpeakers / 3); // Количество нужных строк
        $intColColumns = 3; // Количество нужных столбцов

        $k = 0; // Индекс текущего элемента в массиве

        // Цикл по строкам
        for ($i = 0; $i < $intColRow && $k < $intColSpeakers; $i++):
            ?>
            <div class="row thumbnails clear">
                <?
                // Цикл по столбцам
                for ($j = 0; $j < $intColColumns && $k < $intColSpeakers; $j++):
                    ?>
                    <div class="col-sm-6 col-md-4 animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="500">
                        <div class="thumbnail no-border no-padding text-center">
                            <div class="circle">
                                <div class="circle-inner">
                                    <div class="media">
                                        <img src="<?=$arSpeakers[$k]['userpic'];?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="caption before-media">
                                <h3 class="caption-title"><?=$arSpeakers[$k]['fullname'];?></h3><br>
                                <p class="caption-category"><?=$arSpeakers[$k]['position'];?></p>
                            </div>
                            <div class="caption"></div>
                        </div>
                    </div>
                    <?
                    $k += 1;
                endfor;
                ?>
            </div>
        <?
        endfor;
    endif;
}
?>

<!-- PAGE SPEAKERS -->

<section class="page-section white-bg" id="healthprofile">
    <section class="page-section light" id="healthprofile">
        <div class="container">
            <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                        class="fa crcle fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                <span data-animation="fadeInUp" data-animation-delay="500" class="title-inner"><?=$sTitle;?><small> </small></span>
            </h1>


            <br>
<!--            --><?// blockTextContent();?>
            <br>
            <!-- Speakers row -->
<!--            --><?// blockSpeakers(); ?>

        </div>
    </section>
    <!-- /PAGE SPEAKERS -->
