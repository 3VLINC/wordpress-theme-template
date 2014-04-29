<?php get_header(); ?>

			<div id="content">

				<div id="inner-content">
				
					<div id="page-header">
					
						<h1>Archives Title</h1>
						
					</div>

					<?php get_sidebar(); ?>
						
					<div id="main">
					
						<div class="inner-wrap">

							<?php 
							// loop starts
							
								if ( have_posts() ) {
							
									while ( have_posts() ) {
									
										the_post(); 
										
							?>
								
							<?php if (is_category()) { ?>
								
								<h2 class="archive-title">
								
									<?php 
										echo 'Articles under: ';
										single_cat_title(); 
									?>
									
								</h2>

							<?php } elseif (is_tag()) { ?>
							
								<h2 class="archive-title">
								
									<?php 
										echo 'Articles under: ';
										single_tag_title();
									?>
									
								</h2>

							<?php } elseif (is_author()) {
							
								global $post;
								$author_id = $post->post_author;
							?>
							
								<h2 class="archive-title">

									<?php
										echo 'Posts By: ' . get_the_author_meta('display_name', $author_id);
									?>

								</h2>
								
							<?php } elseif (is_day()) { ?>
							
								<h2 class="archive-title">
								
									<?php
										echo 'Articles in: ' . get_the_time('l, F j, Y');
									?>
								</h2>

							<?php } elseif (is_month()) { ?>
							
								<h2 class="archive-title">

									<?php
										echo 'Monthly Archives: ' . get_the_time('F Y');
									?>

								</h2>

							<?php } elseif (is_year()) { ?>
							
									<h1 class="archive-title">
									
										<?php
											echo 'Yearly Archives: ' . get_the_time('Y');
										?>
									</h1>
									
							<?php } ?>
								
							<article id="post-<?php the_ID(); ?>" class="post" role="article">

								<header class="article-header">

									<h3 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									
									<div class="byline">
									
										<?php the_time('F jS, Y'); ?>
										
									</div><!-- end .byline -->

								</header> <!-- end .article-header -->

								<section class="entry-content">
																	
									<?php 
								
										if ( has_post_thumbnail() ) {
										
											echo '<div class="featured-img">'; 
								
											the_post_thumbnail('full-width'); 
											
											echo '</div>';
									
										}
										
										the_excerpt();
										
									?>

								</section><!-- end .entry-content -->
								
								<footer class="article-footer">
								
								</footer><!-- end .article-footer -->
								
							</article>
								
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
								
							</div><!-- end #pagination -->

						</div> <!-- end .inner-wrap-->
					
					</div> <!-- end #main -->

				</div> <!-- end #inner-content -->

			</div> <!-- end #content -->

<?php get_footer(); ?>
