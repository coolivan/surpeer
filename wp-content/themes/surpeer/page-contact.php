<?php get_header(); ?>

<div class="banner">
	<div class="container">
		<h2 class="entry-title"></h2>
	</div>
</div>

<div class="bread">
	<div class="container">
		<a href="/">
			Home
		</a><span class="separator">/</span>About Us
	</div>
</div>

<div class="main">
	<div class="content contact-us">
		<div class="container">
			<div class="row">

				<?php while ( have_posts() ) : the_post();?>
					
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content">
						<?php the_content(); ?>
					</div><!-- .entry-content -->

				</article><!-- #post -->
				
				
				
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
	</div>

</div>

<div class="contact-form contact-us">
	<div class="container">
		<div class="row">

			<?php echo do_shortcode('[contact-form-7 id="106" title="Contact form"]'); ?>


		</div>
	</div>
</div>

<?php get_footer(); ?>