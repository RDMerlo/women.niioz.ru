
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
get_header();
$assets_uri = get_template_directory_uri() . '/assets/';
?>


<?php get_template_part('blocks-templates-ru/main', 'slider')?>
<?php get_template_part('blocks-templates-ru/main', 'about')?>
<?php get_template_part('blocks-templates-ru/main', 'competition')?>
<?php get_template_part('blocks-templates-ru/main', 'education')?>
<?php get_template_part('blocks-templates-ru/main', 'projects')?>
<?php get_template_part('blocks-templates-ru/main', 'contacts')?>

<?php
get_footer();
?>

