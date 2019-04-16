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

		<div class="main">
		
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post() ?>

				<article class="page">

			    <h3><?php the_title(); ?></h3>

			    <?php the_content(); ?>
			    </article>

			    <br>
			    
			<?php endwhile ?>

		<?php else : ?>
			<?php echo wpautop("There are no posts for now"); ?>

		<?php endif ?>

	    </div>

	<?php get_footer(); ?>

</body>
</html>