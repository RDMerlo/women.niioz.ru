<!-- PAGE SPONSORS -->

<?php
$sTitle = get_field('title_ru', 1240);

function blockSponsorsDiv1($arSponsorPartner)
{
    ?>
    <div class="col-md-12 col-xs-12">
        <div class="box">
            <h1 class="section-title" style="margin-bottom: 20px">
                              <span data-animation="flipInY" data-animation-delay="100" class="icon-inner">
                              <span class="fa-stack">
                              <i class="fa crcle fa-stack-2x"></i>
                              <i class="fa fa-thumbs-up fa-stack-1x"></i>
                              </span>
                              </span>
                <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">
                    <?=$arSponsorPartner['title']; ?>
                </span>
            </h1>
            <div class="row flex-center-row logos">
                <?
                $arSponsors = $arSponsorPartner['sponsor'];
                foreach ($arSponsors as $arSponsor):
                    ?>
                    <div class="col-md-6 col-xs-12">
                        <a target="_blank" href="<?=$arSponsor['link']; ?>">
                            <img style="width: 100%;" src="<?=$arSponsor['image']; ?>" alt=""/>
                        </a>
                    </div>
                    <?
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <?
}

function blockSponsorsDiv2($arSponsorPartner)
{
    ?>
    <div class="col-md-12 col-xs-12 margin-top-20">
        <div class="box">
            <h1 class="section-title" style="margin-bottom: 20px">
                                  <span data-animation="flipInY" data-animation-delay="100" class="icon-inner">
                                  <span class="fa-stack">
                                  <i class="fa crcle fa-stack-2x"></i>
                                  <i class="fa fa-thumbs-up fa-stack-1x"></i>
                                  </span>
                                  </span>
                <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">
                    <?=$arSponsorPartner['title']; ?>
                </span>
            </h1>
            <div class="row flex-center-row logos">
                <?
                foreach ($arSponsorPartner as $arSponsor):
                    for ($j = 0; $j < 2; $j++):
                        switch ($j):
                            case 1:
                                ?>
                                <div class="col-md-7 col-xs-6">
                                    <a target="_blank" href="<?=$arSponsor['link']; ?>">
                                        <img style="width: 100%;" src="<?=$arSponsor['image']; ?>" alt=""/>
                                    </a>
                                </div>
                                <?
                                break;
                            case 2:
                                ?>
                                <div class="col-md-6 col-xs-6">
                                    <a target="_blank" href="<?=$arSponsor['link']; ?>">
                                        <img style="width: 100%;" src="<?=$arSponsor['image']; ?>" alt=""/>
                                    </a>
                                </div>
                                <?
                                break;
                        endswitch;
                    endfor;
                    ?>
                <?
                endforeach;
                ?>
            </div>
            <div class="row flex-center-row logos">
                <div class="col-md-6 col-xs-6">
                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">
                        <a target="_blank" href="http://www.ras.ru/">
                            <img style="width: 110%" src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/akadem.jpeg" alt=""/>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-xs-6">
                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">
                        <a target="_blank" href="http://www.rusasstat.ru/">
                            <img style="width: 80%" src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/ras.jpeg" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?
}

function blockSponsorsDiv3($arSponsorPartner)
{

}
?>

<section class="page-section white-bg" id="partners">
    <div class="container">
        <div class="row">

            <?
            $sSponsorsPartnersTitle = CFS()->get('sponsors_title_ru', 1240);
            $arSponsorsPartners = CFS()->get('sponsors_ru', 1240);

            if ($arSponsorsPartners):

                foreach ($arSponsorsPartners as $arSponsorPartner):
                    ?>
                    <div class="col-md-6 col-xs-12">
                        <div class="row">
                        <?
                        blockSponsorsDiv1($arSponsorPartner);
//                            switch ($i):
//                                case 0:
//                                    blockSponsorsDiv1($arSponsorPartner);
//                                    break;
//                                case 1:
//                                    blockSponsorsDiv2($arSponsorPartner);
//                                    break;
//                                case 2:
//                                    blockSponsorsDiv3($arSponsorPartner);
//                                    break;
//                            endswitch;
                        ?>
                        </div>
                    </div>
                    <?
                endforeach;
            endif;
            ?>

