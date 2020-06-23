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
                <img noloading="" on="tap:my-lightbox" role="button" tabindex="0" width="250" height="100" src="<?php echo $hero_image['url']; ?>"
                    class="custom-logo amp-wp-enforced-sizes" alt="<?php $hero_image['alt']; ?>" itemprop="logo"
					layout="responsive"></img>
                <!-- </a> -->
            </div>
            <div id="socialBlock">
                <div id="socialIcons">
                    <div id="openCurly">
                        <amp-img noloading="" width="40" height="100" src="https://danielbisett.com/assets/open-curly-bracket.png"
                            class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design"
                            itemprop="logo" layout="responsive"></amp-img>
                    </div>
                    <div id="linkedIn">
                        <a href="https://linkedin.com/in/austintude" target="_blank">
                            <amp-img noloading="" width="40" height="100" src="https://danielbisett.com/assets/linkedin-icon-new.png"
                                class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design"
                                itemprop="logo" layout="responsive"></amp-img>
                        </a>
                    </div>
                    <div id="twitterIcon">
                        <a href="https://twitter.com/austintude" target="_blank">
                            <amp-img noloading="" width="40" height="100" src="https://danielbisett.com/assets/twitter-icon-new.png"
                                class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design"
                                itemprop="logo" layout="responsive"></amp-img>
                        </a>
                    </div>
                    <div id="facebookIcon">
                        <a href="https://fb.me/austintude" target="_blank">
                            <amp-img noloading="" width="40" height="100" src="https://danielbisett.com/assets/facebook-icon-new.png"
                                class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design"
                                itemprop="logo" layout="responsive"></amp-img>
                        </a>
                    </div>
                    <div id="pinterestIcon">
                        <a href="https://pinterest.com/austintude" target="_blank">
                            <amp-img noloading="" width="40" height="100" src="https://danielbisett.com/assets/pinterest-icon-new.png"
                                class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design"
                                itemprop="logo" layout="responsive"></amp-img>
                        </a>
                    </div>
                    <div id="instagramIcon">
                        <a href="https://instagram.com/austintude" target="_blank">
                            <amp-img noloading="" width="40" height="100" src="https://danielbisett.com/assets/instagram-icon-new.png"
                                class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design"
                                itemprop="logo" layout="responsive"></amp-img>
                        </a>
                    </div>
                    <!-- <div id="linkedIn">
                        <amp-img noloading="" width="40" height="100"
                        src="https://danielbisett.com/assets/linkedin-icon-new.png"
                        class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design" itemprop="logo"
                        layout="responsive"></amp-img>
                </div> -->
                    <div id="closeCurly">
                        <amp-img noloading="" width="40" height="100" src="https://danielbisett.com/assets/close-curly-bracket.png"
                            class="custom-logo amp-wp-enforced-sizes" alt="Austintatious Design"
                            itemprop="logo" layout="responsive"></amp-img>
                    </div>
                </div>
                <div id="socialSecondRow">
                    <div id="austintude">
                        <h2>
                            @austintude
                        </h2>
                    </div>
                    <div id="url">
					<?php $loop = new \WP_Query( array( 'post_type' => 'www_address', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $loop->have_posts() ) : $loop->the_post();
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
