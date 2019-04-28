<?php get_header();?>
		



		<div id="banner" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#banner" data-slide-to="0" class="active"></li>
				<li data-target="#banner" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="/wp-content/themes/surpeer//images/home1-slider1.jpg" alt="First slide">
				</div>
				<div class="item">
					<img src="/wp-content/themes/surpeer//images/home1-slider2.jpg" alt="First slide">
				</div>
			</div>
			<a class="left carousel-control" href="#banner" role="button" data-slide="prev">
				<i class="fa fa-angle-left fa-3x" aria-hidden="true"></i>
			</a>
			<a class="right carousel-control" href="#banner" role="button" data-slide="next">
				<i class="fa fa-angle-right fa-3x" aria-hidden="true"></i>
			</a>
		</div>

		<div class="main">

			<div class="hot">
				<div class="container">
					<div class="row clearfix">
						<?php echo get_field('hot','option'); ?>

					</div>

				</div>
			</div>

			<div class="feature">

				<div class="container">
					<div class="title-1">
						<h4>Made The Hard Way</h4>
						<h3>Featured Products</h3>
					</div>
					<div class="product-list row">
<?php
    $args=array(
        'cat' => 1, 
        'posts_per_page' => 4, 
    );	
    query_posts($args);
	
    if(have_posts()) : while (have_posts()) : the_post();
?>
						<div class="item col-md-3 col-sm-6">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php the_field("thumb",$post->ID) ?>" />
								<h2><?php the_title(); ?></h2>
							</a>
						</div>
<?php  endwhile; endif; wp_reset_query(); ?>



					</div>
				</div>
			</div>

			<div class="sale">
				<img src="/wp-content/themes/surpeer//images/sale-1.jpg" />
			</div>

			<div class="posts-carousel">
				<div class="container">
					<div class="title-1">
						<h3>Latest News</h3>
					</div>
					<div id="news-slider">
<?php
    $args=array(
        'cat' => 2, 
        'posts_per_page' => 4, 
    );	
    query_posts($args);
	
    if(have_posts()) : while (have_posts()) : the_post();
?>
						<div class="group">
							<div class="item-col">
								<div class="post-wrapper">
									<?php if (catch_that_image()):?>
									<div class="post-thumb">
										<a href="<?php the_permalink(); ?>">
											<img src="<?php echo catch_that_image(); ?>" alt="<?php the_title(); ?>"
										</a>
									</div>
									<?php endif?>	
									<div class="post-info">
										<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
										<div class="post-meta">
											<p class="post-author">By <?php the_author(); ?></p>
											<div class="post-date">on <span class="day"><?php  the_time('y/m/d'); ?></span></div>
											<p class="post-comment">&lt;span&gt;1&lt;/span&gt; comment</p>
										</div>
										<div class="post-excerpt">
											<p>
												<?php if (has_excerpt()) {
									                echo $description = get_the_excerpt(); 
									            }else {
									                echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 120,"……"); 
									            } ?>
												
											</p>
										</div>
										
									</div>
								</div>
							</div>
						</div>
<?php  endwhile; endif; wp_reset_query(); ?>

									
						
						
						

					</div>
				</div>
			</div>

		</div>









		
		
<?php get_footer();?>