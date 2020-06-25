			<div id="experienceBlocks">
                    <h2>Experience</h2>
                    <div class="experienceBlock">
			<?php $experienceloop = new \WP_Query( array( 'post_type' => 'experience', 'orderby' => 'post_id', 'order' => 'ASC' ) );
?>
						<?php while( $experienceloop->have_posts() ) : $experienceloop->the_post();
$exp_company	= get_field('exp_company');
$exp_job_title	= get_field('exp_job_title');
$exp_from_to	= get_field('exp_from_to');
$exp_location	= get_field('exp_location');
$exp_responsibilities	= get_field('exp_responsibilities');
$samples_of_work	= get_field('samples_of_work');
?>

                    <h4>
					<b><?php echo $exp_company; ?></b> || <?php echo $exp_from_to; ?> ||
					<?php echo $exp_job_title; ?> - <?php echo $exp_location; ?>
                        </h4>
						<?php if( $exp_responsibilities ): ?>
							<ul>
							<?php while ( have_rows('exp_responsibilities') ) : the_row();
						$exp_responsibility	= get_sub_field('exp_responsibility');
						$exp_resp_items	= get_sub_field('exp_resp_items');
							?>

                            <li>
							<?php echo $exp_responsibility; ?>
							<?php if( $exp_resp_items ): ?>
								<ul>
							<?php while ( have_rows('exp_resp_items') ) : the_row();
							$exp_resp_item	= get_sub_field('exp_resp_item');
							?>

									<li>
										<?php echo $exp_resp_item; ?>
									</li>
								<?php endwhile; ?>
								</ul>
								<?php endif; ?>
							</li>
							<?php endwhile; ?>
								</ul>
								<?php endif; ?>
                        <h5>
                        <?php echo $year_graduated; ?>
                        </h5>
                        <h5>
                        <?php echo $school_location; ?>
                        </h5>
                        <br>
						<?php if( $samples_of_work ): ?>
							<h5>A few recent samples of my work:</h5>
						<ul>
							<?php while ( have_rows('samples_of_work') ) : the_row();

							$sample_title	= get_sub_field('sample_title');
							$sample_link	= get_sub_field('sample_link');
							?>



                        <li><a href="<?php echo $sample_link; ?>"><?php echo $sample_title; ?></a></li>
						<?php endwhile; ?>
						<h6>* 100% AMP valid full site</h6>
						<h6>** Featured in <a href="https://amp-wp.org/showcases/" target="_blank" rel="noopener">Google's AMP-plugin for WordPress Showcase</a></h6>
								</ul>

    <?php endif; ?>
    <?php endwhile; wp_reset_query(); ?>

                        <div class="experienceBlock" id="danielFace">
						<?php $opencurlyloop = new \WP_Query( array( 'post_type' => 'misc_images', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>

<?php while( $opencurlyloop->have_posts() ) : $opencurlyloop->the_post();
$image_of_self	= get_field('image_of_self');
?>
<?php if( $image_of_self ): ?>
                        <img noloading="" src="<?php echo $image_of_self['url']; ?>"
                            class="custom-logo amp-wp-enforced-sizes" alt="<?php $image_of_self['alt']; ?>"
							itemprop="logo" layout="intrinsic">
							<?php endif; ?>
							<?php endwhile; wp_reset_query(); ?>


                        </div>
                </div>
</div>
