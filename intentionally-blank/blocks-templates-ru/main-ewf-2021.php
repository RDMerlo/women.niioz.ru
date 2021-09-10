<!-- PAGE EWF -->

<?php
$sTitle = get_field('title_ru', 1217);

?>

<section class="page-section white-bg about-2021" id="ewf">
<!--    <section class="page-section light">-->
        <div class="container">
            <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                        class="fa crcle fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
                <span data-animation="fadeInUp" data-animation-delay="500" class="title-inner"><?=$sTitle;?><small> </small></span>
            </h1>
            <div data-animation="fadeInUp" data-animation-delay="300">
                <!-- Блок текст контент -->
                <? blockTextContent(1217); ?>
<!--                --><?// blockHidden(1231); ?>

                <?
                $sContent = get_field('content_ru', 1231);
                $sTitle = get_field('title_ru', 1231);
                ?>
                <div class="row margin-top-20">
                    <div class="col-md-12">
                        <button class="btn btn-theme btn-block btn-uslovia "><?=$sTitle;?></button>
                        <div class="uslovia-uchastia margin-top-20">
                            <div>
                                <div class="blockHidden">
                                    <div class = "documentFrontTable">
                                        <a href="<?=CFS()->get( 'file_ru', 1231 );?>" target="_blank">Скачать программу</a>
                                    </div>
                                    <?=$sContent;?>
                                    <br>
                                    <button class="btn btn-theme btn-block btn-uslovia ">Скрыть</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
<!--                --><?// blockTextNextTable(1231); ?>
                <br>

                <!-- Speakers row -->
<!--                --><?// blockSpeakers(1217); ?>
            </div>
        </div>
<!--    </section>-->
</section>
<!-- /PAGE EWF -->
<?php
