<!-- PAGE SPONSORS -->

<?php
/* FIXME: Весь код нужно переделать!!!*/

$sTitle = get_field('title_ru', 1240);
$sSponsorsPartnersTitle = CFS()->get('sponsors_title_ru', 1240);
$arSponsorsPartners = CFS()->get('sponsors_ru', 1240);

$arSponsorPartner1 = $arSponsorsPartners[0];

$arSponsors1 = $arSponsorPartner1['sponsor'][3];
$arSponsors2 = $arSponsorPartner1['sponsor'][4];
$arSponsors3 = $arSponsorPartner1['sponsor'][5];

?>

<style>
    .block1 {
        float: left;
        display: block;
        width: 300px;
        margin: 2px 20px 5px 0px;
        padding-left: 20px;
        padding-bottom: 20px;
    }

    .block2 {
        float: left;
        display: block;
        width: 300px;
        margin: 2px 10px 5px 0px;
        padding-left: 20px;
        padding-bottom: 20px;
    }
</style>

<section id="partners">
    <br>
    <br>
<section class="page-section white-bg light" >
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12" style="width: auto;">
<!--				<div class="rounded border">-->
					<h1 class="section-title">
						<span data-animation="flipInY" data-animation-delay="100" class="icon-inner">
							<span class="fa-stack">
								<i class="fa crcle fa-stack-2x"></i>
								<i class="fa fa-thumbs-up fa-stack-1x"></i>
							</span>
						</span>
						<span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">
                            <?=$arSponsorPartner1['title'];?>
                        </span>
					</h1>
					<div class="row">
						<div class="">
							<div class="block1" data-animation="fadeInUp" data-animation-delay="300">
								<a target="_blank" href="<?=$arSponsors1['link']; ?>">
									<img style="width: 287px" src="https://women.niioz.ru/wp-content/themes/intentionally-blank/assets/img/partner/roscong.svg" alt=""/>
								</a>
							</div>
                            <div class="block2" data-animation="fadeInUp" data-animation-delay="300" >
                                <a target="_blank" href="<?=$arSponsors2['link']; ?>">
                                    <img style="width: 95px" src="https://women.niioz.ru/wp-content/themes/intentionally-blank/assets/img/partner/nationalpriority-logo.svg" alt="" />
                                </a>
                            </div>
						</div>
                        <div class="" style = "max-width: 300px">

                        </div>
                    </div>
                    <br>
                    <div class="" >
						<div class="">
							<div class="block1" data-animation="fadeInUp" data-animation-delay="300">
								<a target="_blank" href="<?=$arSponsors3['link']; ?>">
									<img style="width: 250px" src="https://women.niioz.ru/wp-content/themes/intentionally-blank/assets/img/partner/nii-logo.svg" alt=""/>
								</a>
							</div>
<!--                            <div class="block2" data-animation="fadeInUp" data-animation-delay="300" >-->
<!--                                <a target="_blank" href="https://content-foundation.org/">-->
<!--                                    <img style="width: 200px" src="https://women.niioz.ru/wp-content/themes/intentionally-blank/assets/img/partner/logo-fondkontent.png" alt="" />-->
<!--                                </a>-->
<!--                            </div>-->
						</div>
					</div>
<!--				</div>-->
            </div>
        </div>
    </div>
</section>
</section>
<!-- /PAGE SPONSORS -->