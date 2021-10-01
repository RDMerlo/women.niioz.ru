<?php
$assets_uri = get_template_directory_uri() . '/assets/';
wp_enqueue_style('frontend', $assets_uri . 'css/frontend.css', array(), rand(1, 999999));

$arStreams = getStreams();

function printStreams($arStreams, $sType = 'all')
{
    $arStreamsHtml = '';
    foreach ($arStreams as $arStream){
        if($sType !== 'all' && $arStream['type'] !== $sType){
            continue;
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
                                    <a href='/stream?id={$arStream['id']}' target='_blank' class='btn btn-theme'>Смотреть трансляцию</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    EOT;
    }
    echo $arStreamsHtml;
}

?>
<section class="page-section white-bg" id="participants">
    <div class="container">
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                            class="fa crcle fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
            <span data-animation="fadeInUp" data-animation-delay="500"
                  class="title-inner">Трансляции<small> </small></span>
        </h1>

        <div class="row margin-top-20" id="linkShowHiddenStream">
            <div class="col-md-12">
                <button class="btn btn-theme btn-block btn-cs-streams">Программа марафона</button>
            </div>
            <div class="col-md-12">
                <div class="cs-streams-block margin-top-20" id="usloviaUchastia">
                    <div>
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
                                                        Цикл мероприятий <span>«Прямой эфир с&nbsp;экспертом»</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#womans" role="tab" data-toggle="tab">
                                                    <div>
                                                        Мероприятия на&nbsp;платформе <span>«Женщины за&nbsp;здоровое общество»</span>
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
                                            <div role="tabpanel" class="tab-pane fade" id="womans">
                                                <?php printStreams($arStreams, 'womans'); ?>
                                            </div>
                                        </div>
                                    </div>
                            <button class="btn btn-theme btn-block btn-cs-streams">Скрыть</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--        <div class="container">-->
<!--            <div class="program__title">-->
<!--                <h3>Программа регионального дня здоровья</h3>-->
<!--                в рамках третьего Евразийского женского форума-->
<!--            </div>-->
<!--            <ul class="nav nav-pills nav-program" role="tablist">-->
<!--                <li class="active">-->
<!--                    <a href="#all" role="tab" data-toggle="tab">-->
<!--                        <div>-->
<!--                            Все мероприятия-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#tass" role="tab" data-toggle="tab">-->
<!--                        <div>-->
<!--                            Мероприятия на&nbsp;площадке <span>пресс-центра ТАСС</span>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#expert" role="tab" data-toggle="tab">-->
<!--                        <div>-->
<!--                            Цикл мероприятий <span>«Прямой эфир с&nbsp;экспертом»</span>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="#womans" role="tab" data-toggle="tab">-->
<!--                        <div>-->
<!--                            Мероприятия на&nbsp;платформе <span>«Женщины за&nbsp;здоровое общество»</span>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!--            </ul>-->
<!--            <div class="tab-content">-->
<!--                <div role="tabpanel" class="tab-pane fade in active" id="all">-->
<!--                    --><?php //printStreams($arStreams); ?>
<!--                </div>-->
<!--                <div role="tabpanel" class="tab-pane fade" id="tass">-->
<!--                    --><?php //printStreams($arStreams, 'tass'); ?>
<!--                </div>-->
<!--                <div role="tabpanel" class="tab-pane fade" id="expert">-->
<!--                    --><?php //printStreams($arStreams, 'expert'); ?>
<!--                </div>-->
<!--                <div role="tabpanel" class="tab-pane fade" id="womans">-->
<!--                    --><?php //printStreams($arStreams, 'womans'); ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
</section>
