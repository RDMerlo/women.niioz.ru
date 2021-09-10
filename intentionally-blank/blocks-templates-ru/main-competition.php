<?php
$sTitle = get_field('title_ru', 962);
$sContent = get_field('content_ru', 962);
$sContentAfterForm = get_field('content_after_form_ru', 962);
$sAboutEstimate = get_field('about_estimate', 962);
$arMotivateFile = get_field('motivate_file', 962);
?>
<section class="page-section" id="competition">

    <div class="container">

        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                            class="fa crcle fa-stack-2x"></i><i class="fa fa-ticket fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?= $sTitle ?></span>
        </h1>

        <div class="margin-top-20 about-2021" data-animation="fadeInUp" data-animation-delay="300">
            <div class="row">
                <div class="col-lg-12">
                    <?= $sContent ?>
                    <button class="btn btn-theme btn-block btn-estimate ">Положения о конкурсном отборе</button>
                    <div class="about-estimate margin-top-20" style="display: none;">
                        <div>
                            <div class="blockHidden">
                                <?= $sAboutEstimate; ?>
                                <br>
                                <button class="btn btn-theme btn-block btn-estimate ">Скрыть</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .js .input-file-trigger-video {
                display: block;
                padding: 14px 30px;
                background: #55b4e6;
                color: #fff;
                font-size: 1em;
                transition: all .4s;
                cursor: pointer;
                text-align: center;
            }

            .js .input-file-video {
                position: absolute;
                top: 0;
                left: 0;
                width: 225px;
                opacity: 0;
                padding: 14px 0;
                cursor: pointer;
            }

            .js .input-file-video:hover + .input-file-trigger-video,
            .js .input-file-video:focus + .input-file-trigger-video,
            .js .input-file-trigger-video:hover,
            .js .input-file-trigger-video:focus {
                background: #2c9ad0;
                color: #ffffff;
            }
            .js .input-file-trigger-presentation{
                display: block;
                padding: 14px 30px;
                background: #55b4e6;
                color: #fff;
                font-size: 1em;
                transition: all .4s;
                cursor: pointer;
                text-align: center;
            }

            .js .input-file-presentation {
                position: absolute;
                top: 0;
                left: 0;
                width: 225px;
                opacity: 0;
                padding: 14px 0;
                cursor: pointer;
            }

            .js .input-file-video:hover + .input-file-trigger-presentation,
            .js .input-file-video:focus + .input-file-trigger-presentation,
            .js .input-file-trigger-presentation:hover,
            .js .input-file-trigger-presentation:focus {
                background: #2c9ad0;
                color: #ffffff;
            }

        </style>

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
                        <form id="participant-add-form" name="registration-form" class="registration-form" action="#"
                              method="post" data-animation="fadeInUp" data-animation-delay="200">
                            <div class="row">
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <label for="">Выберите нужный пункт:</label><br>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                               id="individual-check" checked>
                                        <label class="form-check-label" for="individual-check">
                                            Физическое лицо
                                        </label>
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                               id="org-check">
                                        <label class="form-check-label" for="org-check">
                                            Юридическое лицо
                                        </label>
                                    </div>
                                </div>
                                <div class="for-individual">
                                    <div class="col-sm-12 col-md-12">
                                        <h3>Поля для физических лиц</h3>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-ind-fio"
                                                    data-toggle="tooltip" title="Введите ФИО*"
                                                    placeholder="ФИО*" data-placeholder="ФИО*" name="fio-field"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-ind-living-place"
                                                    data-toggle="tooltip" title="Введите населенный пункт*"
                                                    placeholder="Субъект РФ, населенный пункт*"
                                                    name="age-field"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-ind-phone"
                                                    data-toggle="tooltip" title="Введите телефон*"
                                                    placeholder="Телефон*" name="phone-field"
                                                    data-mask="+7 (000) 000 00 00"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-ind-email"
                                                    data-toggle="tooltip" title="Введите e-mail*"
                                                    placeholder="E-mail*" name="email-field"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="for-organization" style="display: none">
                                    <div class="col-sm-12 col-md-12">
                                        <h3>Поля для юридических лиц</h3>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-name"
                                                    data-toggle="tooltip" title="Введите наименование организации*"
                                                    placeholder="Наименование организации*" name="age-field"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <h3>Руководитель организации</h3>
                                    </div>
                                    <div class="col-sm-12 col-md-12">

                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-lead-fio"
                                                    data-toggle="tooltip" title="Введите ФИО*"
                                                    placeholder="ФИО(полностью)*" name="age-field"/>
                                        </div>
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-lead-position"
                                                    data-toggle="tooltip" title="Введите должность*"
                                                    placeholder="Должность*" name="age-field"/>
                                        </div>
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-living-place"
                                                    data-toggle="tooltip" title="Введите cубъект РФ, населенный пункт*"
                                                    placeholder="Субъект РФ, населенный пункт*" name="age-field"/>
                                        </div>
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-project-sphere"
                                                    data-toggle="tooltip" title="Введите сферу деятельности проекта*"
                                                    placeholder="Сфера деятельности проекта*" name="age-field"/>
                                        </div>
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-lead-phone"
                                                    data-toggle="tooltip" title="Введите телефон*"
                                                    placeholder="Телефон*" name="phone-field"
                                                    data-mask="+7 (000) 000 00 00"/>
                                        </div>
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-lead-email"
                                                    data-toggle="tooltip" title="Введите e-mail*"
                                                    placeholder="E-mail*" name="email-field"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <h3>Руководитель проекта</h3>
                                    </div>
                                    <div class="col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-proj-lead-fio"
                                                    data-toggle="tooltip" title="Введите ФИО*"
                                                    placeholder="ФИО(полностью)*" name="age-field"/>
                                        </div>
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-proj-lead-position"
                                                    data-toggle="tooltip" title="Введите должность*"
                                                    placeholder="Должность*" name="age-field"/>
                                        </div>
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-proj-lead-phone"
                                                    data-toggle="tooltip" title="Введите телефон*"
                                                    placeholder="Телефон*" name="phone-field"
                                                    data-mask="+7 (000) 000 00 00"/>
                                        </div>
                                        <div class="form-group">
                                            <input
                                                    type="text" class="form-control input-org-proj-lead-email"
                                                    data-toggle="tooltip" title="Введите e-mail*"
                                                    placeholder="E-mail*" name="email-field"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <h3>Описание проекта</h3>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-proj-title"
                                                data-toggle="tooltip" title="Введите название проекта*"
                                                placeholder="Название*" name="age-field"/>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-proj-task"
                                                data-toggle="tooltip" title="Введите цель и задачи проекта*"
                                                placeholder="Цель и задачи*" name="age-field"/>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <textarea
                                                type="text" class="form-control input-project-essence"
                                                data-toggle="tooltip" title="Введите суть проекта*"
                                                placeholder="Суть проекта*" name="age-field"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-auditory"
                                                data-toggle="tooltip" title="Введите целевую аудиторию проекта*"
                                                placeholder="Целевая аудитория проекта*" name="age-field"/>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <select
                                                type="text" class="form-control input-status"
                                                data-toggle="tooltip" title="Выберите «Зрелость» проекта*"
                                                placeholder="«Зрелость» проекта*" name="age-field">
                                            <option selected disabled>«Зрелость» проекта*</option>
                                            <option>Идея</option>
                                            <option>реализован в одной социальной группе (организации)</option>
                                            <option>многократно реализован</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-results"
                                                data-toggle="tooltip" title="Введите результаты проекта"
                                                placeholder="Результаты проекта*" name="age-field"/>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-realize-info"
                                                data-toggle="tooltip" title="Введите информацию о реализации проекта*"
                                                placeholder="Информация о реализации проекта*" name="age-field"/>
                                    </div>
                                </div>


                                <!--                                <div class="col-sm-12 col-md-12">-->
                                <!--                                    <div class="form-group ">-->
                                <!--                                        <input class="input-file input-file-photo" id="input_file" type="file"-->
                                <!--                                               title="Выберите файл">-->
                                <!--                                        <label tabindex="0" for="input_file"-->
                                <!--                                               class="input-file-trigger input-file-trigger-photo">Фотография</label>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->

                                <!--                                <div class="col-sm-12 col-md-12">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <input-->
                                <!--                                                type="text" class="form-control input-project-theme"-->
                                <!--                                                data-toggle="tooltip" title="Заполните поле*"-->
                                <!--                                                placeholder="Тема проекта/инициативы*" name="age-field"/>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!---->
                                <!--                                <div class="col-sm-12 col-md-12">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <input-->
                                <!--                                                type="text" class="form-control input-form"-->
                                <!--                                                data-toggle="tooltip" title="Заполните поле*"-->
                                <!--                                                placeholder="Форма предоставления проекта*" name="age-field"/>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <!--                                </div>-->
                                <!--                                <div class="col-sm-12 col-md-12">-->
                                <!--                                    <div class="form-group">-->
                                <!--                                        <textarea-->
                                <!--                                                type="text" class="form-control input-characteristic"-->
                                <!--                                                data-toggle="tooltip" title="Заполните поле*"-->
                                <!--                                                placeholder="Краткая характеристика*" name="age-field"></textarea>-->
                                <!--                                    </div>-->
                                <!--                                </div>-->
                                <div class="col-sm-12 col-md-12">
                                    <h3>Масштабирование проекта</h3>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group ">
                                        <input class="input-file input-file-presentation" id="input_presentation" type="file"
                                               title="Выберите файл презентации">
                                        <label tabindex="0" for="input_presentation"
                                               class="input-file-trigger input-file-trigger-presentation">Презентация проекта в формате .ppt, .pdf. Количество слайдов не более 15.*</label>
                                    </div>
                                </div>
                                <script>
                                    let fileInput  = document.querySelector( ".input-file-presentation");
                                    let button = document.querySelector( ".input-file-trigger-presentation");
                                    button.addEventListener( "keydown", function( event ) {
                                        if ( event.keyCode == 13 || event.keyCode == 32 ) {
                                            fileInput.focus();
                                        }
                                    });
                                    button.addEventListener( "click", function( event ) {
                                        fileInput.focus();
                                        return false;
                                    });
                                    fileInput.addEventListener( "change", function( event ) {
                                        let str = this.value.replaceAll('C:\\fakepath\\', '');
                                        console.log(str);
                                        button.innerHTML = "Выбран файл: " + str;
                                    });

                                </script>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group ">
                                        <input class="input-file input-file-photo" id="input_file" type="file"
                                               title="Выберите файл изображения">
                                        <label tabindex="0" for="input_file"
                                               class="input-file-trigger input-file-trigger-photo">Фотоматериалы, иллюстрирующие суть проекта</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12" style="display: none;">
                                    <div class="form-group ">
                                        <input class="input-file input-file-photo-2" id="input_file_2" type="file"
                                               title="Выберите файл изображения">
                                        <label tabindex="0" for="input_file_2"
                                               class="input-file-trigger input-file-trigger-photo-2">Фотоматериалы, иллюстрирующие суть проекта</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12" style="display: none;">
                                    <div class="form-group ">
                                        <input class="input-file input-file-photo-3" id="input_file_3" type="file"
                                               title="Выберите файл изображения">
                                        <label tabindex="0" for="input_file_3"
                                               class="input-file-trigger input-file-trigger-photo-3">Фотоматериалы, иллюстрирующие суть проекта</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12" style="display: none;">
                                    <div class="form-group ">
                                        <input class="input-file input-file-video" id="input_file_video" type="file"
                                               title="Выберите файл видео">
                                        <label tabindex="0" for="input_file_video"
                                               class="input-file-trigger input-file-trigger-video">Видеоматериалы, иллюстрирующие суть проекта</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input
                                                type="text" class="form-control input-video"
                                                data-toggle="tooltip" title="Введите ссылку на видеоролик*"
                                                placeholder="Ссылка на видеоролик, иллюстрирующий суть проекта, продолжительностью не более 3 мин."
                                                name="age-field"/>
                                    </div>
                                    <a href="<?= $arMotivateFile['url'] ?>" class="motivate-link"><strong>*Требования к
                                            записи ролика</strong></a>
                                </div>
                                <div class="col-sm-12 col-md-12 margin-top-20">
                                    <div class="form-group">
                                        <input type="checkbox" class="form-check-input" id="personal_data_check"
                                               title="Подтвердите согласие">
                                        <label class="form-check-label" for="personal_data_check">
                                             Я подтверждаю, что ознакомлен и согласен с
                                            <a target="_blank" href="https://niioz.ru/upload/doc/Политика%20обработки%20персональных%20данных%20САЙТ%20NIIOZ.pdf">
                                                политикой обработки персональных данных </a>
                                            и
                                            <a target="_blank" href="https://niioz.ru/upload/iblock/f6b/f6b3d8173523b37ebc3371ce3dbd1dec.pdf">
                                                условиями использования сайта </a>
                                        </label>
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
                                <div class="col-sm-12 form-alert"></div>
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





