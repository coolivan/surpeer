<?php get_header();?>


		<div class="banner">
			<div class="container">
				<h2 class="entry-title"></h2>
			</div>
		</div>


		<?php while ( have_posts() ) : the_post();?>
		<div class="bread">
			<div class="container">
				<a href="/">Home</a><span class="separator">/</span><?php the_title(); ?>
			</div>
		</div>

		<div class="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				
			</article>
		</div>


		<?php endwhile; // end of the loop. ?>
	
	
<?php get_footer();?>