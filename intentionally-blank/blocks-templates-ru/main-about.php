<!-- PAGE ABOUT -->
<?php
    $sTitle = get_field('title_ru', 909);
    $arUpload = wp_upload_dir();
?>

<!--<section class="page-section about-2021" id="about" style="padding-top: 60px;">-->
<section class="page-section about-2021" id="about" style="padding-top: 60px;">
    <div class="container">
		<!--div class="text-left" style="margin-bottom: 60px;">Открытая трансляция ведется на <a href="https://niioz.ru/" target="_blank">сайте института</a> и на <a href="https://newsfactory.ria.ru/static/SPlayer.html?id=14970126" target="_blank">сайте РИА</a>, а также на официальном <a href="https://www.youtube.com/channel/UCQN9mc_OvkWdrZfdynRViTA/" target="_blank">Youtube-канале НИИОЗММ ДЗМ</a>.
		</div-->
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?=$sTitle?><small></small></span>
        </h1>

        <!--    Блоки    -->
        <div data-animation="fadeInUp" data-animation-delay="300">
            <!-- Блок текст контент -->
            <? blockTextContent(909); ?>
            <!-- Блок Направления программ(список) -->
            <? blockDirectionsPrograms(909); ?>
            <!-- Блок Текст после списка программ  -->
            <? blockTextNextProgram(909); ?>
            <!-- Блок Модули  -->
            <? blockModules(909); ?>
            <!-- Блок Текст после модулей -->
            <? blockTextNextModules(909);?>
        </div>
    </div>
    </div>
</section>
<!--<div class="popup-fade">-->
<!--    <a class="popup-close" href="#">×</a>-->
<!--    <div class="popup">-->
<!---->
<!--    </div>-->
<!--</div>-->
<!-- /PAGE ABOUT -->