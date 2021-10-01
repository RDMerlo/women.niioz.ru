<?php
    $sTitle = get_field('title_ru', 915);
?>
<section id="contacts">
    <br>
    <br>
<section class="page-section" >
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
                        $arContacts = CFS()->get('contacts_ru', 915);
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
</section>
<section class="page-section color">
    <div class="container">

        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="100" class="icon-inner"><span class="fa-stack"><i class="fa rhex fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="100" class="title-inner">Обратная связь<small>/ напишите нам</small></span>
        </h1>

        <!-- Contact form -->
        <form name="af-form" method="post" action="#contact" class="af-form row" id="af-form">

            <div class="col-sm-12 af-outer af-required">
                <div class="form-group af-inner">
                    <input
                            type="text" name="name" id="name" placeholder="ФИО" value="" size="30"
                            data-toggle="tooltip" title="Введите ФИО"
                            class="form-control placeholder"/>
                </div>
            </div>

            <div class="col-sm-12 af-outer af-required">
                <div class="form-group af-inner">
                    <input
                            type="text" name="email" id="email" placeholder="e-mail" value="" size="30"
                            data-toggle="tooltip" title="Введите e-mail"
                            class="form-control placeholder"/>
                </div>
            </div>

            <div class="col-sm-12 af-outer af-required">
                <div class="form-group af-inner">
                    <textarea
                            name="message" id="input-message" placeholder="Текст сообщения" rows="4" cols="50"
                            data-toggle="tooltip" title="Введите текст сообщения"
                            class="form-control placeholder"></textarea>
                </div>
            </div>
            <div class="col-sm-12 col-md-12">
                <div class="form-group">
                    <input type="checkbox" class="form-check-input" id="personal_data_check_form" title="Обязательно к выбору">
                    <label class="form-check-label" for="personal_data_check_form">Согласен на обработку персональных данных</label>
                </div>
            </div>
            <div class="col-sm-12 af-outer af-required text-center">
                <div class="form-group af-inner">
                    <input type="submit" name="submit" class="form-button form-button-submit btn btn-theme btn-theme-lg btn-theme-transparent" id="submit_btn" value="Отправить" />
                </div>
            </div>

        </form>
        <!-- /Contact form -->

    </div>
</section>
</section>