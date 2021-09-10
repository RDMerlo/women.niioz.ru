<?php
$sTitle = get_field('title_ru', 962);
$sContent = get_field('content_ru', 962);
$sContentAfterForm = get_field('content_after_form_ru', 962);
$arMotivateFile = get_field('motivate_file', 962);
?>
<section class="page-section" id="competition">

    <div class="container">

        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                            class="fa crcle fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?= $sTitle ?></span>
        </h1>

        <div class="margin-top-20" data-animation="fadeInUp" data-animation-delay="300">
            <div class="row">
                <div class="col-lg-12">
                    <?= $sContent ?>
                </div>
            </div>
        </div>
        <section class="page-section" id="participiant">
            <h3 align="center">До закрытия конкурса осталось: </h3>
            <div id="clock">
                <?php echo do_shortcode('[timer-countdown]'); ?>
            </div>
            <h1 class="section-title" style="margin-bottom: 20px; padding-top: 20px;">
                <span data-animation="fadeInRight" data-animation-delay="500"
                      class="title-inner">Анкета участника</span>
            </h1>
            <div data-animation="fadeInUp" data-animation-delay="300" style="padding-right: 15px; padding-left: 15px;">
                <div class="row">
                    <div data-animation="fadeInUp" data-animation-delay="300">
                        <form id="registration-form" name="registration-form" class="registration-form" action="#"
                              method="post" data-animation="fadeInUp" data-animation-delay="200">
                            <div class="row">
                                <div class="col-sm-12 form-alert"></div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-project"
                                                data-toggle="tooltip" title="Тема проекта"
                                                placeholder="Тема проекта" name="region-field"/>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-org"
                                                data-toggle="tooltip" title="Наименование организации"
                                                placeholder="Наименование организации" name="input-org">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-name"
                                                data-toggle="tooltip" title="Введите ФИО*"
                                                placeholder="ФИО*" name="fio-field"/>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-position"
                                                data-toggle="tooltip" title="Введите должность"
                                                placeholder="Должность" name="position-field"/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-phone"
                                                data-toggle="tooltip" title="Введите телефон*"
                                                placeholder="Телефон*" name="phone-field"
                                                data-mask="+7 (000) 000 00 00"/>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-email"
                                                data-toggle="tooltip" title="Введите e-mail"
                                                placeholder="E-mail*" name="email-field"/>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6">
                                    <div class="form-group ">
                                        <input class="input-file" id="input_file" type="file" title="Выберите файл">
                                        <label tabindex="0" for="input_file" class="input-file-trigger">Прикрепить
                                            мотивационное письмо</label>
                                    </div>
                                    <a href="<?= $arMotivateFile['url'] ?>" class="motivate-link"><strong>*Требования к мотивационному письму</strong></a>
                                </div>
                                <div class="col-sm-12 col-md-12 margin-top-20">
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="personal_data_check" title="Обязательно к выбору">
                                        <label class="form-check-label" for="personal_data_check">Согласен на обработку персональных данных</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 overflowed">
                                    <div class="form-group">
                                        <button
                                                data-animation="flipInY" id="reg-btn" data-animation-delay="100"
                                                class="btn btn-theme submit-button btn-block custom-form-btn"
                                                type="button">
                                            Подать заявку <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </section>
        <div class="row margin-top-20">
            <div class="col-lg-12">
                <?= $sContentAfterForm ?>
            </div>
        </div>
    </div>
</section>





