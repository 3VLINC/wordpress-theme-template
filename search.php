<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">

					<div id="main" role="main">
					
						<h1 class="archive-title">Search Results for: <?php echo get_search_query(); ?></h1>

							<?php 
							// loop starts
							
								if ( have_posts() ) {
							
									while ( have_posts() ) {
									
										the_post(); 
										
							?>
							
								<article id="post-<?php the_ID(); ?>" class="post" role="article">
	
									<header class="article-header">
	
										<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										
										<p class="byline">
										
											<?php echo 'Posted by' . get_the_author() . 'on' . get_the_time('l F jS, Y'); ?>
											
										</p><!-- end .byline -->
	
									</header> <!-- end article header -->
	
									<section class="entry-content">
									
										<?php the_content(); ?>
										
									</section> <!-- end .entry-content -->
	
									<footer class="article-footer">
									
										<p class="tags"><?php the_tags(); ?>:</p>
	
									</footer> <!-- end a.rticle-footer -->
	
									<?php // comments_template(); // uncomment if you want to use them ?>
	
								</article> <!-- end article -->
								
								<?php 	
								
										} // end while
									
									} // end if
									
									else {
								
								?>
									
								<article id="post-not-found" class="post">
								
									<header class="article-header">
									
										<h1>Post not found</h1>
										
									</header>
									
									<section class="entry-content">
									
										<p>Sorry, the content you requested doesn't exist or is not available at this moment.</p>
										
									</section>
									
									<footer class="article-footer">
									
									</footer>
									
								</article>
							
							<?php 
							
								} //end else 
								
							// loop ends
							?>
							
							<div id="pagination"><p><?php posts_nav_link(); ?></p></div> 

						</div> <!-- end #main -->

						<?php get_sidebar(); ?>

					</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
