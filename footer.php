<footer>
  <div class="container">
    <?php 

		$footerQuery = new WP_Query(
				array(
						'posts_per_page' => 1,
						'post_type' => 'footer',
						'post_not_in' => array( $post->ID )
					)
			);

	 ?>

	 <?php 

	 	if ($footerQuery->have_posts()) : 

	  ?>

			<?php while ($footerQuery->have_posts()) : $footerQuery->the_post(); ?>
			<p><?php the_field('footer-logo')?></p>
			<p><?php the_field('tag-copy')?></p>
			<p class='titles'><?php the_field('contact-title')?></p>
			<p><?php the_field('contact-email')?></p>
			<p><?php the_field('address-phone')?></p>
			<p class='titles'><?php the_field('subscribe-title')?></p>
			<p><?php the_field('subscribe-info')?></p>
			<?php endwhile; ?>

		<?php endif; ?>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>	