<?php


get_header();

$assets_uri = get_template_directory_uri() . '/assets/';

?>
    <?php get_template_part('blocks-templates/main', 'slider')?>
    <?php get_template_part('blocks-templates/main', 'about')?>
    <?php get_template_part('blocks-templates/main', 'news')?>
    <?php get_template_part('blocks-templates/main', 'speakers')?>
    <?php get_template_part('blocks-templates/main', 'uchastnikam')?>
    <?php get_template_part('blocks-templates/main', 'shedule')?>
    <?php get_template_part('blocks-templates/main', 'register')?>
    <?php get_template_part('blocks-templates/main', 'konkurs')?>
    <?php //get_template_part('blocks-templates/main', 'faq')?>
    <?php get_template_part('blocks-templates/main', 'location')?>
    <?php get_template_part('blocks-templates/main', 'contacts')?>
    <?php get_template_part('blocks-templates/main', 'sponsors')?>

<?php
        get_footer();
?>