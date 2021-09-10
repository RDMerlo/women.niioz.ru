<?php
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