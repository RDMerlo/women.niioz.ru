<!-- PAGE OPINIONS -->

<?php
$sTitle = get_field('title_ru', 1105);

function blockFunctionOpinionNextText()
{
    ?>
    <div class="text-center">
        <p>
            <iframe width="68%" height="420px" src="https://www.youtube.com/embed/U5y554z3iaY"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </p>
    </div>
    <br>
    <div class="text-center">
        <p>
            <iframe width="68%" height="420px" src="https://www.youtube.com/embed/TF6MTR1lCS4"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </p>

    </div>
    <?
}
?>

<section class="page-section" id="opinion"  style="padding-top: 60px;">
    <div class="container">
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i
                        class="fa crcle fa-stack-2x"></i><i class="fa fa-user fa-stack-1x"></i></span></span>
            <span data-animation="fadeInUp" data-animation-delay="500"
                  class="title-inner"><?=$sTitle?><small> </small></span>
        </h1>
        <br>
<!--        <div class="row">-->
        <div data-animation="fadeInUp" data-animation-delay="300">

        <!-- Блок мнений -->
            <? blokOpinions(1105); ?>
            <!-- Текст помле блока мнений -->
            <? blockTextNextOpinions(1105, blockFunctionOpinionNextText()); ?>
        </div>
    </div>
</section>
<!-- /PAGE OPINIONS -->