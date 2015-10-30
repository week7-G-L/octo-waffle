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

<section class="body">
	<div class="container row serviceSection">
			<?php 
		
				$serviceQuery = new WP_Query(
						array(
								'posts_per_page' => 3,
								'post_type' => 'service',
								'post_not_in' => array( $post->ID )
							)
					);
		
			 ?>
		
			 <?php 
		
			 	if ($serviceQuery->have_posts()) : 
		
			  ?>
		
					<?php while ($serviceQuery->have_posts()) : $serviceQuery->the_post(); ?>
				<div class="descItem">
						<div class="descImg">
							<img src="<?php the_field('desc-image') ?>" alt="">
						</div>
					<h2><?php the_title() ?></h2>
					<p><?php the_field('desc-summary') ?></p>
				</div>
					<?php endwhile; ?>
		
				<?php endif; ?></div>

</section>

<section class="feature">
	<h4>Don't wait! Get started on your path to wellness today.</h4>
	<h2>Featured Plans</h2>
	
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
	
	<form action="">
		<h2>Request a Booking</h2>
		<input type="text" id="bookDate">
		<select name='bookTime' id='bookTime'>
			<option value="morning" selected>Morning</option>
			<option value="afternoon">Afternoon</option>
			<option value="evening">Evening</option>
		</select>
		<button class="goBtn">Go</button>

	</form>

</section>

<section class="latest">
	<h2>Latest from the blog</h2>
	
	<ul class="blogLatest row">

	<?php $newAwesomeQuery = new WP_Query(array(
		'posts_per_page' => 3
	)); ?>

	<?php if ( $newAwesomeQuery->have_posts() ) : ?>
		<?php while ( $newAwesomeQuery->have_posts() ) : $newAwesomeQuery->the_post(); ?>
			
			<li>
				<a href="<?php the_permalink(); ?>">
					<?php echo get_the_post_thumbnail(); ?>
					<p class="blogTitle"><?php the_title(); ?></p>
					<p><?php the_excerpt(); ?></p>
				</a>
			</li>

		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	<?php else:  ?>
		[stuff that happens if there aren't any posts]
	<?php endif; ?>

</ul>

</section>

<section class="testimonials js-flickity"   data-flickity-options='{ "cellAlign": "left", "contain": true, "wrapAround": true}'>
	
	<?php 

		$testimonialQuery = new WP_Query(
				array(
						'posts_per_page' => -1,
						'post_type' => 'testimonial',
						'post_not_in' => array( $post->ID )
					)
			);

	 ?>

	 <?php 

	 	if ($testimonialQuery->have_posts()) : 

	  ?>

			
			<?php while ($testimonialQuery->have_posts()) : $testimonialQuery->the_post(); ?>
			<div class="gallery-cell">
				<img src="<?php the_field('testimonialImage') ?>" alt="">
				<h2><?php the_title() ?></h2>
				<p><?php the_field('testimonialQuote') ?></p>
			</div>
			<?php endwhile; ?>

		<?php endif; ?>

</section>

<section class="closing">
	<h5>Start working on your body today; with our individual fitness program, in less than 90 days you will see a completely different person in the mirror!</h5>
	<button class="secondBtn">Get in Touch</button>
</section>

<?php get_footer(); ?>