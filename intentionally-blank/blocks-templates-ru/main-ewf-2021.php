<!-- PAGE EWF -->

<?php
$sTitle = get_field('title_ru', 1698);
$assets_uri = get_template_directory_uri() . '/assets/';
wp_enqueue_style('frontend', $assets_uri . 'css/frontend.css', array(), rand(1, 999999));

$arStreams = getStreams();

function printStreams($arStreams, $sType = 'all')
{
    $arStreamsHtml = '';
    foreach ($arStreams as $arStream) {
        if ($sType !== 'all' && $arStream['type'] !== $sType) {
            continue;
        }

        $sButtonHtml = "<a href='/stream?id={$arStream['id']}' target='_blank' class='btn btn-theme'>Смотреть трансляцию</a>";
        if ($arStream['link'] === '') {
            $sButtonHtml = '';
        }

        $arStreamsHtml .= <<<EOT
                    <div class='program-item'>
                        <div class='row program-item__head'>
                            <div class='col-xs-12 col-md-4'>
                                <div class='program-item__time'>
                                    {$arStream['start_time']}–{$arStream['end_time']}
                                </div>
                            </div>
                            <div class='col-xs-12 col-md-8'>
                                <div class='program-item__name'>
                                    <span>{$arStream['label']}</span>
                                    <h4 class='h3'>
                                        {$arStream['title']}
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col-xs-12 col-md-8 col-md-push-4 program-item__body'>
                                {$arStream['content']}
                            </div>
                            <div class='col-xs-12 col-md-4 col-md-pull-8'>
                                <div class='program-item__info'>
                                    <div class='program-item__area'>
                                        {$arStream['place']}
                                    </div>
                                    $sButtonHtml
                                </div>
                            </div>
                        </div>
                    </div>
                    EOT;
    }
    echo $arStreamsHtml;
}

?>
<section id="ewf">
    <br>
    <br>
    <section class="page-section white-bg about-2021">
        <!--    <section class="page-section light">-->
        <div class="container">

            <div data-animation="fadeInUp" data-animation-delay="300">
                <!-- Блок текст контент -->
                <?
                $sTitleSpeakers = get_field('title_ru', 1698);
                ?>
                <h1 class="section-title">
                    <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                                    class="fa crcle fa-stack-2x"></i><i
                                    class="fa fa-user fa-stack-1x"></i></span></span>
                    <span data-animation="fadeInRight" data-animation-delay="500"
                          class="title-inner"><?= $sTitleSpeakers ?><small></small></span>
                </h1>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <p>
                            <?php
                            $sContentSpeakers = get_field('content_ru', 1698);
                            $sContentSpeakers = str_replace("<p></p>", "<br />", $sContentSpeakers);
                            if ($sContentSpeakers):
                                echo $sContentSpeakers;
                            endif;
                            ?>
                        </p>
                        </p>

                    </div>
                </div>
                <?
                $sContent = get_field('content_ru', 1231);
                $sTitle = get_field('title_ru', 1231);

                $sContentMarathonProgram = get_field('content_ru', 1712);
                $sTitleMarathonProgram = get_field('title_ru', 1712);
                ?>

                <div class="row margin-top-20" id="linkShowHidden">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-md-6">
                                    <button class="btn btn-theme btn-block btn-uslovia">Архитектура марафона</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-theme btn-block btn-cs-streams">Программа марафона</button>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-lg-12">
                            <div class="col-md-6">
                                <button class="btn btn-theme btn-block btn-news-open active-open-btn">Новости</button>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-theme btn-block btn-library-open">Библиотека ЗОЖ</button>
                            </div>
                            </div>
                        </div>
                        <!--архитектура марафона-->
                        <div class="col-md-12">
                            <div class="uslovia-uchastia margin-top-20" id="usloviaUchastia">
                                <div>
                                    <div class="blockHidden">
                                        <div class="documentFrontTable">
                                            <a href="<?= CFS()->get('file_ru', 1231); ?>" target="_blank">Скачать
                                                архитектуру</a>
                                        </div>
                                        <?= $sContent; ?>
                                        <br>
                                        <button class="btn btn-theme btn-block btn-uslovia">Скрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--программа марафона-->

                        <div class="col-md-12">
                            <div class="cs-streams-block margin-top-20" id="usloviaUchastia">
                                    <div class="blockHidden">
                                        <div class="container">
                                            <div class="program__title">
                                                <h3>Программа регионального дня здоровья</h3>
                                                в рамках третьего Евразийского женского форума
                                            </div>
                                            <ul class="nav nav-pills nav-program" role="tablist">
                                                <li class="active">
                                                    <a href="#all" role="tab" data-toggle="tab">
                                                        <div>
                                                            Все мероприятия
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#tass" role="tab" data-toggle="tab">
                                                        <div>
                                                            Мероприятия на&nbsp;площадке <span>пресс-центра ТАСС</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#expert" role="tab" data-toggle="tab">
                                                        <div>
                                                            Цикл онлайн мероприятий
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade in active" id="all">
                                                    <?php printStreams($arStreams); ?>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tass">
                                                    <?php printStreams($arStreams, 'tass'); ?>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="expert">
                                                    <?php printStreams($arStreams, 'expert'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-theme btn-block btn-cs-streams">Скрыть</button>
                                    </div>
                            </div>
                        </div>

                        <!--новости-->
                        <div class="col-md-12">
                            <div class="news-block margin-top-20">
                                <div>
                                    <div class="blockHidden">
                                        <?php get_template_part('blocks-templates-ru/main', 'news'); ?>
                                        <button class="btn btn-theme btn-block btn-news-open">Скрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--библиотека зож-->
                        <div class="col-md-12">
                            <div class="library-block margin-top-20">
                                <div>
                                    <div class="blockHidden">
                                        <div class="program__title" style="margin-top: 30px">
                                            <h3>Мероприятия на платформе «Женщины за здоровое общество»</h3>
                                        </div>
                                        <?php printStreams($arStreams, 'womans'); ?>
                                        <button class="btn btn-theme btn-block btn-library-open">Скрыть</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
            <br>
            <br>
        </div>
        </div>
        <!--    </section>-->
    </section>
</section>
<!-- /PAGE EWF -->
<?php
