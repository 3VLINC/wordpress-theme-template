<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">
				
					<?php get_sidebar(); ?>
						
					<div id="main">
					
						<div class="inner-wrap">
					
							<?php 
							// loop starts
							
								if ( have_posts() ) {
								
							?>
													<h1 class="archive-title">
						
							Search for "<span class="search-query"> <?php echo get_search_query(); ?> </span>" returned these results:
							
						</h1>
						
							<?php
							
									while ( have_posts() ) {
									
										the_post(); 
										
							?>
							
						<article id="post-<?php the_ID(); ?>" class="post" role="article">

							<header class="article-header">

								<h2 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
								<div class="byline">
									
									<?php the_time('j F, Y'); ?>
									
								</div>

							</header> <!-- end article header -->

							<section class="article-content">
																
								<?php 
							
									if ( has_post_thumbnail() ) {
									
								?>
									<div class="featured-img">
									
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail('full-width'); ?></a>
									
									</div>
									
								
								<?php
								
									}
									
									the_excerpt();
									
								?>
																				
								
							</section> <!-- end article section -->

							<footer class="article-footer">

							</footer> <!-- end article footer -->

						</article> <!-- end article -->
							
							<?php 	
						
								} // end while
							
							} // end if
							
							else {
						
						?>
								
						<article id="post-not-found" class="post">
						
							<header class="article-header">
							
								<h1 class="not-found">Oops...</h1>
								
							</header>
							
							<section class="entry-content">
							
								<p>Your search didn't return any results. Try again (with a diferent query...)</p>
								
								
									<form method="get" id="search" action="<?php bloginfo('url'); ?>/">
										
										<div id="searchform-2">
										
											<input type="text" value="<?php the_search_query(); ?>" name="s" id="search-text-2" />
	
											<input type="submit" id="search-submit-2" value="Search again" />
	
										</div>
									
									</form>
															
							</section>
							
							<footer class="article-footer">
							</footer>
							
						</article>
							
							
							<?php 
						
							} //end else 
							
						// loop ends
						?> 							
							
							<div id="pagination">
								<p><?php posts_nav_link(); ?></p>
							</div>
	
						</div> <!-- end #inner-wrap -->
											
					</div> <!-- end #main -->
					
					<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
