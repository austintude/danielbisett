<div id="educationBlock">
                    <h2>Education</h2>
                    <div id="PostGrad">
					<?php $postgradloop = new \WP_Query( array( 'post_type' => 'education', 'orderby' => 'post_id', 'order' => 'ASC' ) );
$postgradloop->the_post();
$level_of_education	= get_field('level_of_education');
?>
<?php if( $level_of_education == 'post_grad' ): ?>
				<h3>Post Graduate </h3>
			<?php endif; ?>
            <?php wp_reset_query(); ?>
            <?php $postgradloop = new \WP_Query( array( 'post_type' => 'education', 'orderby' => 'post_id', 'order' => 'ASC' ) );
?>
						<?php while( $postgradloop->have_posts() ) : $postgradloop->the_post();
$level_of_education	= get_field('level_of_education');
$school_name	= get_field('school_name');
$degree_name	= get_field('degree_name');
$year_graduated	= get_field('year_graduated');
$school_location	= get_field('school_location');
?>
<?php if( $level_of_education == 'post_grad' ): ?>
                        <h4>
						<?php echo $school_name; ?>
                        </h4>
                        <h5>
						<?php echo $degree_name; ?>
                        </h5>
                        <h5>
						<?php echo $year_graduated; ?>
                        </h5>
                        <h5>
						<?php echo $school_location; ?>
                        </h5>
						<br>
                        <?php endif; ?>
						<?php endwhile; wp_reset_query(); ?>

                    </div>
                    <div id="Grad">
                    <?php $undergradloop = new \WP_Query( array( 'post_type' => 'education', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                    <?php while( $undergradloop->have_posts() ) : $undergradloop->the_post();
$level_of_education	= get_field('level_of_education');
?>
<?php if ($undergradlooper !== 1): ?>
<?php if( $level_of_education == 'under_grad' ): $undergradlooper = 1; ?>
				<h3>Graduate Degree</h3>
			<?php endif; ?>
            <?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>
            <?php $undergradloop = new \WP_Query( array( 'post_type' => 'education', 'orderby' => 'post_id', 'order' => 'ASC' ) );
?>
						<?php while( $undergradloop->have_posts() ) : $undergradloop->the_post();
$level_of_education	= get_field('level_of_education');
$school_name	= get_field('school_name');
$degree_name	= get_field('degree_name');
$year_graduated	= get_field('year_graduated');
$school_location	= get_field('school_location');
?>
<?php if( $level_of_education == 'under_grad' ): ?>

    <h4>
						<?php echo $school_name; ?>
                        </h4>
                        <h5>
						<?php echo $degree_name; ?>
                        </h5>
                        <h5>
						<?php echo $year_graduated; ?>
                        </h5>
                        <h5>
						<?php echo $school_location; ?>
                        </h5>
						<br>
                        <?php endif; ?>
						<?php endwhile; wp_reset_query(); ?>


                    </div>
                    <div id="certificates">
                    <?php $certificatesloop = new \WP_Query( array( 'post_type' => 'education', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                    <?php while( $certificatesloop->have_posts() ) : $certificatesloop->the_post();
$level_of_education	= get_field('level_of_education');
?>
<?php if ($certificateslooper !== 1): ?>
<?php if( $level_of_education == 'certi' ): $certificateslooper = 1; ?>
				<h3>Certificates</h3>
			<?php endif; ?>
            <?php endif; ?>
            <?php endwhile; wp_reset_query(); ?>
            <?php $certificatesloop = new \WP_Query( array( 'post_type' => 'education', 'orderby' => 'post_id', 'order' => 'ASC' ) );
?>
						<?php while( $certificatesloop->have_posts() ) : $certificatesloop->the_post();
$level_of_education	= get_field('level_of_education');
$school_name	= get_field('school_name');
$degree_name	= get_field('degree_name');
$year_graduated	= get_field('year_graduated');
$school_location	= get_field('school_location');
?>
<?php if( $level_of_education == 'certi' ): ?>
                    <h4>
                        <?php echo $degree_name; ?>
                        </h4>
                        <h5>
                        <?php echo $year_graduated; ?>
                        </h5>
                        <h5>
                        <?php echo $school_location; ?>
                        </h5>
                        <br>
    <?php endif; ?>
    <?php endwhile; wp_reset_query(); ?>



                        <br>
                        <div id="skills">
						<?php $skillsloop = new \WP_Query( array( 'post_type' => 'skills', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                    <?php while( $skillsloop->have_posts() ) : $skillsloop->the_post();
$skill_icon	= get_field('skill_icon');
?>
<?php if ($skillslooper !== 1): ?>
<?php if( $skill_icon !== 'null' ): $skillslooper = 1; ?>
<h2>SKILLS</h2>
			<?php endif; ?>
            <?php endif; ?>
			<?php endwhile; wp_reset_query(); ?>

							<div class="skillsIcons">
							<?php $skillsloop = new \WP_Query( array( 'post_type' => 'skills', 'orderby' => 'post_id', 'order' => 'ASC' ) );
?>
						<?php while( $skillsloop->have_posts() ) : $skillsloop->the_post();
$skill_icon	= get_field('skill_icon');
?>
                            <img noloading="" width="100" height="100" src="<?php echo $skill_icon['url']; ?>"
                                class="custom-logo amp-wp-enforced-sizes" alt="<?php echo $skill_icon['alt']; ?>" itemprop="logo"
                                layout="responsive">
								<?php endwhile; wp_reset_query(); ?>
								</div>

                        </div>
                        <div id="triumphs">
						<?php $triumphloop = new \WP_Query( array( 'post_type' => 'triumphs', 'orderby' => 'post_id', 'order' => 'ASC' ) ); ?>
                    <?php while( $triumphloop->have_posts() ) : $triumphloop->the_post();
$triumph_title	= get_field('triumph_title');
?>
<?php if ($triumphlooper !== 1): ?>
<?php if( $triumph_title !== 'null' ): $triumphlooper = 1; ?>
<h2>Triumphs</h2>			<?php endif; ?>
            <?php endif; ?>
			<?php endwhile; wp_reset_query(); ?>

							<?php $triumphloop = new \WP_Query( array( 'post_type' => 'triumphs', 'orderby' => 'post_id', 'order' => 'ASC' ) );
?>
						<?php while( $triumphloop->have_posts() ) : $triumphloop->the_post();
$triumph_title	= get_field('triumph_title');
$triumph_cont	= get_field('triumph_cont');
?>
<h4>
<?php echo $triumph_title; ?>
                            </h4>
                            <h5>
							<?php echo $triumph_cont; ?>
                            </h5>
                            <br>
<?php endwhile; wp_reset_query(); ?>


                        </div>
                    </div>
                </div>
