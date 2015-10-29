<?php

/*
	Template Name: Pure Life Splash
*/

include('headerSplash.php');  ?>

<div class="main">
  <div class="container">

		<h3><?php echo get_bloginfo( 'description' )?></h3>
		
		<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><?php echo get_bloginfo( )?></a></h1>

		<button class="mainBtn">Work With Us</button>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<section class="body">
	<ul>
		<li>
			<img src="">>
			<h2>Natural Remedies</h2>
			<p>Bespoke keffiyeh photo booth, asymmetrical pour-over lomo church-key hashtag gastropub heirloom retro pickled narwhal.</p>
		</li>
		<li>
			<img src="">>
			<h2>Workout Routines</h2>
			<p>Bespoke keffiyeh photo booth, asymmetrical pour-over lomo church-key hashtag gastropub heirloom retro pickled narwhal.</p>
		</li>
		<li>
			<img src="">>
			<h2>Meal Plans</h2>
			<p>Bespoke keffiyeh photo booth, asymmetrical pour-over lomo church-key hashtag gastropub heirloom retro pickled narwhal.</p>
	</ul>
</section>

<section class="feature">
	<h4>Don't wait! Get started on your path to wellness today.</h4>
	<h2>Featured Plans</h2>
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