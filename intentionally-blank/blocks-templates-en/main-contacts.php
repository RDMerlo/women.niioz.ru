<?php
    $sTitle = get_field('title_en', 915);
?>
<!-- PAGE SPONSORS -->
<section class="page-section" id="contacts">
    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-xs-12">

                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="100" class="icon-inner">
                        <span class="fa-stack">
                            <i class="fa crcle fa-stack-2x"></i>
                            <i class="fa fa-envelope fa-stack-1x"></i>
                        </span>
                    </span>
                    <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">
                       <?=$sTitle?>
                    </span>
                </h1>

                <div class='row' id='contacts-block' data-animation="fadeInUp" data-animation-delay="200">
                    <?php
                    $arContacts = CFS()->get('contacts_en', 915);
                    foreach ($arContacts as $arContact):
                        ?>
                        <div class="col-lg-6 col-md-6 col-xs-12 contact-block">
                            <div><strong><?=$arContact['title']?></strong></div>
                            <br>

                            <div>
                                <?=$arContact['content']?>
                            </div>

                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="100" class="icon-inner">
                        <span class="fa-stack">
                            <i class="fa crcle fa-stack-2x"></i>
                            <i class="fa fa-thumbs-up fa-stack-1x"></i>
                        </span>
                    </span>
                    <span class="title-inner">FORUM ORGANIZERS</span>
                </h1>

                <div id='orgs-block'>
                    <div class="sp-flex org-items">
                        <div class="sp-flex-item">
                            <a target="_blank" href="https://mosgorzdrav.ru">
                                <img src="<?php echo ASSETSURI?>img/dzm-logo.svg" alt=""/>
                            </a>
                        </div>
                        <div class="sp-flex-item">
                            <a target="_blank" href="https://niioz.ru">
                                <img class='nii-logo' src="<?php echo ASSETSURI?>img/nii-logo-new.svg" alt=""/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- /PAGE SPONSORS -->