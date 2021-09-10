<?php
    $sDate = get_field('date_en', 904);
    $sTitle = get_field('en_title', 904);
    $sFormat = get_field('format_en', 904);
?>
<div id="main">
    <!-- SLIDER -->
    <section class="page-section no-padding background-img-slider">
        <div class="container">
			
            <div id="main-slider" class="owl-carousel owl-theme">

                <div class="item page text-center slide0">
                    <div class="caption">
                        <div class="container">
                            <div class="div-table">
                                <div class="div-cell">
                                    <h2 class="slider-title" data-animation="fadeInDown" data-animation-delay="100"><span><?=$sDate?></span></h2>
                                    <h3 class="caption-subtitle" data-animation="fadeInUp" data-animation-delay="300"><span><?=$sTitle?></span> </h3>
									
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Event description -->
        <div class="event-description">
            <div class="container">
                <div class="row">
                    <div class="event-background">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="media">
                                    <span class="pull-left">
                                        <i class="fa fa-calendar fa-2x"></i>
                                    </span>
                                        <div class="media-body">
                                            <h4 class="media-heading">Date</h4>
                                            <span><?=$sDate?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="media">
                                    <span class="pull-left">
                                        <i class="fa fa-map-marker fa-2x"></i>
                                    </span>
                                        <div class="media-body">
                                            <h4 class="media-heading">Location</h4>
                                            <span><?=$sFormat?></span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Event description -->

    </section>
    <!-- /SLIDER -->
</div>