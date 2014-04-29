<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">
				
					<div id="page-header">
					
						<h2 class="h1">Blog Title</h1>
						
					</div><!-- end #page-header -->

					<?php get_sidebar(); ?>
						
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

									<h1 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									
									<div class="byline">
									
										<?php 
										
											the_time('F jS, Y'); 
		
											$category = get_the_category(); 
											
											if($category[0]){
											
												echo '<div class="categories"><a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a></div>';
											}
											
										?>
										
									</div><!-- end .byline -->

								</header> <!-- end .article-header -->

								<section class="entry-content">
								
									<?php the_content(); ?>
									
								</section> <!-- end .entry-content -->

								<footer class="article-footer">
								
									<?php comments_template( $file, $separate_comments ); ?>

								</footer> <!-- end .article-footer -->

							</article> <!-- end article -->
								
							<?php 	
						
								} // end while
							
							} // end if
							
							else {
						
							?>
									
							<article id="post-not-found" class="post">
							
								<header class="article-header">
								
									<h1>Post not found</h1>
									
								</header><!-- end .article-header" -->
								
								<section class="entry-content">
								
									<p>Sorry, the content you requested doesn't exist or is not available at this moment.</p>
									
								</section><!-- end .entry-content -->
								
								<footer class="article-footer">
								
								</footer><!-- end .article-footer -->
								
							</article><!-- end article -->
							
							<?php 
						
							} //end else 
							
							// loop ends
							?> 							
								
							<div id="pagination">
							
								<p><?php posts_nav_link(); ?></p>
								
							</div><!-- end #pagination -->

						</div> <!-- end .inner-wrap-->
					
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
