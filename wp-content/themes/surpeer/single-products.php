<?php get_header();?>

		<div class="banner">
			<div class="container text-left">
				<b class="entry-title"><?php the_title(); ?></b>
			</div>
		</div>

		<!--<div class="bread">
			<div class="container">
				<a href="/">Home</a><span class="separator">/</span>Product
			</div>
		</div>-->


		<div class="main">
			<div class="product-detail">
				<?php   if ( have_posts() ) :?>
				<article class="article">
											
					<div class="post-content">
						<?php the_content(); echo $post->post_content;?>	
					</div>
					
				</article>
				<?php endif; ?>	

			</div>
		</div>


<?php get_footer();?>