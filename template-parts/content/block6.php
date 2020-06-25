<div id="coverLetter">
                    <h2>Cover Letter Pt. 1</h2>
                    <div class="coverLetterBlock">
					<?php $coverletterloop = new \WP_Query( array( 'post_type' => 'cover_letter', 'orderby' => 'post_id', 'order' => 'DSC' ) );
?>
						<?php while( $coverletterloop->have_posts() ) : $coverletterloop->the_post();
$best_for_role_title	= get_field('best_for_role_title');
$best_for_role_lead	= get_field('best_for_role_lead');
$best_for_role_list_items	= get_field('best_for_role_list_items');
?>
<?php if( $best_for_role_title ): ?>
	<h3><?php echo $best_for_role_title; ?></h3>
                        <h4><?php echo $best_for_role_lead; ?></h4>
						<?php if( $best_for_role_list_items ): ?>
							<?php while ( have_rows('best_for_role_list_items') ) : the_row();
							$best_for_role_list_item	= get_sub_field('best_for_role_list_item');
								?>
								<h5>
									<?php echo $best_for_role_list_item; ?>
								</h5>
							<?php endwhile; ?>
						<?php endif; ?>
	<?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>

                    </div>

                    <div class="coverLetterBlock">
					<?php $coverletterloop = new \WP_Query( array( 'post_type' => 'cover_letter', 'orderby' => 'post_id', 'order' => 'DSC' ) );
?>
						<?php while( $coverletterloop->have_posts() ) : $coverletterloop->the_post();
$value_fit_title	= get_field('value_fit_title');
$value_fit_items	= get_field('value_fit_items');
?>
<?php if( $value_fit_title ): ?>
	<h3><?php echo $value_fit_title; ?></h3>

							<?php if( $value_fit_items ): ?>
							<?php while ( have_rows('value_fit_items') ) : the_row();
							$value_fit_lead	= get_sub_field('value_fit_lead');
							$value_fit_list_items	= get_sub_field('value_fit_list_items');
							?>
                            <h4><?php echo $value_fit_lead; ?></h4>
							<?php if( $value_fit_list_items ): ?>
							<?php while ( have_rows('value_fit_list_items') ) : the_row();
							$value_fit_list_item	= get_sub_field('value_fit_list_item');
							?>
                            <h5><?php echo $value_fit_list_item; ?></h5>
							<?php endwhile; ?>
						<?php endif; ?>
                            <br>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>
                        </div>

                    <div class="coverLetterBlock">
					<?php $coverletterloop = new \WP_Query( array( 'post_type' => 'cover_letter', 'orderby' => 'post_id', 'order' => 'DSC' ) );
?>
						<?php while( $coverletterloop->have_posts() ) : $coverletterloop->the_post();
$toughest_challenge_title	= get_field('toughest_challenge_title');
$toughest_challenge_lead	= get_field('toughest_challenge_lead');
$toughest_challenge_desc	= get_field('toughest_challenge_desc');
?>
<?php if( $toughest_challenge_title ): ?>
	<h3><?php echo $toughest_challenge_title; ?></h3>
                        <h4><?php echo $toughest_challenge_lead; ?></h4>
                        <h5><?php echo $toughest_challenge_desc; ?>

                        </h5>
						<?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>
                        </div>
                </div>
