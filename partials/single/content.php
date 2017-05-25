<?php
/**
 * Post single content
 *
 * @package     Blogger WordPress theme
 * @subpackage  Partials
 * @author      Alexander Clarke
 * @link        http://www.wpexplorer.com
 * @since       1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<div class="entry clr">
	<?php the_content(); ?>
</div><!-- .entry -->