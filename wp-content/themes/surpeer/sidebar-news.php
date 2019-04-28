						<div class="group">

							<h3 class="widget-title">INSTAGRAM</h3>
							<ul>
								<li>
									<a href="/">
										<img src="/wp-content/themes/surpeer/images/shop-sidebar.jpg" >
									</a>
								</li>								
							</ul>

						</div>
						<div class="group">
							<h3 class="widget-title">RECENT NEWS</h3>
							<ul>
								<?php while (have_posts()) : the_post(); ?>	
								<li>
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</li>
								<?php endwhile;?>		

							</ul>

						</div>