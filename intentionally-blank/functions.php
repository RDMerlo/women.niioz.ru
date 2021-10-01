<?php

//update_option('siteurl', 'http://womenhealth.ru/');
//update_option('home', 'http://womenhealth.ru/');

//update_option('siteurl', 'https://women.niioz.ru');
//update_option('home', 'https://women.niioz.ru');


/**
 * Intentionally Blank Theme functions
 *
 * @package WordPress
 * @subpackage intentionally-blank
 */

if (!defined('ASSETSURI')) {
    define('ASSETSURI', get_template_directory_uri() . '/assets/');
}

require_once get_stylesheet_directory() . '/functions/excel-funcs.php';

if (!function_exists('blank_setup')) :
    /**
     * Sets up theme defaults and registers the various WordPress features that
     * this theme supports.
     */
    function blank_setup()
    {
        load_theme_textdomain('intentionally-blank');
        add_theme_support('automatic-feed-links');

        add_theme_support('title-tag');

        // This theme allows users to set a custom background.
        add_theme_support('custom-background', apply_filters('intentionally_blank_custom_background_args', array(
            'default-color' => 'f5f5f5',
        )));

        add_theme_support('custom-logo');
        add_theme_support('custom-logo', array(
            'height' => 256,
            'width' => 256,
            'flex-height' => true,
            'flex-width' => true,
            'header-text' => array('site-title', 'site-description'),
        ));

        /**
         * Sets up theme defaults and registers the various WordPress features that
         * this theme supports.
         */
        function blank_custom_logo()
        {
            if (function_exists('the_custom_logo')) {
                the_custom_logo();
            }
        }

        add_theme_support('post-thumbnails');
    }
endif; // end function_exists blank_setup.
add_action('after_setup_theme', 'blank_setup');


