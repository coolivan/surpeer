<?php get_header();?>



		<div class="banner">
			<div class="container">
				<h2 class="entry-title"></h2>
			</div>
		</div>

		<div class="bread">
			<div class="container">
				<a href="/">Home</a><span class="separator">/</span>News
			</div>
		</div>

		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-md-9 news news-list">
						
					<?php while (have_posts()) : the_post(); ?>	
						
						<article id="post-<?php the_id(); ?>" class="article">
							
							<header class="entry-header">
								<h2 class="entry-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h2>
								<span class="post-author">Post by <?php the_author(); ?></span>
								<span class="post-date"><?php  the_time('y/m/d'); ?>	</span>
							</header>
							<a href="<?php the_permalink(); ?>" >
							<?php if (catch_that_image()):?>
							<div class="post-thumbnail">
								<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>"
							</div>
							<?php endif?>	
								
							<div class="postinfo-wrapper ">
								<div class="post-info">
									<div class="entry-summary text-left">
										<p><?php echo mb_strimwidth(strip_tags($post->post_content),0,600,'…'); ?> </p>
									</div>

								</div>
							</div>
							</a>
						</article>
						
					<?php endwhile;?>		

					
		
						<div class="pagination">
							
								<?php par_pagenavi(5); ?>
									
						
						</div>

					</div>
					
					
					
					<div id="secondary" class="col-xs-12 col-md-3  news-side">
						<?php get_template_part('sidebar-news');?>

					</div>
					
					
					
					
				</div>
			</div>
		</div>


<?php get_footer();?>