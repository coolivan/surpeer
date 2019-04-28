<?php get_header();?>
	


		<div class="banner">
			<div class="container">
				<h2 class="entry-title"></h2>
			</div>
		</div>

		<div class="bread">
			<div class="container">
				<a href="/">Home</a><span class="separator">/</span>Blog
			</div>
		</div>

		<div class="main">
			<div class="container">
				<div class="row products">
					
					<div class="product-list">
						<?php while (have_posts()) : the_post(); ?>	
							<div class="item col-md-3 col-sm-6">
								<a href="<?php the_permalink(); ?>">
									<img src="<?php the_field("thumb",$post->ID) ?>">
									<h2><?php the_title(); ?></h2>
								</a>
							</div>
						<?php endwhile;?>	
							
						</div><!--row-->
					</div> <!--products-->
					
					

					
					
					
				</div>
			</div>
		</div>

<?php the_field("banner") ?>

<?php get_footer();?>