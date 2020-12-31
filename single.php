<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WPEX Blogger
 * @since 1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="primary" class="content-area clr">

		<main id="content" class="site-content left-content clr" role="main">

			<?php include( locate_template( 'partials/single/layout.php' ) ); ?>

		</main><!-- #content -->

		<?php get_sidebar(); ?>

	</div><!-- #primary -->

	<?php get_template_part( 'partials/next-prev' ); ?>

<?php endwhile; ?>

<?php get_footer(); ?>