<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">
						
						<div id="main" role="main">
						
							<div class="inner-wrap">
	
								<?php 
								// loop starts
								
									if ( have_posts() ) {
								
										while ( have_posts() ) {
										
											the_post(); 
											
								?>
								
							<article id="post-<?php the_ID(); ?>" class="post" role="article">

								<header class="article-header">

									<h1 class="post-title"><?php the_title(); ?></h1>
									
									<div class="byline">
																				
									</div>

								</header> <!-- end article header -->

								<section class="article-content">
								
									<?php the_content(); ?>
									
								</section> <!-- end article-content section -->

								<footer class="article-footer">
								
								<?php
									
									$category = get_the_category(); 
										
										if($category[0]){
										
								?>
								
									<div class="byline">
									
										<p>Posted by <?php the_author_link(); ?> el <?php the_time('l j \d\e F \d\e Y'); ?> under <a href="<?php get_category_link($category[0]->term_id ); ?>"><?php echo $category[0]->cat_name; ?></a>.</p>
										
									</div>
								
								<?php
											
										}
								
									comments_template( $file, $separate_comments );
									
								?>					

								</footer> <!-- end article footer -->

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
								
								<div id="pagination">
									<p><?php posts_nav_link(); ?></p>
								</div>
		
	
							</div> <!-- end #main -->
						
						</div> <!-- end #main-wrap -->
						
						<?php get_sidebar(); ?>

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
