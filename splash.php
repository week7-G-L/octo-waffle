<?php

/*
	Template Name: Pure Life Splash
*/

include('headerSplash.php');  ?>




<!-- Header Section -->
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>

		<div class="heroTop" style="background-image: url('<?php echo $image[0]; ?>')">
			<div class="topNav wrapper">
				<div class="hamburger"><a href="#"><i class="fa fa-bars"></i></a></div>
				<div class="social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="hero container">
				<div class="heroTitle">
					<h3><?php echo get_bloginfo( 'description' )?></h3>
					<h1>PureLife</h1>
					<button class="mainBtn">Work with us</button>
				</div>
			</div>
		</div>



  </div> 
</div> <!-- /.main -->

<section class="body container">


	<div class="serviceSection">
	<ul class="services">
		<li>
		<img src="<?php echo get_template_directory_uri(); ?>/images/Icon1.svg" alt="">
			<h2>Natural Remedies</h2>
			<p>Bespoke keffiyeh photo booth, asymmetrical pour-over lomo church-key hashtag gastropub heirloom retro pickled narwhal.</p>
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/Icon2.svg" alt="">
			<h2>Workout Routines</h2>
			<p>Bespoke keffiyeh photo booth, asymmetrical pour-over lomo church-key hashtag gastropub heirloom retro pickled narwhal.</p>
		</li>
		<li>
			<img src="<?php echo get_template_directory_uri(); ?>/images/Icon3.svg" alt="">
			<h2>Meal Plans</h2>
			<p>Bespoke keffiyeh photo booth, asymmetrical pour-over lomo church-key hashtag gastropub heirloom retro pickled narwhal.</p>
	</ul>
		
	</div>

</section>

<section class="feature">
	<h4>Don't wait! Get started on your path to wellness today.</h4>
	
	<!-- shows 3 featured plans -->

	<?php 

		$featureQuery = new WP_Query(
				array(
						'posts_per_page' => 3,
						'post_type' => 'feature',
						'post_not_in' => array( $post->ID )
					)
			);

	 ?>

	 <?php 

	 	if ($featureQuery->have_posts()) : 

	  ?>
			<article>
			<?php while ($featureQuery->have_posts()) : $featureQuery->the_post(); ?>
			<img src="<?php the_field('image') ?>" alt="">
			<h2><?php the_title() ?></h2>
			<p><?php the_field('description') ?></p>
			<?php endwhile; ?>
			</article>

		<?php endif; ?>
	
</section>

<section class="book">
	

</section>

<section class="latest">
	<h2>Latest from the blog</h2>
	
	<ul class="blogLatest">
<?php
	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>

</section>

<section class="testimonials">
	
	<?php 

		$testimonialQuery = new WP_Query(
				array(
						'posts_per_page' => 1,
						'post_type' => 'testimonial',
						'post_not_in' => array( $post->ID )
					)
			);

	 ?>

	 <?php 

	 	if ($testimonialQuery->have_posts()) : 

	  ?>

			<?php while ($testimonialQuery->have_posts()) : $testimonialQuery->the_post(); ?>
			<img src="<?php the_field('testimonialImage') ?>" alt="">
			<h2><?php the_title() ?></h2>
			<p><?php the_field('testimonialQuote') ?></p>
			<?php endwhile; ?>

		<?php endif; ?>

</section>

<section class="closing">
	<h5>Start working on your body today; with our individual fitness program, in less than 90 days you will see a completely different person in the mirror!</h5>
	<button class="secondBtn">Get in Touch</button>
</section>

<?php get_footer(); ?>