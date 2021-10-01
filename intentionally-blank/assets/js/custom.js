jQuery( document ).ready(function() {

    switch (window.location.href) {
        case 'https://hl.niioz.ru/ru/':
            window.location.href = 'https://hl.niioz.ru/';
            break;

    }
    $(".input-ind-phone").mask("+7 (999) 999-9999");
    $(".input-org-lead-phone").mask("+7 (999) 999-9999");
    $(".input-org-proj-lead-phone").mask("+7 (999) 999-9999");

    $('.lang-switcher').on('click', '.rus', function(){
        switch (window.location.href) {
            case 'https://socforum.niioz.ru/en/en-forum-2020/':
                window.location.href = 'https://socforum.niioz.ru/ru/forum-2020/';
                break;
            case 'https://socforum.niioz.ru/en/en-forum-2019/':
                window.location.href = 'https://socforum.niioz.ru/ru/forum-2019/';
                break;
            case 'https://socforum.niioz.ru/en/':
                window.location.href = 'https://socforum.niioz.ru/';
                break;
        }

    });

    $('.lang-switcher').on('click', '.eng', function(){
        switch (window.location.href) {
            case 'https://socforum.niioz.ru/ru/forum-2020/':
                window.location.href = 'https://socforum.niioz.ru/en/en-forum-2020/ ';
                break;
            case 'https://socforum.niioz.ru/ru/forum-2019/':
                window.location.href = 'https://socforum.niioz.ru/en/en-forum-2019/ ';
                break;
            case 'https://socforum.niioz.ru/ru/':
                window.location.href = 'https://socforum.niioz.ru/en/';
                break;
            case 'https://socforum.niioz.ru/':
                window.location.href = 'https://socforum.niioz.ru/en/';
                break;
        }

    });

    $('#all-news').on('click', function(){
        $('#news').find('.one-news').each(function(){
           $(this).removeClass('hidden');
        })
    });

    $('#wp-admin-bar-reglist').on('click', function(e){

        if(!$(this).hasClass('download')){

            e.preventDefault();
            e.stopPropagation();

            let btn = $(this);
            $.ajax({
                    url: "/wp-admin/admin-ajax.php",
                    type: 'POST',
                    data: {action: 'excel_reglist'}
            })
            .done(function(result){
               btn.html(result).addClass('download');
            })
            .fail(function() {
                alert('Произошла ошибка');
            }).always(function(){
                return false;
            });
        }
    });

    /* Закрыть остальные вкладки */
    function closeOtherButtonTab(thisButtonName='')
    {
        let obj = {
            "btn-uslovia": 'uslovia-uchastia',
            "btn-cs-streams": 'cs-streams-block',
            "btn-library-open": 'library-block',
            "btn-news-open": 'news-block'
        };

        $.each(obj, function(key, value)
        {
            if (key != thisButtonName)
            {
                if($('.' + key).hasClass('active-open-btn'))
                {
                    console.log("key=" + key + " value=" + value);
                    $('.' + key).removeClass('active-open-btn');
                    $('.' + value).slideToggle("slow");
                }
            }
        });

    }

    $('.btn-uslovia').on('click', function () {

        if ($('.btn-uslovia').hasClass('active-open-btn')){
            $('.btn-uslovia').removeClass('active-open-btn');
            const el = document.getElementById('linkShowHidden');
            el.scrollIntoView();
        }else{
            closeOtherButtonTab('btn-uslovia');
            $('.btn-uslovia').addClass('active-open-btn');
        }
        $('.uslovia-uchastia').slideToggle("slow");
    });

    // $('.btn-marathonprogram').on('click', function () {
    //     if($(this).hasClass('active-open-btn')){
    //         $(this).removeClass('active-open-btn');
    //     }else{
    //         $(this).addClass('active-open-btn');
    //     }
    //     $('.marathon-program').slideToggle("slow");
    //
    //     // const el = document.getElementById('linkShowHidden');
    //     // el.scrollIntoView();
    // });

    $('.btn-cs-streams').on('click', function () {

        if($('.btn-cs-streams').hasClass('active-open-btn')){
            $('.btn-cs-streams').removeClass('active-open-btn');
            const el = document.getElementById('linkShowHidden');
            el.scrollIntoView();
        }else{
            closeOtherButtonTab('btn-cs-streams');
            $('.btn-cs-streams').addClass('active-open-btn');

        }
        $('.cs-streams-block').slideToggle("slow");

        // const el = document.getElementById('linkShowHidden');
        // el.scrollIntoView();
    });

    $('.btn-library-open').on('click', function () {

        if($('.btn-library-open').hasClass('active-open-btn')){
            $('.btn-library-open').removeClass('active-open-btn');
            const el = document.getElementById('linkShowHidden');
            el.scrollIntoView();
        }else{
            closeOtherButtonTab('btn-library-open');
            $('.btn-library-open').addClass('active-open-btn');

        }
        $('.library-block').slideToggle("slow");

        // const el = document.getElementById('linkShowHidden');
        // el.scrollIntoView();
    });

    $('.btn-news-open').on('click', function () {

        if($('.btn-news-open').hasClass('active-open-btn')){
            $('.btn-news-open').removeClass('active-open-btn');
            const el = document.getElementById('linkShowHidden');
            el.scrollIntoView();
        }else{
            closeOtherButtonTab('btn-news-open');
            $('.btn-news-open').addClass('active-open-btn');

        }
        $('.news-block').slideToggle("slow");

        // const el = document.getElementById('linkShowHidden');
        // el.scrollIntoView();
    });


    $('.btn-estimate').on('click', function () {

        // $('.about-estimate').slideToggle("slow");
        // let headerH = 80;
        // $('.sf-menu a').removeClass('active');
        // $(this).addClass('active');
        //
        //
        //     const el = document.getElementById('linkShowHidden');
        //     el.scrollIntoView();
        // $('html, body').animate({
        //     scrollTop: $('.btn-estimate').offset().top - headerH  + 'px'
        // }, {
        //     duration: 1200,
        //     easing: 'easeInOutExpo'
        // });


        if($('.btn-estimate').hasClass('active')){
            $('.btn-estimate').removeClass('active');
            //const el = document.getElementById('linkShowHidden');
            //el.scrollIntoView();
        }else{
            $('.btn-estimate').addClass('active');
        }
        $('.about-estimate').slideToggle("slow");
    });

    $('.open-modal-konkurs').on('click', function () {
        let block_k = $(this).parent().parent().siblings('.konkurs-opisanie').html();
        console.log(block_k);
        $('#modal-konkurs .modal-body').html(block_k);
    });

    $('#excel_registration').on('click', function () {

        let block = $(this).parent();
        $.ajax({
            url: "/wp-admin/admin-ajax.php",
            type: 'POST',
            data: {
                action: 'excel_reglist',
            },
            timeout: 10000
        }).done(function (result) {
            console.log(result);
            block.append(result);
        }).always(function (result) {

        });
    });
});
$(document).ready(function($) {
    $('.popup-close').click(function() {
        $(this).parents('.popup-fade').fadeOut();
        return false;
    });

    $(document).keydown(function(e) {
        if (e.keyCode === 27) {
            e.stopPropagation();
            $('.popup-fade').fadeOut();
        }
    });

    $('.popup-fade').click(function(e) {
        if ($(e.target).closest('.popup').length == 0) {
            $(this).fadeOut();
        }
    });
    $('#competition img').click(function(){
        var src = $(this).attr('src');
        src = src.replaceAll('-300x217', '');
        src = src.replaceAll('-768x556', '');
        src = src.replaceAll('-1024x741', '');
        console.log('clicked ' +  src);
        $('.popup-fade').fadeIn();
        $('.popup').css('backgroundImage', 'url(' +  src + ')');
        return false;
    });
});

