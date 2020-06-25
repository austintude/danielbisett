<div id="top">
            <div id="phoneEmailBlock">
<?php $loop = new \WP_Query( array( 'post_type' => 'phone_number', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

				<?php while( $loop->have_posts() ) : $loop->the_post();
				$mobile_phone_number_txt	= get_field('mobile_phone_number_txt');
				$mobile_phone_number_link	= get_field('mobile_phone_number_link');
				?>
				<a href="tel:<?php echo $mobile_phone_number_link; ?>">
                    <h2><?php echo $mobile_phone_number_txt; ?></h2>
                </a>

				<?php endwhile; wp_reset_query(); ?>

				<?php $loop = new \WP_Query( array( 'post_type' => 'email_address', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post();
$email_address_txt	= get_field('email_address_txt');
$email_address_link	= get_field('email_address_link');
?>
<a href="mailto:<?php echo $email_address_link; ?>">
                    <h2><?php echo $email_address_txt; ?></h2>
                </a>

<?php endwhile; wp_reset_query(); ?>


            </div>
            <div class="resumeName">
			<?php $hero_image	= get_field('hero_image'); ?>
                <!-- <a href="https://danielbisett.com/" class="danielBisett" rel="home" itemprop="url"> -->
                <img noloading="" on="tap:my-lightbox" role="button" aria-label="link to online contact form" tabindex="0" width="250" height="100" src="<?php echo $hero_image['url']; ?>"
                    class="custom-logo amp-wp-enforced-sizes" alt="<?php $hero_image['alt']; ?>" itemprop="logo"
					layout="responsive"></img>
                <!-- </a> -->
            </div>
            <div id="socialBlock">
                <div id="socialIcons">
                    <div id="openCurly">
					<?php $opencurlyloop = new \WP_Query( array( 'post_type' => 'misc_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $opencurlyloop->have_posts() ) : $opencurlyloop->the_post();
$open_curly	= get_field('open_curly');
?>
                        <img noloading="" width="40" height="100" src="<?php echo $open_curly['url']; ?>"
                            class="custom-logo amp-wp-enforced-sizes" alt="<?php $open_curly['alt']; ?>"
							itemprop="logo" layout="intrinsic">
							<?php endwhile; wp_reset_query(); ?>
					</div>
					<?php $sociallinksloop = new \WP_Query( array( 'post_type' => 'social_links', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $sociallinksloop->have_posts() ) : $sociallinksloop->the_post();
$social_id	= get_field('social_id');
$social_network_url	= get_field('social_network_url');
$social_network_icon	= get_field('social_network_icon');
?>
                    <div id="<?php echo $social_id; ?>">
                        <a href="<?php echo $social_network_url; ?>" target="_blank" rel="noreferrer">
                            <img noloading="" width="1" height="1" src="<?php echo $social_network_icon['url']; ?>"
                                class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design - <?php $social_network_icon['alt']; ?>"
                                itemprop="logo" layout="responsive">
                        </a>
					</div>
					<?php endwhile; wp_reset_query(); ?>

                    <div id="closeCurly">
					<?php $closecurlyloop = new \WP_Query( array( 'post_type' => 'misc_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $closecurlyloop->have_posts() ) : $closecurlyloop->the_post();
$close_curly	= get_field('close_curly');
?>
                        <img noloading="" width="40" height="100" src="<?php echo $close_curly['url']; ?>"
                            class="custom-logo amp-wp-enforced-sizes" alt="<?php $close_curly['alt']; ?>"
							itemprop="logo" layout="intrinsic">
							<?php endwhile; wp_reset_query(); ?>

                    </div>
                </div>
                <div id="socialSecondRow">
                    <div id="austintude">
                        <h2>
                            @austintude
                        </h2>
                    </div>
                    <div id="url">
					<?php $wwwloop = new \WP_Query( array( 'post_type' => 'www_address', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $wwwloop->have_posts() ) : $wwwloop->the_post();
$www_txt	= get_field('www_txt');
$www_link	= get_field('www_link');
?>
<a href="mailto:<?php echo $www_link; ?>">
                    <h2><?php echo $www_txt; ?></h2>
                </a>

<?php endwhile; wp_reset_query(); ?>
                    </div>
                </div>
            </div>
        </div>
