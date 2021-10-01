<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ЖЕНЩИНЫ ЗА ЗДОРОВОЕ ОБЩЕСТВО</title>

    <!-- Favicons -->
<!--    <link rel="apple-touch-icon-precomposed" sizes="94x73"-->
<!--          href="https://socforum.niioz.ru/wp-content/uploads/2020/04/logo-min.jpg">-->
    <link rel="shortcut icon" href="<?php echo ASSETSURI; ?>ico/faviconwoman.ico">

    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="ico/faviconwoman.jpg">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <!--[if lt IE 9]>
    <script src="assets/plugins/iesupport/html5shiv.js"></script>
    <script src="assets/plugins/iesupport/respond.min.js"></script>
    <![endif]-->

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () {
                (m[i].a = m[i].a || []).push(arguments)
            };
            m[i].l = 1 * new Date();
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(67941661, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/67941661" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->

    <meta charset="<?php bloginfo('charset'); ?>">

    <?php wp_head();
        ini_set('display_errors', 'Off');
    ?>

</head>

<body id="home" class="wide body-light">
<!--<br><br><br><br>-->
<?//=$_SERVER['SERVER_NAME']?>
<!-- Preloader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Wrap all content -->
<div class="wrapper">

    <!-- HEADER -->
    <header class="header fixed" style=" background-color: #ffffff !important;">
        <div class="container">
            <div class="row">
                <div class=' col-12 lang-switcher'>

                </div>
            </div>

            <div class="header-wrapper header-padding">
                <!-- Logo -->
                <div class='logo-pril'>
                    <div class="logo">
                        <a href="<?=mainPageLink()?>#home" class="scroll-to">
                            <img src="<?php echo ASSETSURI ?>img/logo-hl7.png">
                        </a>
                    </div>
                    <!-- /Logo -->
                </div>

                <!-- Navigation -->
                <div class="nav-panel">

                    <nav class="navigation closed clearfix">
                        <ul class="sf-menu nav">
                            <li><a href="<?=mainPageLink()?>#about">О проекте</a></li>
                            <li><a href="<?=mainPageLink()?>#ewf">Марафон</a></li>
                            <li><a href="<?=mainPageLink()?>#competition">Конкурсный отбор</a></li>
                            <li class="marker"><a href="<?=mainPageLink()?>#participiant">Подать заявку</a></li>
                            <li><a href="<?=mainPageLink()?>#healthprofile">Цифровой профиль ЗОЖ</a></li>
                            <li><a href="<?=mainPageLink()?>#partners">Партнеры</a></li>
                            <li><a href="<?=mainPageLink()?>#speakers">Команда</a></li>
                            <li><a href="<?=mainPageLink()?>#contacts">Контакты</a></li>
                        </ul>
                    </nav>

                    <a href="#" class="menu-toggle btn"><i class="fa fa-bars"></i></a>
                    <div id="mobile-menu"></div>

                </div>
                <!-- /Navigation -->

            </div>
        </div>
    </header>
    <!-- /HEADER -->

    <!-- Content area -->
    <div class="content-area">

