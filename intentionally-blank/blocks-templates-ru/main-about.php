<!-- PAGE ABOUT -->
<?php

    $arUpload = wp_upload_dir();
?>

<!--<section class="page-section about-2021" id="about" style="padding-top: 60px;">-->
<section id="about">
    <br>
    <br>
    <section class="page-section about-2021" style="padding-top: 60px;">
        <div class="container">
            <!--    Блоки    -->
            <div data-animation="fadeInUp" data-animation-delay="300">
                <!-- Блок текст контент -->
                <?
                $sTitle = get_field('title_ru', 909);
                if ($sTitle):
                    ?>
                    <h1 class="section-title">
                        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></span>
                        <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?=$sTitle?><small></small></span>
                    </h1>
                <?
                endif;
                ?>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            <?php
                            $sContent = get_field('content_ru', 909);
                            $sContent = str_replace( "<p></p>", "<br />", $sContent );
                            //                var_dump(htmlspecialchars($sContent));
                            if ($sContent):
                                echo $sContent;
                            endif;
                            ?>
                        </p>

                    </div>
                </div>
                <?

                ?>
                <!-- Блок Направления программ(список) -->
                <? blockDirectionsPrograms(909); ?>
                <!-- Блок Текст после списка программ  -->
                <? blockTextNextProgram(909); ?>
                <!-- Блок Модули  -->
                <? blockModules(909); ?>
                <!-- Блок Текст после модулей -->
                <? blockTextNextModules(909);?>
                <!-- Блок ВЭФ -->
                <? blockTextContent(1677); ?>

                <br><br>
                <div class="text-center">
                    <p>
                        <iframe width="68%" height="420px" src="https://www.youtube.com/embed/cVXYVzStcdg"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen>
                        </iframe>
                    </p>
                </div>
                <br><br>
                <!-- Блок Участники ВЭФ  -->
                <? blockSpeakers(1677); ?>



            </div>
        </div>
        </div>
    </section>
</section>

<!--<div class="popup-fade">-->
<!--    <a class="popup-close" href="#">×</a>-->
<!--    <div class="popup">-->
<!---->
<!--    </div>-->
<!--</div>-->
<!-- /PAGE ABOUT -->