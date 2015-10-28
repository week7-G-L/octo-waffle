<?php

/*
	Template Name: Pure Life Splash
*/

include('headerSplash.php');  ?>

<div class="main">
  <div class="container">

		<h3><?php echo get_bloginfo( 'description' )?></h3>
		
		<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home"><?php echo get_bloginfo( )?></a></h1>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>