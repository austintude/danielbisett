<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div id="lft23rds">

                <h5>
                    It would give me great pleasure to discuss in further detail how I might best fit your team!
                </h5>

            </div><!-- .lft23rds -->
            <div id="rt13rds">
                <h4 on="tap:my-lightbox" role="button" tabindex="0">
                    Let's Do This!
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
                <amp-lightbox id="my-lightbox" layout="nodisplay">
                    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">

                      <amp-iframe width="450" height="540" layout="fixed"
                              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
                              src="https://page.co/KjYdM">

                    <amp-img layout="fill"
                             src="https://danielbisett.com/assets/daniel-bisett-banner.png"
                             placeholder></amp-img>
                  </amp-iframe>
                    </div>
                  </amp-lightbox>

				</div><!-- .rt13rds -->