add_action('customize_register', function ($wp_customize) {
    $wp_customize->remove_section('static_front_page');
});

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{

    // Get the theme data
    $the_theme = wp_get_theme();
    $assets_uri = get_template_directory_uri() . '/assets/';
    wp_enqueue_style('custom', $assets_uri . 'css/custom.css', array(), rand(1, 999999));
    wp_enqueue_style('bootstrap', $assets_uri . 'plugins/bootstrap/css/bootstrap.min.css', array(), rand(1, 999999));
    wp_enqueue_style('font-awesome', $assets_uri . 'plugins/fontawesome/css/font-awesome.min.css', array(), rand(1, 999999));
    wp_enqueue_style('bootstrap-select', $assets_uri . 'plugins/bootstrap-select/bootstrap-select.min.css', array(), rand(1, 999999));
    wp_enqueue_style('owl-carousel', $assets_uri . 'plugins/owlcarousel2/assets/owl.carousel.min.css', array(), rand(1, 999999));
    wp_enqueue_style('owl-theme-default', $assets_uri . 'plugins/owlcarousel2/assets/owl.theme.default.min.css', array(), rand(1, 999999));
    wp_enqueue_style('prettyPhoto', $assets_uri . 'plugins/prettyphoto/css/prettyPhoto.css', array(), rand(1, 999999));
    wp_enqueue_style('animate', $assets_uri . 'plugins/animate/animate.min.css', array(), rand(1, 999999));
    wp_enqueue_style('jquery-countdown', $assets_uri . 'plugins/countdown/jquery.countdown.css', array(), rand(1, 999999));
    wp_enqueue_style('theme', $assets_uri . 'css/theme.css', array(), rand(1, 999999));
    wp_enqueue_style('theme-green', $assets_uri . 'css/theme-green-2.css', array(), rand(1, 999999));
    wp_enqueue_style('fancybox', $assets_uri . 'js/fancybox/jquery.fancybox.css', array(), rand(1, 999999));

    wp_enqueue_script('modernizr', $assets_uri . 'plugins/modernizr.custom.js', array(), rand(1, 999999), true);
    wp_enqueue_script('bootstrap', $assets_uri . 'plugins/bootstrap/js/bootstrap.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('bootstrap-select', $assets_uri . 'plugins/bootstrap-select/bootstrap-select.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('superfish', $assets_uri . 'plugins/superfish/js/superfish.js', array(), rand(1, 999999), true);
    wp_enqueue_script('prettyPhoto', $assets_uri . 'plugins/prettyphoto/js/jquery.prettyPhoto.js', array(), rand(1, 999999), true);
    wp_enqueue_script('placeholdem', $assets_uri . 'plugins/placeholdem.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('smoothscroll', $assets_uri . 'plugins/jquery.smoothscroll.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('jquery-easing', $assets_uri . 'plugins/jquery.easing.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('jquery.maskedinput.min.js', $assets_uri . 'js/jquery.maskedinput.min.js', array(), rand(1, 999999), true);

    //wp_deregister_script('jquery');
    wp_enqueue_script('owl-carousel', $assets_uri . 'plugins/owlcarousel2/owl.carousel.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('waypoints', $assets_uri . 'plugins/waypoints/waypoints.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('jquery-plugin', $assets_uri . 'plugins/countdown/jquery.plugin.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('jquery-countdown', $assets_uri . 'plugins/countdown/jquery.countdown.min.js', array(), rand(1, 999999), true);
    wp_enqueue_script('flipclock', $assets_uri . 'plugins/flipclock.js', array(), rand(1, 999999), true);
//    wp_enqueue_script( 'google-maps', 'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false', array(), $the_theme->get( 'Version' ), true );
    wp_enqueue_script('yandex-maps', 'https://api-maps.yandex.ru/2.1/?apikey=92aadfec-385f-4082-91a4-805e936ad368&lang=ru_RU', array(), rand(1, 999999), true);

    wp_enqueue_script('theme-ajax-mail', $assets_uri . 'js/theme-ajax-mail.js', array(), rand(1, 999999), true);
    wp_enqueue_script('theme', $assets_uri . 'js/theme.js', array('jquery', 'jquery-plugin'), rand(1, 999999), true);
    wp_enqueue_script('custom', $assets_uri . 'js/custom.js', array(), rand(1, 999999), true);
    wp_enqueue_script('fancybox', $assets_uri . 'js/fancybox/jquery.fancybox.js', array(), rand(1, 999999), true);





}

add_filter('user_contactmethods', 'my_user_contactmethods');

function my_user_contactmethods($user_contactmethods)
{

    $user_contactmethods['organization'] = 'Организация';
    $user_contactmethods['position'] = 'Должность';
    $user_contactmethods['phone'] = 'Телефон';


    return $user_contactmethods;
}

add_action('wp_ajax_nopriv_register_user', 'register_user');
add_action('wp_ajax_register_user', 'register_user');
function register_user()
{

    $fio = filter_input(INPUT_POST, 'fio', FILTER_SANITIZE_STRING);
    $project_theme = filter_input(INPUT_POST, 'project_theme', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $organization = filter_input(INPUT_POST, 'organization', FILTER_SANITIZE_STRING);
    $position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);

    $motivate_file = $_FILES['motivate_file'];

    $reg_data = array(
        'post_title' => $fio,
        'post_content' => '',
        'post_status' => 'publish',
        'post_type' => 'participants_2021',
        'post_author' => 1,

    );


    // Вставляем данные в БД
    $reg_id = wp_insert_post(wp_slash($reg_data));

    if (is_wp_error($reg_id)) {
        return $reg_id->get_error_message();
        wp_die();
    }

    update_post_meta($reg_id, 'fio', $fio);
    update_post_meta($reg_id, 'project_theme', $project_theme);
    update_post_meta($reg_id, 'email', $email);
    update_post_meta($reg_id, 'organization', $organization);
    update_post_meta($reg_id, 'position', $position);
    update_post_meta($reg_id, 'phone', $phone);
    if (isset($_FILES['motivate_file']) && !empty($_FILES['motivate_file'])) {
        $iAttachmentId = media_handle_upload('motivate_file', 0);
        update_post_meta($reg_id, 'motivate_file', $iAttachmentId);
    }
    $sMotivateFileUrl = wp_get_attachment_url($iAttachmentId);

    $body = "ФИО: {$fio}<br>
                    Тема проекта: {$project_theme}<br>
                    E-Mail: {$email}<br>
                    Наименование организации: {$organization}<br>
                    Должность: {$position}<br>
                    Телефон: {$phone}<br>
                    <a href='{$sMotivateFileUrl}'>Мотивационное письмо</a>
                    ";

    $to = 'instruktor@zdrav.mos.ru';

    $subject = 'Получена новая заявка на участие в конкурсе';
    mail( $to, $subject, $body, "Content-type:text/html; charset=utf-8\r\nFrom:instruktor@zdrav.mos.ru" );

    wp_die();

}

/**
 * Получает нужные поля после аякс запроса
 * @param array $arrInputNames имена полей
 * @return array массив готовых значений
 */
function getInputPostData(array $arrInputNames) : array
{
    $arResArray = [];
    foreach ($arrInputNames as $sInputName){
        $arResArray[$sInputName] =  filter_input(INPUT_POST, $sInputName);
    }
    return $arResArray;
}

/**
 * Обновляет кастомные поля у пользователя
 * @param int $iPostId
 * @param array $arInputData
 */
function updatePostMeta(int $iPostId, array $arInputData)
{
    foreach ($arInputData as $sKey => $sVal){
        $sKey = str_replace('input-', '', $sKey);
        update_post_meta($iPostId, $sKey, $sVal);
    }

}

add_action('wp_ajax_nopriv_add_participant', 'add_participant');
add_action('wp_ajax_add_participant', 'add_participant');

function GetFilesId(int $postId, string $sIdInput)
{
    $iId = 0;

    if (isset($_FILES[$sIdInput]) && !empty($_FILES[$sIdInput]))
    {
        $iId = media_handle_upload($sIdInput, 0);
        update_post_meta($postId, $sIdInput, $iId);
    }


    return is_wp_error($iId);
}

function add_participant()
{
    //индексы полей
    $arInputNames = [
             'input-org-name',
             'input-ind-fio',
             'input-org-lead-fio',
             'input-org-proj-lead-fio',
             'email',
             'org-lead-email',
             'org-proj-lead-email',
             'phone',
             'org-lead-phone',
             'org-proj-lead-phone',
             'input-org-lead-position',
             'input-org-proj-lead-position',
             'input-ind-living-place',
             'input-org-living-place',
             'input-org-project-sphere',
             'input-proj-title',
             'input-proj-task',
             'input-project-essence',
             'input-auditory',
             'input-status',
             'input-results',
             'input-realize-info',
             'input-video',
    ];

    //текст полей
    $arInputText= [
        'input-org-name' => 'Наименование организации: ',
        'input-ind-fio' => 'ФИО: ',
        'input-org-lead-fio' => 'ФИО руководителя организации: ',
        'input-org-proj-lead-fio' => 'ФИО руководителя проекта: ',
        'email' => 'Email: ',
        'org-lead-email' => 'Email руководителя организации: ',
        'org-proj-lead-email' => 'Email руководителя проекта: ',
        'phone' => 'Телефон: ',
        'org-lead-phone' => 'Телефон руководителя организации: ',
        'org-proj-lead-phone' => 'Телефон руководителя проекта: ',
        'input-org-lead-position' => 'Должность руководителя организации: ',
        'input-org-proj-lead-position' => 'Должность руководителя проекта: ',
        'input-ind-living-place' => 'Место проживания: ',
        'input-org-living-place' => 'Адрес места нахождения организации: ',
        'input-org-project-sphere' => 'Сфера деятельности проекта: ',
        'input-proj-title' => 'Название: ',
        'input-proj-task' => 'Цель и задачи: ',
        'input-project-essence' => 'Суть проекта: ',
        'input-auditory' => 'Целевая аудитория: ',
        'input-status' => 'Статус («Зрелость» проекта): ',
        'input-results' => 'Результаты проекта: ',
        'input-realize-info' => 'Информация о реализации проекта: ',
        'input-video' => 'Ссылка на видеоролик: ',
    ];

    $arParticipantData = getInputPostData($arInputNames);

    $sPostTitle = "";
    if ($arParticipantData['input-ind-fio'] != "" )
    {
        $sPostTitle = $arParticipantData['input-ind-fio'];
    }
    else if ($arParticipantData['input-org-name'] != "")
    {
        $sPostTitle = $arParticipantData['input-org-name'];
    }

    $postData = array(
        'post_title' => $sPostTitle,
        'post_content' => '',
        'post_status' => 'publish',
        'post_type' => 'participants_2021',
        'post_author' => 1,

    );

    $postId = wp_insert_post(wp_slash($postData));

    if (is_wp_error($postId)) {
        return $postId->get_error_message();
        wp_die();
    }

    updatePostMeta($postId, $arParticipantData);

    $arHTMLBlock = "";
    foreach ($arParticipantData as $sKey => $sVal)
    {
        if ($sVal!="")
        {
            $arHTMLBlock .= "<tr bgcolor='#eeffee'>
                                <td>{$arInputText[$sKey]}</td>
                                <td>{$sVal} </td>
                             </tr><br>
                             ";
        }
    }

    $arFileId = [
        'presentation_file',
        'photo_file',
        'photo_file_2',
        'photo_file_3',
        'video_file',
    ];

    $iId = GetFilesId($postId, 'presentation_file');

    $iPresentationAttachmentId = 0;
    $iPhotoAttachmentId = 0;
//    $iPhotoAttachmentId2 = 0;
//    $iPhotoAttachmentId3 = 0;
//    $iVideoAttachmentId = 0;


    if (isset($_FILES['presentation_file']) && !empty($_FILES['presentation_file'])) {
        $iPresentationAttachmentId = media_handle_upload('presentation_file', 0);
        update_post_meta($postId, 'presentation_file', $iPresentationAttachmentId);
    }

    var_dump($iPresentationAttachmentId);

    if (isset($_FILES['photo_file']) && !empty($_FILES['photo_file'])) {
        $iPhotoAttachmentId = media_handle_upload('photo_file', 0);
        update_post_meta($postId, 'photo_file', $iPhotoAttachmentId);
    }

//    if (isset($_FILES['photo_file_2']) && !empty($_FILES['photo_file_2'])) {
//        $iPhotoAttachmentId2 = media_handle_upload('photo_file_2', 0);
//        update_post_meta($postId, 'photo_file_2', $iPhotoAttachmentId2);
//    }
//
//    if (isset($_FILES['photo_file_3']) && !empty($_FILES['photo_file_3'])) {
//        $iPhotoAttachmentId3 = media_handle_upload('photo_file_3', 0);
//        update_post_meta($postId, 'photo_file_3', $iPhotoAttachmentId3);
//    }
//
//    if (isset($_FILES['video_file']) && !empty($_FILES['video_file'])) {
//        $iVideoAttachmentId = media_handle_upload('video_file', 0);
//        update_post_meta($postId, 'video_file', $iVideoAttachmentId);
//    }

    $sPresentationFileUrl = wp_get_attachment_url($iPresentationAttachmentId);
    $sPhotoFileUrl = wp_get_attachment_url($iPhotoAttachmentId);
//    $sPhotoFileUrl2 = wp_get_attachment_url($iPhotoAttachmentId2);
//    $sPhotoFileUrl3 = wp_get_attachment_url($iPhotoAttachmentId3);
//    $sVideoFileUrl = wp_get_attachment_url($iVideoAttachmentId);

    $htmlURLPresentation = "";
    $htmlURLPhoto1 = "";
//    $htmlURLPhoto2 = "";
//    $htmlURLPhoto3 = "";
//    $htmlURLVideoLink = "";

    if ($sPhotoFileUrl != "")
    {
        $htmlURLPhoto1 = "<tr bgcolor='#eeffee'>
                            <td>Фото иллюстрирующая суть проекта: </td>
                            <td><a href='$sPhotoFileUrl' target='_blank'>ссылка</a> </td>
                          </tr><br>
                         ";
    }

    if ($sPresentationFileUrl != "")
    {
        $htmlURLPresentation = "<tr bgcolor='#eeffee'>
                                    <td>Ссылка на презентацию: </td>
                                    <td><a href='{$sPresentationFileUrl}' target='_blank'>ссылка</a> </td>
                                 </tr><br>
                                ";
    }


    $body = "<!doctype html>
                    <html lang=\"en\">
                    <head>
                        <meta charset=\"UTF-8\">
                        <meta name=\"viewport\"
                              content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
                        <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
                        <title>women.niioz.ru</title>
                    </head>
                    <body>  
                        {$arHTMLBlock}
                        {$htmlURLPresentation}
                        {$htmlURLPhoto1}
                    </body>
                    </html>";
    
    $to = 'women@zdrav.mos.ru';
//        $to = 'bernadodk@zdrav.mos.ru';
//        $to = 'niiozmm_lica@mail.ru';

        $subject = 'Women: новый участник';

        require 'assets/php/PHPMailer.php';
        $mail = new \PHPMailer\PHPMailer\PHPMailer();
        $mail->CharSet = 'utf-8';
        $mail->setFrom('women@no-reply.ru', 'women');

        $mail->addAddress($to);
//        $mail->addAddress('rgwlbv@yandex.ru');
//        $mail->addAddress('vladkamvl@yandex.ru');
        $mail->Subject = $subject;

        $mail->msgHTML($body);

        if (!$mail->send()) {
            echo -1;
            die();
        }

    /*Ответ*/

    //FIXME: просто "заглушка", лучше поставить что-то другое
    $replyto = "women@no-reply.ru";

    if ($arParticipantData['email'] != "")
        $replyto = $arParticipantData['email'];
    else if ($arParticipantData['org-proj-lead-email'] != "")
        $replyto = $arParticipantData['org-proj-lead-email'];
    else if ($arParticipantData['org-lead-email'] != "")
        $replyto = $arParticipantData['org-lead-email'];

    $replymail = new \PHPMailer\PHPMailer\PHPMailer();
    $replymail->CharSet = 'utf-8';
    $replymail->setFrom('women@no-reply.ru', 'women');

    $replymail->addAddress($replyto);
    $replymail->Subject = "Ваша заявка принята!";

    $message = "
    <html>
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\"
                  content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
            <title>women.niioz.ru</title>
        </head>
    <body>
        <p>Здравствуйте!</p>
        <p>
            Ваша заявка принята. Благодарим за участие.
        </p>
        <p>
            <i>
                С уважением,
                <br>
                команда проекта «Женщины за здоровое общество»
            </i>
        </p>
    </body>
</html>";

    $replymail->msgHTML($message);

    if (!$replymail->send()) {
        echo -1;
        die();
    }



    echo '123';

    wp_die();
}

add_action('wp_ajax_nopriv_send_message', 'send_message');
add_action('wp_ajax_send_message', 'send_message');
function send_message()
{

    $fio = filter_input(INPUT_POST, 'fio', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if (!$email || !$message) {
        wp_die();
    }

    $body = "<html>
    <head>
        <style type='text/css'>
        </style>
    </head>
    <body>
    <table width='550' border='0' cellspacing='0' cellpadding='15'>
        <tr bgcolor='#eeffee'>
            <td>ФИО</td>
            <td>{$fio}</td>
        </tr>

        <tr bgcolor='#eeeeff'>
            <td>Email</td>
            <td>{$email}</td>
        </tr>
        <tr bgcolor='#eeffee'>
            <td>Текст сообщения</td>
            <td>{$message}</td>
        </tr>
    </table>
    </body>
    </html>";

    $to = 'instructor@zdrav.mos.ru';

    $subject = 'hl.niioz.ru: сообщение с сайта';

    mail($to, $subject, $body, "Content-type:text/html; charset=utf-8\r\nFrom:{$email}");

    wp_die();

}


## Добавляем все типы записей в виджет "Прямо сейчас" в консоли
add_action('dashboard_glance_items', 'add_right_now_info');
function add_right_now_info($items)
{

    if (!current_user_can('edit_posts')) return $items; // выходим

    // типы записей
    $args = array('public' => true, '_builtin' => false);

    $post_types = get_post_types($args, 'object', 'and');

    foreach ($post_types as $post_type) {
        $num_posts = wp_count_posts($post_type->name);
        $num = number_format_i18n($num_posts->publish);
        $text = _n($post_type->labels->singular_name, $post_type->labels->name, intval($num_posts->publish));

        $items[] = "<a href=\"edit.php?post_type=$post_type->name\">$num $text</a>";
    }

    // таксономии
    $taxonomies = get_taxonomies($args, 'object', 'and');

    foreach ($taxonomies as $taxonomy) {
        $num_terms = wp_count_terms($taxonomy->name);
        $num = number_format_i18n($num_terms);
        $text = _n($taxonomy->labels->singular_name, $taxonomy->labels->name, intval($num_terms));

        $items[] = "<a href='edit-tags.php?taxonomy=$taxonomy->name'>$num $text</a>";
    }

    // пользователи
    global $wpdb;

    $num = $wpdb->get_var("SELECT COUNT(ID) FROM $wpdb->users");
    $text = _n('User', 'Users', $num);

    $items[] = "<a href='users.php'>$num $text</a>";

    return $items;
}

add_action('admin_bar_menu', 'admin_bar_reglist_option', 100);
function admin_bar_reglist_option()
{
    global $wp_admin_bar;
    if (!is_super_admin() || !is_admin_bar_showing())
        return;
    $wp_admin_bar->add_menu(
        array('id' => 'reglist',
            'title' => __('Выгрузить зарегистрированных'),
            'href' => admin_url('#')
        )
    );
}

//add_action( 'template_redirect', function() {
//    if ( ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/ru/' || $_SERVER['REQUEST_URI'] == '/ru')  ) {
//        wp_redirect( 'https://hl.niioz.ru/', 301 );
//        exit;
//    }
//} );

function true_id($args){
    $args['post_page_id'] = 'ID';
    return $args;
}
function true_custom($column, $id){
    if($column === 'post_page_id'){
        echo $id;
    }
}

add_filter('excerpt_more', function($more) {
    return '...';
});
/*
 * Для вывода ID страниц в админке
 */
add_filter('manage_pages_columns', 'true_id', 5);
add_action('manage_pages_custom_column', 'true_custom', 5, 2);
add_filter('manage_posts_columns', 'true_id', 5);
add_action('manage_posts_custom_column', 'true_custom', 5, 2);

/*
 * Функции страниц.
 *
 * т.к. в PHP нет перегрузок функций, то:
 * главный параметр является $id (индекс страницы).
 * дополнительный параметр может являться блок кода.
 * дополнительные параметры требуется передавать со значением  по умолчанию null.
 * все дополнительные параметры требуется обязательно проверять на null перед его преминением.
 * если весь код "шаблона" требуется переделывать, то лучше создать для каждой реализации отдельные функции
 * ,а в основной функции уже вызывать нужную функцию через проверку доп. параметра
 * TODO: лучше придумать что-то другое.
 */

/** Блок Текст контент */
function blockTextContent(int $id, $iconTitle = "fa-info")
{
    $sTitle = get_field('title_ru', $id);
    if ($sTitle):
        ?>
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa <?=$iconTitle;?> fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?=$sTitle?><small></small></span>
        </h1>
    <?
    endif;
    ?>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <p>
                <?php
                $sContent = get_field('content_ru', $id);
                $sContent = str_replace( "<p></p>", "<br />", $sContent );
//                var_dump(htmlspecialchars($sContent));
                if ($sContent):
                    echo $sContent;
                endif;
                ?>
            </p>

        </div>
    </div>
    <?
}

/** Блок Направления програм */
function blockDirectionsPrograms($id)
{
    $arSections = CFS()->get('sections_ru', $id);
    $arTitle = CFS()->get('programs_title_ru', $id);
    if ($arTitle): ?>
        <br>
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa <?=$iconTitle;?> fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?=$arTitle;?><small></small></span>
        </h1>
    <?php endif;
    if ($arSections): ?>
<!--        <div class="panel panel-default">-->
            <div class="panel-body about-ul">
                <ul>
                    <?php foreach($arSections as $arSection): ?>
                        <li>
                            <?=$arSection['title']?>
                        </li>
                    <? endforeach; ?>
                </ul>
            </div>
<!--        </div>-->
    <?php endif;
}

/** Блок Направления програм. Текст после программ */
function blockTextNextProgram($id)
{
    ?>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <?
            $sTextNextProg = CFS()->get('text_after_program_ru', $id);
            if ($sTextNextProg != ""):
                echo $sTextNextProg;
            endif;
            ?>
        </div>
    </div>
    <?
}

/** Блок Модули */
function blockModules($id)
{
    $sModulesTitle = CFS()->get('modules_title_ru', $id);
    $arModules = CFS()->get('modules_ru', $id);

    if ($sModulesTitle): ?>
        <br>
        <h1 class="section-title">
            <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa fa-info fa-stack-1x"></i></span></span>
            <span data-animation="fadeInRight" data-animation-delay="500" class="title-inner"><?=$sModulesTitle?><small></small></span>
        </h1>

        <?php
        if ($arModules):
            foreach ($arModules as $arModule): ?>
                <br>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="fw-600">
                            <?=$arModule['title']?>
                        </div>
                    </div>
                    <div class="panel-body">
                        <p><?=$arModule['content']?></p>
                    </div>
                </div>
            <?php endforeach;?>
        <?php endif;?>
    <? endif;
}

/** Блок Модули. Текст после модулей */
function blockTextNextModules($id)
{
    ?>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <?
            $sTextNextProg = CFS()->get('text_after_modules_ru', $id);
            if ($sTextNextProg != ""):
                echo $sTextNextProg;
            endif;
            ?>
        </div>
    </div>
    <?
}

/** Блок Экспертные мнения*/
function blokOpinions($id)
{
    $sOpinionsTitle = CFS()->get('opinions_title_ru', $id);
    $arOpinions = CFS()->get('opinions_ru', $id);

    if ($sOpinionsTitle): ?>
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="fw-600">
                    <?=$sOpinionsTitle?>
                </div>
            </div>
        </div>
    <?endif;?>

    <br>
    <!--                <div class="panel-body">-->
    <?php
    if ($arOpinions):
        $i = 0;
        foreach ($arOpinions as $arOpinion):
            ?>
            <div class="col-lg-12 col-md-12 col-xs-12 col-xl-12 margin-bottom">
                <?
                if ($i % 2 == 0):
                    blockColLg4($arOpinion);
                    blockColLg8($arOpinion);
                else:
                    blockColLg8($arOpinion);
                    blockColLg4($arOpinion);
                endif;
                $i += 1;
                ?>
            </div>
        <?
        endforeach;
    endif;
}

/** Блок Экспертные мнения. Личные данные */
function blockColLg4($arOpinion)
{
    ?>
    <div class="col-lg-4">
        <div class="thumbnail no-border no-padding text-center">
            <div class="circle">
                <div class="circle-inner">
                    <div class="media">
                        <img src="<?=$arOpinion['userpic'];?>" alt="">
                    </div>
                </div>
            </div>
            <div class="caption before-media">
                <h3 class="caption-title"><?=$arOpinion['fullname'];?></h3>
                <br>
                <p class="caption-category"><?=$arOpinion['position'];?></p>
            </div>
            <div class="caption">
            </div>
        </div>
    </div>
    <?
}

/** Блок Экспертные мнения. Текст мнения */
function blockColLg8($arOpinion)
{
    ?>
    <div class="col-lg-8">
        <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
            <div class="blockquote-custom-icon bg-theme shadow-sm"></div>
            <p class="mb-0 mt-2 font-italic"><?=$arOpinion['content']?></p>
        </blockquote>
    </div>
    <?
}

/** Блок Экспертные мнения. Текст после мнений */
function blockTextNextOpinions($id, $funcNextText = null)
{
    ?>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <?
            $sTextNextOpinions = CFS()->get('text_after_opinions_ru', $id);
            if ($sTextNextOpinions != ""):
                echo $sTextNextOpinions;
            endif;
            if ($funcNextText != null)
                $funcNextText();
            ?>
        </div>
    </div>
    <?
}

/** Блок Спикеры */
function blockSpeakers($id, $iconTitle = "fa-info")
{
    $arSpeakers = CFS()->get('speakers_ru', $id);

    $sSpeakersTitle = CFS()->get('speakers_title_ru', $id);

    if ($sSpeakersTitle): ?>
    <br>
    <h1 class="section-title">
        <span data-animation="flipInY" data-animation-delay="300" class="icon-inner"><span class="fa-stack"><i class="fa crcle fa-stack-2x"></i><i class="fa <?=$iconTitle;?> fa-stack-1x"></i></span></span>
        <span data-animation="fadeInUp" data-animation-delay="500" class="title-inner"><?=$sSpeakersTitle;?><small> </small></span>
    </h1>
    <?endif;?>

    <br>
    <!--                <div class="panel-body">-->
    <?php
    if ($arSpeakers):

        $intColSpeakers = count($arSpeakers); // Количество спикеров
        $intColRow = ceil($intColSpeakers / 3); // Количество нужных строк
        $intColColumns = 3; // Количество нужных столбцов

        $k = 0; // Индекс текущего элемента в массиве

        // Цикл по строкам
        for ($i = 0; $i < $intColRow && $k < $intColSpeakers; $i++):
            ?>
            <div class="row thumbnails clear">
                <?
                // Цикл по столбцам
                for ($j = 0; $j < $intColColumns && $k < $intColSpeakers; $j++):
                    ?>
                    <div class="col-sm-6 col-md-4 animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="500">
                        <div class="thumbnail no-border no-padding text-center">
                            <div class="circle">
                                <div class="circle-inner">
                                    <div class="media">
                                        <img src="<?=$arSpeakers[$k]['userpic'];?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="caption before-media">
                                <h3 class="caption-title"><?=$arSpeakers[$k]['fullname'];?></h3><br>
                                <p class="caption-category"><?=$arSpeakers[$k]['position'];?></p>
                            </div>
                            <div class="caption"></div>
                        </div>
                    </div>
                    <?
                    $k += 1;
                endfor;
                ?>
            </div>
        <?
        endfor;
    endif;
}

/** Скрытый блок */
function blockHidden(int $id, $funcNextText = null)
{
    $sContent = get_field('content_ru', $id);
    $sTitle = get_field('title_ru', $id);
    ?>
    	<div class="linkTextBlock">
    <a class="linkText" id="linkShowHidden" onclick="blockShowHidden()"><?=$sTitle;?></a>
    </div>
<br>
    <br>
    <div id="auth" hidden class="blockHidden">
        <br>
        <?
        if ($sContent):
            echo $sContent;
        endif;
        if ($funcNextText != null)
            $funcNextText();
        ?>
        <br>
        <a class="linkText" onclick="blockShowHidden()">Скрыть</a>
    </div>
    <?
}

function blockTextNextTable($id, $funcNextText = null)
{
    ?>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <?
            $sTextNextOpinions = CFS()->get('text_after_table_ru', $id);
            if ($sTextNextOpinions != ""):
                echo $sTextNextOpinions;
            endif;
            if ($funcNextText != null)
                $funcNextText();
            ?>
        </div>
    </div>
    <?
}

/**
 * Выдает ссылку на главную страницу, либо если мы уже на главной, то пустую строку
 * @return string
 */
function mainPageLink() : string
{
    $sHref = '';
    if(!is_front_page()){
        $sHref = get_site_url() . '/';
    }
    return $sHref;
}

/**
 * Получить трансляции 2021 года
 * @return array
 */
function getStreams() : array
{
    $arRes = [];
    $arArgs = [
        'post_type' => 'streams_2021',
        'post_status' => 'publish',
        'posts_per_page' => '-1',
        'orderby'   => array(
            'post_date' =>'ASC',
        ),
    ];
    $obStreams = new WP_Query($arArgs);
    while ($obStreams->have_posts()) {
        $obStreams->the_post();
        $iId = get_the_ID();
        $sTitle = get_field('stream_title', $iId);
        $sLabel = get_field('stream_label', $iId);
        $sContent = get_field('stream_content', $iId);
        $sStartTime = get_field('stream_start_time', $iId);
        $sEndTime = get_field('stream_end_time', $iId);
        $sStreamType= get_field('stream_type', $iId);
        $sStreamPlace= get_field('stream_place', $iId);
        $sStreamLink= get_field('stream_link', $iId);

        $arRes[] = [
            'id' => $iId,
            'title' => $sTitle,
            'label' => $sLabel,
            'content' => $sContent,
            'start_time' => $sStartTime,
            'end_time' => $sEndTime,
            'place' => $sStreamPlace,
            'type' => $sStreamType,
            'link' => $sStreamLink,
        ];
    }
    return $arRes;
}