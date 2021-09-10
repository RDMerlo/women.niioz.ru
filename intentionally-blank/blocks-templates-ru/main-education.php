<?php
    $sTitle = CFS()->get('title_ru', 974);
    $sContent = CFS()->get('content_ru', 974);
    $sModuleTitle = CFS()->get('module_title_ru', 974);
    $arModules = CFS()->get('modules_ru', 974);
?>

<section class="page-section" id="education">
    <div class="container">
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?=$sTitle?><small></small></span>
        </h1>

        <div data-animation="fadeInUp" data-animation-delay="300">

            <div class="row">
                <div class="col-lg-12">
                    <?=$sContent?>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="fw-600">
                        <?=$sModuleTitle?>
                    </div>
                </div>
                <div class="panel-body">
                    <?php
                    foreach ($arModules as $arModule):
                    ?>
                        <p>
                        <div class="fw-600"><?=$arModule['title']?></div>
                        <?=$arModule['content']?>
                        </p>
                    <?php endforeach;?>
                </div>
            </div>

        </div>
    </div>
</section>