<!--            <div class="col-md-6 col-xs-12">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12 col-xs-12">-->
<!--                        <div class="box">-->
<!--                            <h1 class="section-title" style="margin-bottom: 20px">-->
<!--                              <span data-animation="flipInY" data-animation-delay="100" class="icon-inner">-->
<!--                              <span class="fa-stack">-->
<!--                              <i class="fa crcle fa-stack-2x"></i>-->
<!--                              <i class="fa fa-thumbs-up fa-stack-1x"></i>-->
<!--                              </span>-->
<!--                              </span>-->
<!--                                <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">-->
<!--                                    Организаторы съезда-->
<!--                                </span>-->
<!--                            </h1>-->
<!--                            <div class="row flex-center-row logos">-->
<!--                                <div class="col-md-6 col-xs-12">-->
<!--                                    <a target="_blank" href="https://www.mos.ru/">-->
<!--                                        <img style="width: 100%;" src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/pr-mos.jpeg" alt=""/>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 col-xs-12">-->
<!--                                    <a target="_blank" href="https://mosgorzdrav.ru">-->
<!--                                        <img style="width: 100%;" src="https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/dzm-logo.svg" alt=""/>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 col-xs-12">-->
<!--                                    <a target="_blank" href="https://niioz.ru">-->
<!--                                        <img style="width: 80%;" src="https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/new-logo.svg" alt=""/>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-12 col-xs-12 margin-top-20">-->
<!--                        <div class="box">-->
<!--                            <h1 class="section-title" style="margin-bottom: 20px">-->
<!--                                  <span data-animation="flipInY" data-animation-delay="100" class="icon-inner">-->
<!--                                  <span class="fa-stack">-->
<!--                                  <i class="fa crcle fa-stack-2x"></i>-->
<!--                                  <i class="fa fa-thumbs-up fa-stack-1x"></i>-->
<!--                                  </span>-->
<!--                                  </span>-->
<!--                                <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Партнеры</span>-->
<!--                            </h1>-->
<!--                            <div class="row flex-center-row logos">-->
<!--                                <div class="col-md-7 col-xs-6">-->
<!--                                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">-->
<!--                                        <a target="_blank" href="https://minzdrav.gov.ru/">-->
<!--                                            <img src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/min.jpeg" alt=""/>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-4 col-xs-6">-->
<!--                                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">-->
<!--                                        <a target="_blank" href="https://mednet.ru/">-->
<!--                                            <img style="width: 65%" src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/cnii.jpeg" alt=""/>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="row flex-center-row logos">-->
<!--                                <div class="col-md-6 col-xs-6">-->
<!--                                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">-->
<!--                                        <a target="_blank" href="http://www.ras.ru/">-->
<!--                                            <img style="width: 110%" src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/akadem.jpeg" alt=""/>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-6 col-xs-6">-->
<!--                                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">-->
<!--                                        <a target="_blank" href="http://www.rusasstat.ru/">-->
<!--                                            <img style="width: 80%" src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/ras.jpeg" alt=""/>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-12 col-xs-12 margin-top-20">-->
<!--                        <div class="box">-->
<!--                            <h1 class="section-title" style="margin-bottom: 20px">-->
<!--                                  <span data-animation="flipInY" data-animation-delay="100" class="icon-inner">-->
<!--                                  <span class="fa-stack">-->
<!--                                  <i class="fa crcle fa-stack-2x"></i>-->
<!--                                  <i class="fa fa-thumbs-up fa-stack-1x"></i>-->
<!--                                  </span>-->
<!--                                  </span>-->
<!--                                <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Стратегические партнеры</span>-->
<!--                            </h1>-->
<!--                            <div class="row flex-center-row logos">-->
<!--                                <div class="col-md-4 col-xs-6">-->
<!--                                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">-->
<!--                                        <a target="_blank" href="https://roscongress.org/">-->
<!--                                            <img style="" src="https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/roscong.svg" alt=""/>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-4 col-xs-6">-->
<!--                                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">-->
<!--                                        <a target="_blank" href="https://content-foundation.org/">-->
<!--                                            <img style="" src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/partner/cont.png" alt=""/>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="col-md-4 col-xs-6">-->
<!--                                    <div class="partn-item" data-animation="fadeInUp" data-animation-delay="300">-->
<!--                                        <a target="_blank" href="https://forumhealth.ru/">-->
<!--                                            <img style="" src="https://sp-ao.shortpixel.ai/client/q_glossy,ret_img/https://medstat.niioz.ru/wp-content/themes/socforum/assets/img/inform-partners/zdorov.jpeg" alt=""/>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>
<!-- /PAGE SPONSORS -->

