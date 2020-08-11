<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header('empty');

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}

?>
<?php
					get_template_part( 'template-parts/content/block1' );
					?>
	<main id="primary" class="site-main">
	<div class="blockLayout">
				<?php
					get_template_part( 'template-parts/content/block2' );
					?>
					<div id="mainContent">
						<?php
					get_template_part( 'template-parts/content/block3' );
					get_template_part( 'template-parts/content/block4' );
					get_template_part( 'template-parts/content/block5' );
					get_template_part( 'template-parts/content/block6' );
					get_template_part( 'template-parts/content/block4' );
					get_template_part( 'template-parts/content/block7' );
				?>
				</div> <!-- mainContent -->
			</div><!-- . blockLayout -->
	</main><!-- #primary -->
<?php
get_footer('empty');
