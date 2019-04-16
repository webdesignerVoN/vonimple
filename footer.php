<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage VoNimple
 * @since VoNimple 1.0
 */
?>

    <div class="sidebar">
	    	<?php if(is_active_sidebar('sidebar')) : ?>
				<?php dynamic_sidebar('sidebar'); ?>
			<?php endif; ?>
		</div>

		<div class="clr"></div>

	<footer>
		<div>
			<p><a class="site-info" href="https://www.webdesignervon.com">Created by VoN</a> || &copy; <?php the_date('Y'); ?> <?php bloginfo('name') ?> </p> 
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