document.querySelector("html").classList.add('js');


let blockquote = document.querySelector(".blockquote-custom-icon");
blockquote.innerHTML = "<i class=\"fa fa-quote-left text-white\"></i>";

function getTimeRemaining(endtime) {
    let t = Date.parse(endtime) - Date.parse(new Date());
    let minutes = Math.floor((t / 1000 / 60) % 60);
    let hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    let days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
        'total': t,
        'days': days,
        'hours': hours,
        'minutes': minutes
    };
}
var decCache = [],
    decCases = [2, 0, 1, 1, 1, 2];
function decOfNum(number, titles)
{
    if(!decCache[number]) decCache[number] = number % 100 > 4 && number % 100 < 20 ? 2 : decCases[Math.min(number % 10, 5)];
    return titles[decCache[number]];
}

function initializeClock(id, endtime) {
    let clock = document.getElementById(id);
    let days = clock.querySelector('.salida_days_counter');


    function updateClock() {
        let t = getTimeRemaining(endtime);

        // let daysHTML = decOfNum(t.days, ['день', 'дня', 'дней']);
        // let hoursHTML  = decOfNum(t.hours, ['час', 'часа', 'часов']); //подставить 1, 3, 5
        // let minutesHTML  = decOfNum(t.minutes, ['минута', 'минуты', 'минут']);
        // clock.innerHTML = t.days + " " + daysHTML + ", " + t.hours + " " + hoursHTML + ", " + t.minutes + " " + minutesHTML + ".";
        days.innerHTML = "test";
        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }

    updateClock();
    let timeinterval = setInterval(updateClock, 1000);
}

let deadline = '10/01/2021';
initializeClock('clock', deadline);

/** Показать/скрыть блок*/
function blockShowHidden()
{
    document.getElementById("auth").hidden = !document.getElementById("auth").hidden;
    const el = document.getElementById('linkShowHidden');
    el.scrollIntoView();
}