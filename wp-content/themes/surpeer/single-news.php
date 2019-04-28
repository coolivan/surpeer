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

					<div class="col-xs-12 col-md-12 news news-detail">
						<?php   if ( have_posts() ) :?>
						<article class="article">
							<header class="entry-header">
								<h2 class="entry-title"><?php the_title(); ?></h2>
								<span class="post-author">Post by <?php the_author(); ?></span>
								<span class="post-date"><?php the_time('Y/m/d'); ?>	</span>
							</header>
							
							<div class="post-content">
								<?php the_content(); echo $post->post_content;?>	
							</div>
									
							<div class="post-tag text-left">
								
								<p>Tags: <?php tagtext();?></p>
							</div>
							
						</article>
						<?php endif; ?>	
						

					</div>

				</div>
			</div>
		</div>

		</div>

<?php get_footer();?>