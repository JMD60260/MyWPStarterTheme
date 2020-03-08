<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package mywpstartertheme
 */

get_header();
?>

	<main id="primary" class="content-area" role="main">

			<?php get_template_part( 'content', get_post_format() ); ?>

	</main>

<?php
get_footer();
