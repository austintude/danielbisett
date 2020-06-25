<div id="coverLetterPt2">
                        <h2>Cover Letter Pt. 2</h2>
                        <div class="coverLetterBlock">
						<?php $coverletterloop = new \WP_Query( array( 'post_type' => 'cover_letter', 'orderby' => 'post_id', 'order' => 'DSC' ) );
?>
						<?php while( $coverletterloop->have_posts() ) : $coverletterloop->the_post();
$last_three_books_title	= get_field('last_three_books_title');
$last_three_books_items	= get_field('last_three_books_items');
?>
<?php if( $last_three_books_title ): ?>
	<h3><?php echo $last_three_books_title; ?></h3>
	<?php if( $last_three_books_items ): ?>
							<?php while ( have_rows('last_three_books_items') ) : the_row();
							$last_three_books_item	= get_sub_field('last_three_books_item');
								?>
                            <h4><?php echo $last_three_books_item; ?></h4>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>
                        </div>
                        <br>
                        <div class="coverLetterBlock">
						<?php $coverletterloop = new \WP_Query( array( 'post_type' => 'cover_letter', 'orderby' => 'post_id', 'order' => 'DSC' ) );
?>
						<?php while( $coverletterloop->have_posts() ) : $coverletterloop->the_post();
$fun_title	= get_field('fun_title');
$fun_items	= get_field('fun_items');
?>
<?php if( $fun_title ): ?>
	<h3><?php echo $fun_title; ?></h3>
								<?php if( $fun_items ): ?>
							<?php while ( have_rows('fun_items') ) : the_row();
							$fun_item	= get_sub_field('fun_item');
								?>
                            <h4><?php echo $fun_item; ?></h4>
							<?php endwhile; ?>
						<?php endif; ?>
						<?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>

                            </div>
                            <br>
                            <div class="coverLetterBlock">
							<?php $coverletterloop = new \WP_Query( array( 'post_type' => 'cover_letter', 'orderby' => 'post_id', 'order' => 'DSC' ) );
?>
						<?php while( $coverletterloop->have_posts() ) : $coverletterloop->the_post();
$current_job_title	= get_field('current_job_title');
$current_job_lead	= get_field('current_job_lead');
$current_job_desc	= get_field('current_job_desc');
?>
<?php if( $current_job_title ): ?>
	<h3><?php echo $current_job_title; ?></h3>
                                    <h4><?php echo $current_job_lead; ?></h4>
                                    <h5><?php echo $current_job_desc; ?>
                                    </h5>
									<?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>
                                </div>
                                <br>
                                <div class="coverLetterBlock">
								<?php $coverletterloop = new \WP_Query( array( 'post_type' => 'cover_letter', 'orderby' => 'post_id', 'order' => 'DSC' ) );
?>
						<?php while( $coverletterloop->have_posts() ) : $coverletterloop->the_post();
$toughest_challenge_cont_title	= get_field('toughest_challenge_cont_title');
$toughest_challenge_desc_cont	= get_field('toughest_challenge_desc_cont');
?>
<?php if( $toughest_challenge_cont_title ): ?>
	<h3><?php echo $toughest_challenge_cont_title; ?></h3>
                        <h5><?php echo $toughest_challenge_desc_cont; ?>

                        </h5>
						<?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>

                            </div>
                    </div>
