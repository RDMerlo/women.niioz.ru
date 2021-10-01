
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$assets_uri = get_template_directory_uri() . '/assets/';
?>

<?php get_template_part('blocks-templates-ru/main', 'slider')?>
<?php get_template_part('blocks-templates-ru/main', 'about')?>
<?php get_template_part('blocks-templates-ru/main', 'opinions')?>
<?php get_template_part('blocks-templates-ru/main', 'ewf-2021')?>

<?php
    //проверка на то залогинен ли пользователь или нет
    if(is_user_logged_in()):
?>
<!--        --><?php //get_template_part('blocks-templates-ru/main', 'businessprogram'); //деловая программа?>
<!--        --><?php //get_template_part('blocks-templates-ru/main', 'webinarsexperts'); //вебинары с экспертами?>
<!--        --><?php //get_template_part('blocks-templates-ru/main', 'flashmobs'); //флешмобы?>
<?php endif; ?>
<?php get_template_part('blocks-templates-ru/main', 'competition')?>
<?php get_template_part('blocks-templates-ru/main', 'healthyprofile')?>
<?php get_template_part('blocks-templates-ru/main', 'partners')?>
<?php get_template_part('blocks-templates-ru/main', 'speakers')?>
<?php get_template_part('blocks-templates-ru/main', 'contacts')?>
<?php //get_template_part('blocks-templates-ru/main', 'konkurs')?>

<?php
get_footer();
?>

