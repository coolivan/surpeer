<?php get_header();?>

		<div class="banner">
			<div class="container">
				<h2 class="entry-title"></h2>
			</div>
		</div>

		<div class="bread">
			<div class="container">
				<a href="/">Home</a><span class="separator">/</span>About Us
			</div>
		</div>

		<div class="main">
			<div class="container">
				<div class="row">
					<div class="content about-us">
						<?php echo get_post($my_id)->post_content;?>	
					</div>
				</div>
			</div>
		</div>


	
	
	
<?php get_footer();?>