jQuery( document ).ready(function() {

    switch (window.location.href) {
        case 'https://hl.niioz.ru/ru/':
            window.location.href = 'https://hl.niioz.ru/';
            break;

    }
    $(".input-phone").mask("+7 (999) 999-9999");

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

    $('.btn-uslovia').on('click', function () {
        switch (window.location.href) {
            case 'https://socforum.niioz.ru/en/':
                if ($(this).text() === "the terms of participation") {
                    $(this).text("hide terms");
                } else {
                    $(this).text("the terms of participation");
                }
                break;
            case 'https://socforum.niioz.ru/ru/':
                if ($(this).text() === "условия участия") {
                    $(this).text("скрыть условия");
                } else {
                    $(this).text("условия участия");
                }
                break;
            case 'https://socforum.niioz.ru/':
                if ($(this).text() === "условия участия") {
                    $(this).text("скрыть условия");
                } else {
                    $(this).text("условия участия");
                }
                break;
        }



        $('.uslovia-uchastia').slideToggle("slow");
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

var fileInput  = document.querySelector( ".input-file" ),
    button     = document.querySelector( ".input-file-trigger" ),
    the_return = document.querySelector(".file-return");

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

