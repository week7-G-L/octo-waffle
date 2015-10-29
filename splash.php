<?php

/*
	Template Name: Pure Life Splash
*/

include('headerSplash.php');  ?>

<header class="container">
<!-- 	<div class="main container">
		<div class="hamburger"><i class="fa fa-bars"></i></div>
		<div class="social">
			<ul>
				<li><i class="fa fa-facebook"></i></li>
				<li><i class="fa fa-twitter"></i></li>
				<li><i class="fa fa-instagram"></i></li>
			</ul>
		</div>
	</div> -->
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), full ); ?>

	<div class="hero wrapper" style="background-image: url('<?php echo $image[0]; ?>')">
		<h3><?php echo get_bloginfo( 'description' )?></h3>
		
		<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><?php echo get_bloginfo( )?></a></h1>

		<button class="mainBtn">Work With Us </button>
	</div>
</header>


  </div> 
</div> <!-- /.main -->

<section class="body">
	<ul>
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

			<?php while ($featureQuery->have_posts()) : $featureQuery->the_post(); ?>
	
			<h2><?php the_title() ?></h2>
			<?php endwhile; ?>

		<?php endif; ?>
	
</section>

<section class="book">
	

</section>

<section class="latest">
	<h2>Latest from the blog</h2>
	
</section>

<section class="testimonials">
	
</section>

<section class="closing">
	<h5>Start working on your body today; with our individual fitness program, in less than 90 days you will see a completely different person in the mirror!</h5>
	<button class="secondBtn">Get in Touch</button>
</section>

<?php get_footer(); ?>