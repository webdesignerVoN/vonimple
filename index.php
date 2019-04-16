<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); ?>
</head>

<body>

	<header>	
		<h1><?php bloginfo('name'); ?></h1>
		<span><?php bloginfo('description'); ?></span>
	</header>

	<nav class="main-nav">
		<div class="container">
			<?php
			    $args = array(
			    	'theme_location' => 'primary'
			    );
			?>
		<?php wp_nav_menu($args); ?>
		</div>
	</nav>
	
    <div class="container">

	    <div class="main">
		
		<?php if (have_posts()) : ?>

			<?php while(have_posts()) : the_post() ?>

				<article class="post">
			    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			    <div class="meta">

			    Created by <?php the_author_posts_link(); ?>
			    on <i><?php the_time('F j, Y g:i a'); ?></i>

			    </div>

		    	<?php if (has_post_thumbnail()) : ?>
		    		<div class="post-thumbnail">
		    		<?php the_post_thumbnail(); ?>
			        </div>
			    <?php endif; ?>

			    <?php the_excerpt(); ?>
			    <a class="button" href="<?php the_permalink(); ?>"> Read More </a>
			    </article>

			    <br>
			    
			<?php endwhile; ?>

		<?php else : ?>
			<?php echo wpautop("There are no posts for now"); ?>

		<?php endif ?>
		</div>

		</div>

	    <?php get_footer(); ?>
    

</body>

</html>