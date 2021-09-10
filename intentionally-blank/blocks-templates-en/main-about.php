<!-- PAGE ABOUT -->
<?php
$sTitle = get_field('title_en', 909);
$arUpload = wp_upload_dir();
?>
<section class="page-section" id="about">
    <div class="container">
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                            class="fa crcle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?= $sTitle ?></span>
        </h1>

        <div data-animation="fadeInUp" data-animation-delay="300">
            <div class="row">
                <div class="col-lg-8">
                    <p class="margin-bottom-unset">
                        On November 23, 2021, the third forum "Sociology of Health:
                        Lessons from a Pandemic and Outlines of
                        the Future of Health Care" will be held in Moscow in online and offline formats.
                    </p>
                    <br>
                    <p class="margin-bottom-unset">
                        For the third time, the event will become the most active
                        discussion platform, which will bring together experts in the field of medical and
                        social sciences to discuss the most pressing practical issues of healthcare development.
                    </p>
                    <br>
                    <p class="margin-bottom-unset">
                        The pandemic has clearly demonstrated that at the heart of the health care system
                        is the individual, be it a medical specialist or an ordinary citizen. The dedication of d
                        octors and medical personnel has largely helped to smooth out the devastating consequences
                        of the new coronavirus
                        infection, and how quickly we can cope with it depends on the consciousness and trust
                        of citizens.
                    </p>
                    <br>
                    <p class="margin-bottom-unset">
                        In a pandemic, we also see shifts in the health care
                        system itself, behind which we can consider the systemic contours
                        of its future. Today we can observe the acceleration of the introduction
                        of digital technologies in management processes, new approaches to work with
                        personnel and the population. We see changes in the perception of the healthcare
                        system, changes in the image of a specialist in the public mind.
                        All this requires reassessment and new solutions.
                    </p>
                    <br>
                    <p class="margin-bottom-unset">
                        Experts in the field of public opinion and analysis of behavioral
                        models in Russia and abroad are invited to participate in the forum - scientists,
                        healthcare leaders, applied sociologists (polsters), specialists in the field of big data
                        and other specialists
                        from the public, private and non-profit sectors.
                    </p>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="flex about-images-2021">
                        <?php
                        $arImages = CFS()->get('images', 909);
                        foreach($arImages as $arImage):?>
                            <div class="img-about-2021">
                                <img src="<?=$arImage['image']?>" alt="">
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <br>
            <div class="row margin-bottom-10 panel panel-default">
                <div class="col-lg-12 panel-heading">
                    <div class="fw-600">
                        <?=CFS()->get('programs_title_en', 909)?>
                    </div>
                </div>
                <div class="col-lg-12 panel-body">
                <?php
                $arSections = CFS()->get('sections_en', 909);
                foreach($arSections as $arSection):
                    ?>
                    <p>
                    <div class="fw-600">
                        <div class="circle-row">
                            <div class="circle-point"></div>
                            <div class="circle-text">
                                <?=$arSection['title'];?>
                            </div>
                        </div>
                    </div>
                    </p>
                    <br>
                <?php endforeach;?>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <?=CFS()->get('text_after_program_en', 909)?>
<!--                    <div>-->
<!--                        <p>-->
<!--                            It is also planned to launch a competition for young professionals aimed at-->
<!--                            identifying the best practices for researching / positioning the image of a medical-->
<!--                            specialist.-->
<!--                        </p>-->
<!--                    </div>-->
<!--                    <br>-->
<!--                    <div>The competition will be announced as soon as possible. Stay tuned for updates on the-->
<!--                        site!-->
<!--                    </div>-->
<!--                    <br>-->
<!--                    <div>-->
<!--                        You can familiarize yourself with the materials of the 2019 forum at the <a-->
<!--                                href="en/en-forum-2019/">link</a>.-->
<!--                    </div>-->
<!--                    <br>-->
<!--                    <div>-->
<!--                        You can familiarize yourself with the materials of the 2020 forum at the <a-->
<!--                                href="en/en-forum-2020/">link</a>.-->
<!--                    </div>-->
                </div>
            </div>
        </div>

    </div>
</section>
<div class="popup-fade">
    <div class="popup">
        <a class="popup-close" href="#">×</a>
    </div>
</div>
<!-- /PAGE ABOUT -->