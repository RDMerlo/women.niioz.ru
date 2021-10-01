<!-- PAGE BUSINESS PROGRAM -->
<?php

?>

<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">-->
<!--    Запустить модальное окно-->
<!--</button>-->





<section class="page-section" id="businessprogram"  style="padding-top: 60px;">
    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>

                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
<!--                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
<!--                        <button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div>
            </div>
        </div>


        <h1 class="section-title">
            <?$sTitle = get_field('title_ru', 1734);?>
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                        class="fa crcle fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
            <span data-animation="fadeInUp" data-animation-delay="500"
                  class="title-inner"><?=$sTitle;?><small> </small></span>
        </h1>
        <br>
        <div data-animation="fadeInUp" data-animation-delay="300">

        <!-- Блок семинаров -->
            <?
            $arSeminars = CFS()->get('seminars', 1734);
            if ($arSeminars):
                foreach($arSeminars as $arSeminar):
                    ?>
                    <div class="media-body">
                        <div class="post-header">
                            <div class="post-meta row">
                                <div class="col-lg-10">
                                    <h1 class="section-title">
                                        <span class="post-date"><i class="fa fa-clock-o"></i><?=$arSeminar['seminar_text_time'];?></span>
                                    </h1>
                                </div>
                                <div class = "col-lg-2">
<!--                                    <a href="--><?//=$arSeminar['broadcast_link'];?><!--" target="_blank" style="text-align: center;">-->
<!--                                    <a href="#openModal">-->
<!--                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">Открыть</button>-->
<!--                                    <button type="button" class="btn btn-theme btn-primary" data-toggle="modal" data-target="#exampleModalCenter">    -->
                                    <button type="button" class="btn btn-theme btn-block btn-primary" data-toggle="modal" data-target="#exampleModalCenter-1">Трансляция</button>
<!--                                    </a>-->


<!--                                    </a>-->
                                </div>


                                <br>

                                <div class = "col-lg-12">
                                    <h1 class="section-title"><br><?=$arSeminar['seminar_title'];?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <!-- Модальное окно -->
                    <!-- Button trigger modal -->


                    <div class="row">
                        <div class="col-lg-12">
                            <p>
                                <?php
                                $sContent = $arSeminar['seminar_content'];
                                //$sContent = get_field('seminar_content', 1734);
                                $sContent = str_replace( "<p></p>", "<br />", $sContent );
                                //                var_dump(htmlspecialchars($sContent));
                                if ($sContent):
                                    echo $sContent;
                                endif;
                                ?>
                            </p>
                        </div>
                        <br>
                        <br>
                        <?
                        /* Участники */
                        $arParticipants = $arSeminar['seminar_participants'];
                        if ($arParticipants):

                            $intColParticipants = count($arParticipants); // Количество спикеров
                            $intColRow = ceil($intColParticipants / 3); // Количество нужных строк
                            $intColColumns = 3; // Количество нужных столбцов

                            $k = 0; // Индекс текущего элемента в массиве

                            // Цикл по строкам
                            for ($i = 0; $i < $intColRow && $k < $intColParticipants; $i++):
                                ?>
                                <div class="row thumbnails clear">
                                    <?
                                    // Цикл по столбцам
                                    for ($j = 0; $j < $intColColumns && $k < $intColParticipants; $j++):
                                        ?>
                                        <div class="col-sm-6 col-md-4 animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="500">
                                            <div class="thumbnail no-border no-padding text-center">
                                                <div class="circle">
                                                    <div class="circle-inner">
                                                        <div class="media">
                                                            <img src="<?=$arParticipants[$k]['userpic'];?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="caption before-media">
                                                    <h3 class="caption-title"><?=$arParticipants[$k]['fullname'];?></h3><br>
                                                    <p class="caption-category"><?=$arParticipants[$k]['position'];?></p>
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
                        ?>
                    </div>
                    <?
                endforeach;
            endif;
             //$sBroadcastLink
            ?>
        </div>
    </div>
</section>

<!-- PAGE BUSINESS PROGRAM -->
