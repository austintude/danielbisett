<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div id="lft23rds">
<?php $footerloop = new \WP_Query( array( 'post_type' => 'footer_info', 'orderby' => 'post_id', 'order' => 'ASC' ) );
$footerloop->the_post();
$lft23rds_text	= get_field('lft23rds_text');
$cta_txt	= get_field('cta_txt');
?>
<?php if( $lft23rds_text ): ?>
                <h5>
				<?php echo $lft23rds_text; ?>
                </h5>
				<?php endif; ?>
            </div><!-- .lft23rds -->
            <div id="rt13rds">
                <h4 on="tap:my-lightbox" role="button" tabindex="0">
				<?php $footerloop = new \WP_Query( array( 'post_type' => 'footer_info', 'orderby' => 'post_id', 'order' => 'ASC' ) );
$footerloop->the_post();
$cta_txt	= get_field('cta_txt');
?>
<?php if( $cta_txt ): ?>
				<?php echo $cta_txt; ?>
				<?php endif; ?>
                </h4>
                <?php $loop = new \WP_Query( array( 'post_type' => 'email_address', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post();
$email_address_txt	= get_field('email_address_txt');
$email_address_link	= get_field('email_address_link');
?>
<a href="mailto:<?php echo $email_address_link; ?>">
                    <?php echo $email_address_txt; ?>
                </a>

<?php endwhile; wp_reset_query(); ?>
<?php $footerloop = new \WP_Query( array( 'post_type' => 'footer_info', 'orderby' => 'post_id', 'order' => 'ASC' ) );
$footerloop->the_post();
$cta_link	= get_field('cta_link');
?>
<?php if( $cta_link ): ?>

                <amp-lightbox id="my-lightbox" layout="nodisplay">
                    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">

                      <iframe width="450" height="540" layout="fixed"
                              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
                              src="<?php echo $cta_link; ?>">


                  </iframe>
                    </div>
                  </amp-lightbox>
				  <?php endif; ?>

				</div><!-- .rt13rds -->


