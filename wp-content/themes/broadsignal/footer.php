<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @author Matthias Thom | http://upplex.de
 * @package upBootWP 1.1
 */
?>

<footer class="footer">
<div id="colophon"  class="container" role="contentinfo">
  <div class="row">
		<?php if ( is_active_sidebar( 'footer1' ) ) : ?>
		    <div class="col-md-4">
						<?php dynamic_sidebar( 'footer1' ); ?>
					</div>
		  <?php endif; ?>
		  <?php if ( is_active_sidebar( 'footer2' ) ) : ?>
		    <div class="col-md-4">
						<?php dynamic_sidebar( 'footer2' ); ?>
					</div>
		  <?php endif; ?>
		  <?php if ( is_active_sidebar( 'footer3' ) ) : ?>
		    <div class="col-md-4">
						<?php dynamic_sidebar( 'footer3' ); ?>
					</div>
		  <?php endif; ?>
  </div>
	<div class="row">
		<div class="site-info">
			<?php do_action( 'upbootwp_credits' ); ?>
			&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?>
			<span class="sep"> | </span>
			<?php printf(__('Theme: %1$s by %2$s.', 'upbootwp' ), 'upBootWP', '<a href="http://upplex.de" rel="designer">upplex</a>'); ?>
		</div><!-- .site-info -->
	</div>
</div>
</footer>


<?php wp_footer(); ?>

</body>
</html>
