<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
?>
</div>
<!-- /Content area -->

<script src="https://kit.fontawesome.com/458d403d73.js" crossorigin="anonymous"></script>

<!-- FOOTER -->
<style>
    .footer li i{
        margin-right: 0 !important;
    }
</style>
<footer class="footer">
    <div class="footer-meta">
        <div class="container text-center">
            <div class="clearfix">
                <ul class="social-line social-circle list-inline">
                    <li data-animation="flipInY" data-animation-delay="300"><a href="https://vk.com/public186110421" target="_blank" class="facebook"><i class="fa fa-vk"></i></a></li>
                    <li data-animation="flipInY" data-animation-delay="300"><a href="https://t.me/niiozmm/" target="_blank" class="facebook">
                                <img style="margin-bottom: 3px" width="100%" src="<?=ASSETSURI.'img/telegram-512.webp'?>" alt=""></a></li>

                    <li><a href="https://www.facebook.com/niiozmm/" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.instagram.com/instozmm/" class="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCQN9mc_OvkWdrZfdynRViTA" class="pinterest"><i class="fa fa-youtube"></i></a></li>
                     <li><a href="https://www.tiktok.com/@niioz_health" target="_blank" class="tiktok"><i class="fab fa-tiktok"></i></a></li>
                    
                </ul>
            </div>
            <span class="copyright">&copy; 2021 ГБУ «НИИОЗММ» &#8212; ЖЕНЩИНЫ ЗА ЗДОРОВОЕ ОБЩЕСТВО</span>
        </div>
    </div>
</footer>
<!-- /FOOTER -->

<div class="to-top"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /Wrap all content -->

<!-- JS Global -->

<!--[if lt IE 9]><script src="<?php echo get_stylesheet_directory_uri();?>/assets/plugins/jquery/jquery-1.11.1.min.js"></script><![endif]-->
<!--[if gte IE 9]><!--><script src="<?php echo get_stylesheet_directory_uri();?>/assets/plugins/jquery/jquery-2.1.1.min.js"></script><!--<![endif]-->

<!-- Модальное окно myModal -->
<div class="modal fade" id="myModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                <h4 id='newstitle' class="modal-title">Заголовок модального окна</h4>
            </div>
            <div class="modal-body">
                <p id="content"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<script>
    // при открытии модального окна
    $('#myModal').on('show.bs.modal', function (event) {
        // получить кнопку, которая его открыло
        var button = $(event.relatedTarget)
        // извлечь информацию из атрибута data-content
        var content = button.data('content')
        // вывести эту информацию в элемент, имеющий id="content"
        $(this).find('#content').html(content);
        var title = button.data('title')
        $(this).find('#newstitle').text(title);
    })
</script>

<?php wp_footer(); ?>

<script type="text/javascript">
    jQuery(document).ready(function () {
        theme.init();
        theme.initMainSlider();
        theme.initCountDown();
        theme.initPartnerSlider();
        theme.initTestimonials();
//        theme.initGoogleMap();
        //theme.initYandexMap();

    });

    jQuery(window).load(function () {
        theme.initAnimation();
    });

    jQuery(window).load(function () { jQuery('body').scrollspy({offset: 100, target: '.navigation'}); });
    jQuery(window).load(function () { jQuery('body').scrollspy('refresh'); });
    jQuery(window).resize(function () { jQuery('body').scrollspy('refresh'); });

    jQuery(document).ready(function () { theme.onResize(); });
    jQuery(window).load(function(){ theme.onResize(); });
    jQuery(window).resize(function(){ theme.onResize(); });

    jQuery(window).load(function() {
        if (location.hash != '') {
            var hash = '#' + window.location.hash.substr(1);
            if ($(hash).length) {
                jQuery('html,body').delay(0).animate({
                    scrollTop: jQuery(hash).offset().top - 44 + 'px'
                }, {
                    duration: 1200,
                    easing: "easeInOutExpo"
                });
            }
        }
    });



</script>
<script type="text/javascript" id="statsmosru" src="https://stats.mos.ru/counter.js" onLoad="statsMosRuCounter()" defer="defer" async="true"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter39856805 = new Ya.Metrika({
                    id:39856805,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/39856805" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>