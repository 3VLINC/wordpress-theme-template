<?php get_header(); ?>	

			<div id="content">

				<div id="inner-content">
				
					<?php get_sidebar(); ?>
						
					<div id="main">
					
						<div class="inner-wrap">
				
							<article id="post-not-found" class="post">
						
								<header class="article-header">
								
									<h1 class="not-found">Error 404 - Page not found</h1>
									
								</header>
								
								<section class="entry-content">
								
									<p>The page you are looking doesn't exist!</p>
									
									<p>But don't worry, you can find good stuff to read going to the <a href="<?php echo home_url() ?>" title="Go to home page">home page</a> or using the search form below.</p>
									
										<form method="get" id="search" action="<?php bloginfo('url'); ?>/">
											
											<div id="searchform-2">
											
												<input type="text" value="<?php the_search_query(); ?>" name="s" id="search-text-2" />
		
												<input type="submit" id="search-submit-2" value="Find it for me!" />
		
											</div>
										
										</form>
																
								</section>
								
								<footer class="article-footer">
								</footer>
							
							</article>
							
						</div> <!-- end #inner-wrap -->
											
					</div> <!-- end #main -->
					
					<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>